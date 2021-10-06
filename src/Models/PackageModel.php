<?php

namespace Miladimos\Package\Models;

use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model
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
