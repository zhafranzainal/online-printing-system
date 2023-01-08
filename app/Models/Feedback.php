<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $table = 'feedbacks';

    protected $fillable = ['complaint_id', 'description'];

    protected $searchableFields = ['*'];

    public function complaint()
    {
        return $this->belongsTo(Complaint::class);
    }
}
