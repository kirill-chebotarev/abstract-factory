<?php

namespace AbstractFactory\Repository;


class MySqlDBConnection extends AbstractDBConnection
{
    public function getConnection()
    {
        echo "Устанавливаем связь с MySQL";
    }

}