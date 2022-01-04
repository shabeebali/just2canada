<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkilledWorkerOccupations extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'skilled_worker_occupations';

    public function getDurationAttribute($val)
    {
        $string = 'NIL';
        switch ($val) {
            case 1:
                $string = '6 years or more';
                break;
            case 2:
                $string = '5 years or more, but less than 6 years';
                break;
            case 3:
                $string = '4 years or more, but less than 5 years';
                break;
            case 4:
                $string = '3 year or more, but less than 4 years';
                break;
            case 5:
                $string = '2 year or more, but less than 3 years';
                break;
            case 6:
                $string = '1 year or more, but less than 2 years';
                break;
            case 7:
                $string = '9 months or more, but less than 1 year';
                break;
            case 8:
                $string = '6 months or more, but less than 9 months';
                break;
            case 9:
                $string = '3 months or more, but less than 6 months';
                break;
            case 10:
                $string = '>Less than 3 months';
                break;
        }
        return $string;
    }

    public function getLocationAttribute($val)
    {
        $string = 'NIL';
        switch ($val) {
            case 1:
                $string = 'Outside Canada';
                break;
            case 2:
                $string = 'In Canada';
                break;
            case 3:
                $string = 'In USA';
                break;
        }
        return $string;
    }

    public function getCurrentlyWorkingAttribute($val)
    {
        $string = 'NIL';
        if ($val === 0) {
            $string = 'No';
        }
        if ($val === 1) {
            $string = 'Yes';
        }
        return $string;
    }


    public function getQualifiedForSocialSecurityAttribute($val)
    {
        $string = 'NIL';
        if ($val === 0) {
            $string = 'No';
        }
        if ($val === 1) {
            $string = 'Yes';
        }
        return $string;
    }
}
