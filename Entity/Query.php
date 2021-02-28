<?php


namespace AbstractFactory\Entity;


use AbstractFactory\Contract\AbstractFactoryInterface;

class Query
{
    private $abstractFactory;

    public function __construct(AbstractFactoryInterface $abstractFactory)
    {
        $this->abstractFactory = $abstractFactory;
    }

    public function getConnection()
    {
        return $this->abstractFactory->createDBConnection()->getConnection();
    }

    public function buildQuery()
    {
        return $this->abstractFactory->makeDBQueryBuilder()->build();

    }

    public function getRecord()
    {
        return $this->abstractFactory->getDBRecord()->getRecord();
    }

}