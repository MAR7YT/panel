<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

namespace Pterodactyl\Console\Commands\Node;

use Symfony\Component\Yaml\Yaml;
use Illuminate\Console\Command;
use Illuminate\Container\Container;
use Illuminate\Contracts\Encryption\Encrypter;
use Pterodactyl\Contracts\Repository\NodeRepositoryInterface;

class DeployNodeCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'p:node:deploy
                            {--name= : A name to identify the node.}';

    /**
     * @var string
     */
    protected $description = 'Deploys an existing node on the system via the CLI.';

    /**
     * @var \Illuminate\Support\Collection
     */
    protected $nodes;

    /**
     * @var \Pterodactyl\Contracts\Repository\NodeRepositoryInterface
     */
    protected $repository;


    /**
     * Returns the configuration as an array.
     *
     * @return array
     */
    public function getConfiguration(&$node)
    {
        return [
            'debug' => false,
            'uuid' => $node->uuid,
            'token_id' => $node->daemon_token_id,
            'token' => Container::getInstance()->make(Encrypter::class)->decrypt($node->daemon_token),
            'api' => [
                'host' => '0.0.0.0',
                'port' => $node->daemonListen,
                'ssl' => [
                    'enabled' => (!$node->behind_proxy && $node->scheme === 'https'),
                    'cert' => '/etc/letsencrypt/live/' . $node->fqdn . '/fullchain.pem',
                    'key' => '/etc/letsencrypt/live/' . $node->fqdn . '/privkey.pem',
                ],
                'upload_limit' => $node->upload_size,
            ],
            'system' => [
                'data' => $node->daemonBase,
                'sftp' => [
                    'bind_port' => $node->daemonSFTP,
                ],
            ],
            'allowed_mounts' => $node->mounts->pluck('source')->toArray(),
            'remote' => route('index'),
        ];
    }

    public function handle(NodeRepositoryInterface $repository)
    {
        $this->repository = $repository;
        $this->nodes = $this->nodes ?? $this->repository->all();
        $data['name'] = $this->option('name') ?? $this->ask('Enter a valid node name');

        $node = $this->nodes->where('name', $data['name'])->first();
        if (is_null($node)) {
            $this->error('Could not locate a record using the provided name.');
            return;
        }

        $config = Yaml::dump($this->getConfiguration($node), 4, 2, Yaml::DUMP_EMPTY_ARRAY_AS_SEQUENCE);
        file_put_contents("/etc/pterodactyl/config.yml", $config);

        $this->line('Successfully unencrypted the requested Node Token! - ' . Container::getInstance()->make(Encrypter::class)->decrypt($node->daemon_token));
    }
}
