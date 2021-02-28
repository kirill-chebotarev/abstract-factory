<?php

namespace AbstractFactory\Repository;


class PostgreDBConnection extends AbstractDBConnection
{
    public function getConnection()
    {
        echo 'Устанавливаем связь с PostgreSQL';
    }

}