<?php

namespace App\Models;


use Arcanedev\Support\Bases\Model;

class Jr extends Model
{
    // 数据库'dadtabase_jr'中的users表
    protected $connection = 'mysql_lo';
    protected $table = "user";

}
