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

    protected $dates = ['created_at', 'dob', 'spouse_dob'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function resident_country()
    {
        return $this->belongsTo(Country::class, 'resident_country_id');
    }

    public function application_form()
    {
        return $this->morphOne(ApplicationForm::class, 'typable');
    }

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

    public function getSalutionAttribute($val)
    {
        $string = '';
        switch ($val) {
            case 1:
                $string = 'Mr.';
                break;
            case 2:
                $string = 'Ms.';
                break;
            case 3:
                $string = 'Mrs.';
                break;
            case 4:
                $string = 'Miss.';
                break;
            case 5:
                $string = 'Dr.';
                break;
        }
        return $string;
    }

    public function getMaritalStatusAttribute($val)
    {
        $string = '';
        switch ($val) {
            case 1:
                $string = 'Never Married';
                break;
            case 2:
                $string = 'Married';
                break;
            case 3:
                $string = 'Widowed';
                break;
            case 4:
                $string = 'Legally Seperated';
                break;
            case 5:
                $string = 'Annuled Marriage';
                break;
            case 6:
                $string = 'Divorced';
                break;
            case 7:
                $string = 'Common-Law';
                break;
        }
        return $string;
    }
    public function getAoiAttribute($val)
    {
        $val = json_decode($val);
        $array = [];
        if (in_array('work', $val)) {
            $array[] = 'Work in Canada';
        }
        if (in_array('immigrate', $val)) {
            $array[] = 'Immigarte to Canada';
        }
        if (in_array('study', $val)) {
            $array[] = 'Study in Canada';
        }
        if (in_array('invest', $val)) {
            $array[] = 'Invest in Canada';
        }
        if (in_array('not_sure', $val)) {
            $array[] = 'Not Sure';
        }
        return $array;
    }
}
