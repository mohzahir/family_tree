<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'big_family_id',
        'father_id',
        'mother_id',
        'country_id',
        'city_id',
        'marriage_date',
        'is_divorced',
        'divorce_date',
        'note',
        'sons_count',
        'daughters_count',
        'deleted_at',
    ];

    public function father()
    {
        return $this->belongsTo(Person::class, 'father_id');
    }
    public function mother()
    {
        return $this->belongsTo(Person::class, 'mother_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    public function bigFamily()
    {
        return $this->belongsTo(BigFamily::class, 'big_family_id');
    }

    public function sons()
    {
        return $this->hasMany(Person::class, 'son_family_id');
    }
}
