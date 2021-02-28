<?php


namespace AbstractFactory\Repository;


abstract class AbstractDBConnection
{
    abstract public function getConnection();

}