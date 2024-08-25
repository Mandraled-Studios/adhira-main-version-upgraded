<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Duedate extends Model
{
    use SoftDeletes;
    protected $fillable = ["date", "title", "message", "category"];
}
