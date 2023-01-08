<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use App\Models\Scopes\Searchable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;
    use HasFactory;
    use Searchable;
    use SoftDeletes;
    use HasApiTokens;
    use HasProfilePhoto;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'role_id',
        'name',
        'email',
        'username',
        'password',
        'mobile_no',
        'address_id',
        'is_rider',
    ];

    protected $searchableFields = ['*'];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_rider' => 'boolean',
        'two_factor_confirmed_at' => 'datetime',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }

    public function riders()
    {
        return $this->hasMany(Rider::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isSuperAdmin()
    {
        return $this->hasRole('super-admin');
    }
}
