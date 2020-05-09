<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $tabel = 'videos';
    protected $guarded = array('id');
}
