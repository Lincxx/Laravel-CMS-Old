<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attribute/s that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
