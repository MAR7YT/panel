<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

namespace Pterodactyl\Services\Helpers;

use Ramsey\Uuid\Uuid;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Database\ConnectionInterface;

class TemporaryPasswordService
{
    const HMAC_ALGO = 'sha256';

    /**
     * @var \Illuminate\Database\ConnectionInterface
     */
    protected $connection;

    /**
     * @var \Illuminate\Contracts\Hashing\Hasher
     */
    protected $hasher;

    /**
     * TemporaryPasswordService constructor.
     *
     * @param \Illuminate\Database\ConnectionInterface $connection
     * @param \Illuminate\Contracts\Hashing\Hasher     $hasher
     */
    public function __construct(ConnectionInterface $connection, Hasher $hasher)
    {
        $this->connection = $connection;
        $this->hasher = $hasher;
    }

    /**
     * Store a password reset token for a specific email address.
     *
     * @param string $email
     * @return string
     */
    public function handle($email)
    {
        $token = hash_hmac(self::HMAC_ALGO, Uuid::uuid4()->toString(), config('app.key'));

        $this->connection->table('password_resets')->insert([
            'email' => $email,
            'token' => $this->hasher->make($token),
        ]);

        return $token;
    }
}
