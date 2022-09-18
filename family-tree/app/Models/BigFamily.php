<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BigFamily extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'main_person_id',
        'note',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function families()
    {
        return $this->hasMany(Family::class);
    }
}
