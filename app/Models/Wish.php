<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'message', 'name', 'phone', 'guest_id'];
}
