<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'data';

    function rubric() {
        return $this->belongsTo(Rubric::class , 'rubricId', 'id');
    }
}
