<?php

namespace Laravelir\Dashboarder\Models;

use Illuminate\Database\Eloquent\Model;
use Laravelir\Dashboarder\Traits\HasUUID;
use Laravelir\Dashboarder\Traits\RouteKeyNameUUID;

class CRUD extends Model
{
    use RouteKeyNameUUID,
        HasUUID;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cruds';

    // protected $fillable = ['name'];

    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('active', true)->get();
    }
}
