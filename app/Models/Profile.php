<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $timestamps = true;
    protected $table = 'profiles';
    public $fillable = ['id','user_id','photo_url','address','phone','git','skype','created_at','updated_at'];
}
