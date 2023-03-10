<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'outlet_id',
        'package_id',
        'delivery_option_id',
        'document_file',
        'quantity',
        'total_price',
        'point',
        'status',
        'qr_code',
    ];

    protected $searchableFields = ['*'];

    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function deliveryOption()
    {
        return $this->belongsTo(DeliveryOption::class);
    }

    public function receipt()
    {
        return $this->hasOne(Receipt::class);
    }
}
