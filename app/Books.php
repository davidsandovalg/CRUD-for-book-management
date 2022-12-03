<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //We allocate the database
    protected $table = 'books';
    //Enable the fields that can receive information
    protected $fillable = ['title' , 'isbn', 'year_publication', 'users_id', 'canceled', 'created_at', 'updated_at'];
}
