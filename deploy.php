<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/dodclakmuthu/todo-laravel-api.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('18.235.35.223')
    ->set('stage', 'dev')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/dclakmuthu.xyz');

// Hooks

after('deploy:failed', 'deploy:unlock');
