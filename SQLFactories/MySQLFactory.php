<?php
namespace AbstractFactory\SQLFactories;

use AbstractFactory\Contract\AbstractFactoryInterface;
use AbstractFactory\Repository\AbstractDBConnection;
use AbstractFactory\Repository\AbstractDBQueryBuilder;
use AbstractFactory\Repository\AbstractDBRecord;
use AbstractFactory\Repository\MySqlDBConnection;
use AbstractFactory\Repository\MySqlDBQueryBuilder;
use AbstractFactory\Repository\MySqlDBRecord;

/**
 *
 *
 */
class MySQLFactory implements AbstractFactoryInterface
{
    public function createDBConnection():AbstractDBConnection
    {
        return new MySqlDBConnection();
    }
    public function makeDBQueryBuilder():AbstractDBQueryBuilder
    {
        return new MySqlDBQueryBuilder();
    }
    public function getDBRecord():AbstractDBRecord
    {
        return new MySqlDBRecord();
    }
}
