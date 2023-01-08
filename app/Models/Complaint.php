<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Complaint extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'delivery_id',
        'description',
        'status',
        'date_received',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'date_received' => 'datetime',
    ];

    public function feedback()
    {
        return $this->hasOne(Feedback::class);
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
}
