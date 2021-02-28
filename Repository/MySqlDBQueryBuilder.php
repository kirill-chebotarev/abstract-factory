<?php


namespace AbstractFactory\Repository;


class MySqlDBQueryBuilder extends AbstractDBQueryBuilder
{
    public function build()
    {
        return 'Формируем запрос к MySQL';
    }

}