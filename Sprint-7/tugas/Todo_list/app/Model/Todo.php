<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = "tugas"; //kita simpan nama table dari db nya disini.
    
    protected $fillable = ['tugas'];
}
