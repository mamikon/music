<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $fillable = ['name'];

    /**
     * Relationship between singer and user
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function disks()
    {
        return $this->hasMany(Disk::class);
    }
}
