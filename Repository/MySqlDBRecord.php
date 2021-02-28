<?php


namespace AbstractFactory\Repository;


class MySqlDBRecord extends  AbstractDBRecord
{
    public function getRecord()
    {
        return 'Получаем запись БД MySQL';
    }

}