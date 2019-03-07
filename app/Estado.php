<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $primaryKey = "ID";
    protected $table = "estados";
    public $timestamps = false;
}