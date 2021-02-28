<?php

namespace AbstractFactory\Repository;


class OracleDBConnection extends AbstractDBConnection
{
    public function getConnection()
    {
        echo 'Устанавливаем связь с Oracle';
    }

}