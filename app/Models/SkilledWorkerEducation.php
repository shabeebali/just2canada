<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkilledWorkerEducation extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'skilled_worker_education';

    public function getHighestLevelAttribute($val)
    {
        $string = '';
        switch ($val) {
            case 1:
                $string = 'Ph. D.';
                break;
            case 2:
                $string = 'Master\'s degree';
                break;
            case 3:
                $string = '2 or more Bachelor\'s degrees';
                break;
            case 4:
                $string = 'Bachelor\'s degree (4 years)';
                break;
            case 5:
                $string = 'Bachelor\'s degree (3 years)';
                break;
            case 6:
                $string = 'Bachelor\'s degree (2 years)';
                break;
            case 7:
                $string = 'Bachelor\'s degree (1 year)';
                break;
            case 8:
                $string = 'Diploma, Trade certificate, or Apprenticeship (3 years)';
                break;
            case 9:
                $string = 'Diploma, Trade certificate, or Apprenticeship (2 years)';
                break;
            case 10:
                $string = 'Diploma, Trade certificate, or Apprenticeship (1 year)';
                break;
            case 11:
                $string = 'High school diploma';
                break;
            case 12:
                $string = 'Below high school diploma';
                break;
        }
        return $string;
    }

    public function getToeiAttribute($val)
    {
        $string = '';
        switch ($val) {
            case 1:
                $string = 'Public';
                break;
            case 2:
                $string = 'Private';
                break;
        }
        return $string;
    }
    public function getCompletedPostSecAttribute($val)
    {
        $string = '';
        switch ($val) {
            case 0:
                $string = 'No';
                break;
            case 1:
                $string = 'Yes';
                break;
        }
        return $string;
    }

    public function getPostSecPeriodAttribute($val)
    {
        $string = '';
        switch ($val) {
            case 1:
                $string = '1 year';
                break;
            case 2:
                $string = '2 years';
                break;
            case 2:
                $string = '3 years or more';
                break;
        }
        return $string;
    }
}
