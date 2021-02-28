<?php
declare(strict_types=1);

namespace AbstractFactory;

use AbstractFactory\Entity\Query;
use AbstractFactory\SQLFactories\MySQLFactory;
use AbstractFactory\SQLFactories\PostgreSQLFactory;
use AbstractFactory\SQLFactories\OracleSQLFactory;


spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^AbstractFactory/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});


$q1 = new Query(new MySQLFactory);
echo $q1->getConnection();
echo $q1->buildQuery();
echo $q1->getRecord();

$q2 = new Query(new PostgreSQLFactory);
echo $q2->getConnection();
echo $q2->buildQuery();
echo $q2->getRecord();

$q3 = new Query(new OracleSQLFactory);
echo $q3->getConnection();
echo $q3->buildQuery();
echo $q3->getRecord();
