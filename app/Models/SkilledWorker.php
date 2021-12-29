<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkilledWorker extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'aoi' => 'array'
    ];

    public function children()
    {
        return $this->hasOne(SkilledWorkerChildren::class);
    }

    public function education()
    {
        return $this->hasOne(SkilledWorkerEducation::class);
    }

    public function family()
    {
        return $this->hasOne(SkilledWorkerFamily::class);
    }

    public function finance()
    {
        return $this->hasOne(SkilledWorkerFinance::class);
    }

    public function language()
    {
        return $this->hasOne(SkilledWorkerLanguage::class);
    }

    public function occupations()
    {
        return $this->hasMany(SkilledWorkerOccupations::class);
    }

    public function previous()
    {
        return $this->hasOne(SkilledWorkerPrevious::class);
    }

    public function work()
    {
        return $this->hasOne(SkilledWorkerWork::class);
    }
}
