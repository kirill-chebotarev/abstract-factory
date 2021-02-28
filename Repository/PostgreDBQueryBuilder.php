<?php


namespace AbstractFactory\Repository;


class PostgreDBQueryBuilder extends AbstractDBQueryBuilder
{
    public function build()
    {
        return 'Формируем запрос к PostgreSQL';
    }

}