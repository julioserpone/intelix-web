<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name_legal','identification','address','phone','email_jobs','email_contacts','facebook_account','instagram_account','twitter_account','youtube_account'];
    
}
