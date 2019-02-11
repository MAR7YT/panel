<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'header' => [
        'title' => 'Allocations',
        'overview' => '<small>Control allocations available for servers on this node.</small>',
        'admin' => 'Admin',
        'nodes' => 'Nodes',
    ],
    'content' => [
        'about' => 'About'
        'settings' => 'Settings',
        'configuration' => 'Configuration',
        'allocation' => 'Allocation',
        'servers' => 'Servers', 
        'exist' => 'Existing Allocations',
        'ip' => 'IP Address',
        'alias' => 'IP Alias',
        'port' => 'port',
        'assign' => 'Assigned To',
        'assign_new' => 'Assign New Allocations',
        'ip_hint' => 'Enter an IP address to assign ports to here.',
        'alias_hint' => 'If you would like to assign a default alias to these allocations enter it here.',
        'ports' => 'Ports',
        'ports_hint' => 'Enter individual ports or port ranges here separated by commas or spaces.',
        'submit' => 'Submit',
        'delete' => 'Delete Allocations for IP Block',
        'close' => 'Close',
        'delete_allocations' => 'Delete Allocations',
    ],
    'configuration' => [
        'header' => [
            'title' => 'Configuration',
            'overview' => '<small>Your daemon configuration file.</small>',
            'admin' => 'Admin',
        ],
        'content' => [
            'config' => 'Configuraion Files',
            'config_hint' => 'This file should be placed in your daemon"s <code>config</code> directory in a file called <code>core.json</code>.',
            'auto' => 'Auto-Deploy',
            'auto_hint' => 'To simplify the configuration of nodes it is possible to fetch the config from the panel. A token is required for this process. The button below will generate a token and provide you with the commands necessary for automatic configuration of the node. <em>Tokens are only valid for 5 minutes.</em>',
            'generate' => 'Generate Token',
            'success_title' => 'Token created.',
            'success_textStart' => 'Your token will expire <strong>in 5 minutes.</strong><br /><br />',
            'success_textEnd' => 'To auto-configure your node run the following command:',
            'error_title' => 'Error',
            'error_text' => 'Something went wrong creating your token.',
        ],
    ],
    'index' => [
        'header' = > '<small>A quick overview of your node.</small>',
        'information' => 'Information'
        'daemon_ver' => 'Daemon Version',
        'latest' => 'Latest:'
        'sys_info' => 'System Information',
        'all_cpu' => 'Total CPU Cores',
        'description' => 'Description',
        'delete_node' => 'Delete Node',
        'delete_node_hint' => 'Deleting a node is a irreversible action and will immediately remove this node from the panel. There must be no servers associated with this node in order to continue.',
        'delete_confirm' => 'Yes, Delete This Node',
        'glance' => 'At-a-Glance',
        'maintenance' => '<span class="info-box-text">This node is under</span>
        <span class="info-box-number">Maintenance</span>',
        'disk' => 'Disk Space Allocated',
        'memory' => 'Memory Allocated',
        'total_servers' => 'Total Servers',
    ],
    'servers' => [
        'header' => [
            'overview' => '<small>All servers currently assigned to this node.</small>',
        ],
        'content' => [
            'process' => 'Process Manager',
            'id' => 'ID',
            'name' => 'Server Name',
            'owner' => 'Owner',
            'service' => 'Service',
            'memory' => 'Memory',
            'disk' => 'Disk',
            'cpu' => 'CPU',
            'status' => 'Status',
        ],
    ],
    'settings' => [
        'header' => [
            'overview' => '<small>Configure your node settings.</small>',
        ],
        'content' => [
            'name' => 'Node Name',
            'limit' => '<small>Character limits: <code>a-zA-Z0-9_.-</code> and <code>[Space]</code> (min 1, max 100 characters).</small>',
            'location' => 'Location',
            'auto' => 'Allow Automatic Allocation',
            'auto_title' => 'Allow automatic allocation to this Node?'
            'yes' => 'Yes',
            'no' => 'No',
            'fqdn' => 'Fully Qualified Domain Name',
            'fqdn_hint' => '<small>Please enter domain name (e.g <code>node.example.com</code>) to be used for connecting to the daemon. An IP address may only be used if you are not using SSL for this node.',
            'fqdn_title' => 'Why do I need a FQDN?',
            'fqdn_answer' => 'In order to secure communications between your server and this node we use SSL. We cannot generate a SSL certificate for IP Addresses, and as such you will need to provide a FQDN.',
            'why' => 'Why?',
            'ssl' => 'Communicate Over SSL',
            'use_ssl' => 'Use SSL Connection',
            'use_http' => 'Use HTTP Connection',
            'http_hint' => 'In most cases you should select to use a SSL connection. If using an IP Address or you do not wish to use SSL at all, select a HTTP connection.',
            'proxy_true' => 'Behind Proxy',
            'proxy_false' => 'Not Behind Proxy',
            'proxy_hint' => 'If you are running the daemon behind a proxy such as Cloudflare, select this to have the daemon skip looking for certificates on boot.',
            'maintenance' => 'Maintenance Mode',
            'disabled' => 'Disabled',
            'enabled' => 'Enabled',
            'maintenance_hint' => 'If the node is marked as ‘Under Maintenance’ users won’t be able to access servers that are on this node.'
            'allocation_limit' => 'Allocation Limits',
            'memory' => 'Total Memory',
            'overallocate' => 'Overallocate',
            'overallocate_hint' => 'Enter the total amount of memory available on this node for allocation to servers. You may also provide a percentage that can allow allocation of more than the defined memory.',
            'disk_space' => 'Disk Space',
            'disk_space_hint' => 'Enter the total amount of disk space available on this node for server allocation. You may also provide a percentage that will determine the amount of disk space over the set limit to allow.',
            'configuration' => 'General Configuration',
            'max_upload' => 'Maximum Web Upload Filesize',
            'max_upload_hint' => 'Enter the maximum size of files that can be uploaded through the web-based file manager.',
            'daemon_port' => 'Daemon Port',
            'sftp_port' => 'Daemon SFTP Port',
            'sftp_hint' => 'The daemon runs its own SFTP management container and does not use the SSHd process on the main physical server. <Strong>Do not use the same port that you have assigned for your physical server’s SSH process.</strong>',
            'save_settings' => 'Save Settings',
            'reset_key' => 'Reset Daemon Master Key',
            'reset_key_hint' => '<small>Resetting the daemon master key will void any request coming from the old key. This key is used for all sensitive operations on the daemon including server creation and deletion. We suggest changing this key regularly for security.</small>',
            'save_changes' => 'Save Changes',
        ],
    ],
];
