<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $fillable = ['reference', 'client', 'subclient', 'title',  'room', 'start_date', 'end_date', 'privacy', 'start_time', 'end_time', 'interpretation', 'resources', 'status'];
}
