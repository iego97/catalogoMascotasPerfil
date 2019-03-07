<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $primaryKey = "ID";
    protected $table = "paises";
    public $timestamps = false;
}