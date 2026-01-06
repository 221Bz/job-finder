<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobFinder extends Model {
    use HasFactory;
    protected $fillable = ['logo', 'company', 'job_title', 'location', 'age', 'salary', 'type', 'map_url', 'contact', 'name', 'email', 'contact_user', 'cv', 'status'];
};