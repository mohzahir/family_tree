<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = [
        'son_family_id',
        'country_id',
        'city_id',
        'name',
        'another_name',
        'gender',
        'dateOfBirth',
        'is_dead',
        'is_featured',
        'dateOfDeath',
        'photo',
        'note',
        'deleted_at',
    ];

    public function family()
    {
        return $this->belongsTo(Family::class, 'son_family_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    public function wifes()
    {
        $wifes_ids = Family::where('father_id', $this->id)->pluck('mother_id')->toArray();
        // ddd($wifes_ids);
        return self::findOrFail($wifes_ids);
    }
    public function husbands()
    {
        $husbands_ids = Family::where('mother_id', $this->id)->pluck('father_id')->toArray();
        // ddd($husbands_ids);
        return self::findOrFail($husbands_ids);
    }

    public function sons($father_or_mother)
    {
        $families_ids = Family::where($father_or_mother, $this->id)->pluck('id')->toArray();
        // ddd($families_ids, $father_or_mother);
        return self::whereIn('son_family_id', $families_ids)->get();
    }
}
