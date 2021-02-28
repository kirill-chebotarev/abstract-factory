<?php

namespace AbstractFactory\SQLFactories;

use AbstractFactory\Contract\AbstractFactoryInterface;
use AbstractFactory\Repository\AbstractDBConnection;
use AbstractFactory\Repository\AbstractDBQueryBuilder;
use AbstractFactory\Repository\AbstractDBRecord;
use AbstractFactory\Repository\OracleDBConnection;
use AbstractFactory\Repository\OracleDBQueryBuilder;
use AbstractFactory\Repository\OracleDBRecord;

/**
 *
 *
 */
class OracleSQLFactory implements AbstractFactoryInterface
{
    public function createDBConnection():AbstractDBConnection
    {
        return new OracleDBConnection();
    }
    public function makeDBQueryBuilder():AbstractDBQueryBuilder
    {
        return new OracleDBQueryBuilder();
    }
    public function getDBRecord():AbstractDBRecord
    {
        return new OracleDBRecord();
    }
}