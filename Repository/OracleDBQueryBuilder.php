<?php


namespace AbstractFactory\Repository;


class OracleDBQueryBuilder extends AbstractDBQueryBuilder
{
    public function build()
    {
        return 'Формируем запрос к Oracle';
    }

}