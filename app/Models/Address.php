<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'unit_no',
        'street_name',
        'residential_area',
        'postal_code',
        'city_id',
        'state_id',
    ];

    protected $searchableFields = ['*'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }
}
