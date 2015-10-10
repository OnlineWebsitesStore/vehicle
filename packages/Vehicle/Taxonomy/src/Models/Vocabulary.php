<?php

namespace Vehicle\Taxonomy\Models;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $table = 'taxonomy_vocabulary';

    public $timestamps = false;

    protected $fillable = [
    	'name', 'description'
    ];
}