<?php

namespace Laravelir\Dashboarder\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activities';

    // protected $fillable = ['name'];

    protected $guarded = [];
}
