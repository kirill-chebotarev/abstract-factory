<?php

namespace AbstractFactory\Contract;

interface AbstractFactoryInterface
{
    public function createDBConnection();
    public function makeDBQueryBuilder();
    public function getDBRecord();
}
