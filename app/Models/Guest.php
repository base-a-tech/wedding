<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    CONST SIDE_WIFE = 1;
    CONST SIDE_GROOM = 2;

    CONST SIDES = [
        self::SIDE_WIFE => 'Nhà Gái',
        self::SIDE_GROOM => 'Nhà Trai',
    ];
    use HasFactory;

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'name',
        'phone',
        'email',
        'address',
        'side'
    ];

    public function getSideTextAttribute()
    {
        return self::SIDES[$this->side] ?? 'Không xác định';
    }
}
