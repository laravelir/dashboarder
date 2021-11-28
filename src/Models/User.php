<?php

namespace Laravelir\Dashboarder\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravelir\Dashboarder\Traits\DashboarderUser;
use Laravelir\Dashboarder\Traits\HasUUID;
use Laravelir\Dashboarder\Traits\RouteKeyNameUUID;
use Carbon\Carbon;

class User extends Authenticatable
{
    use RouteKeyNameUUID,
        HasUUID,
        HasFactory,
        Notifiable,
        DashboarderUser;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    public function scopeActive($query)
    {
        return $query->where('active', true)->get();
    }

    public function setCreatedAtAttribute($value)
    {
        $this->attributes['created_at'] = Carbon::parse($value)->format('Y-m-d H:i:s');
    }
}
