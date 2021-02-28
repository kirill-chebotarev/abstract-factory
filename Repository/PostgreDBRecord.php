<?php


namespace AbstractFactory\Repository;


class PostgreDBRecord extends  AbstractDBRecord
{
    public function getRecord()
    {
        return "Получаем запись БД PostgreSQL";
    }

}