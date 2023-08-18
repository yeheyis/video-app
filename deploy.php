<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'y');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('videoapp')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/videoapp');

// Hooks

after('deploy:failed', 'deploy:unlock');
