<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver'    => 'sqlsrv',
    'host'      => 'php7-mssql-server.database.windows.net',
    'database'  => 'php7-mssql-database',
    'username'  => 'php7-mssql-server-admin',
    'password'  => '0E6AAB31QP1147KL$',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'pooling'   => false,
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();
