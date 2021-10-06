<?php

namespace Laravelir\Dashboarder\Models;

use Illuminate\Database\Eloquent\Model;

class DashboarderModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tables';

    // protected $fillable = ['name'];

    protected $guarded = [];
}
