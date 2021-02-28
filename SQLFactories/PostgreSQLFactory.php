<?php

namespace AbstractFactory\SQLFactories;

use AbstractFactory\Contract\AbstractFactoryInterface;
use AbstractFactory\Repository\AbstractDBConnection;
use AbstractFactory\Repository\AbstractDBQueryBuilder;
use AbstractFactory\Repository\AbstractDBRecord;
use AbstractFactory\Repository\PostgreDBConnection;
use AbstractFactory\Repository\PostgreDBQueryBuilder;
use AbstractFactory\Repository\PostgreDBRecord;

/**
 *
 *
 */
class PostgreSQLFactory implements AbstractFactoryInterface
{
    public function createDBConnection():AbstractDBConnection
    {
        return new PostgreDBConnection();
    }
    public function makeDBQueryBuilder():AbstractDBQueryBuilder
    {
        return new PostgreDBQueryBuilder();
    }
    public function getDBRecord():AbstractDBRecord
    {
        return new PostgreDBRecord();
    }
}
