<?php


namespace AbstractFactory\Repository;


class OracleDBRecord extends  AbstractDBRecord
{
    public function getRecord()
    {
        return 'Получаем запись БД Oracle';
    }

}