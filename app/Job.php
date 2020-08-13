<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'description', 'companyId','companyName', 'type', 'createdBy', 'userId'
    ];
}
