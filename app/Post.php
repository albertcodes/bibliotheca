<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
    protected $table = 'posts';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    // Model: A post belongs to a user
    public function user(){
        return  $this->belongsTo('App\User');
    }

}
