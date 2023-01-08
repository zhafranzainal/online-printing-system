<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delivery extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'receipt_id',
        'rider_id',
        'commission_fee',
        'delivered_date',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'delivered_date' => 'datetime',
    ];

    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }

    public function rider()
    {
        return $this->belongsTo(Rider::class);
    }

    public function complaint()
    {
        return $this->hasOne(Complaint::class);
    }
}
