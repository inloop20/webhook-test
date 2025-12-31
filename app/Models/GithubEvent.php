<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GithubEvent extends Model
{
    protected $fillable = [
        'event_type',
        'repository',
        'author',
        'message',
    ];
}
