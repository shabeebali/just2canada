<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkilledWorkerFinance extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'skilled_worker_finance';

    public function getNetWorthAttribute($val)
    {
        $string = 'NIL';
        switch ($val) {
            case 1:
                $string = '0 to 9,999';
                break;
            case 2:
                $string = '10,000 to 24,999';
                break;
            case 3:
                $string = '25,000 to 49,999';
                break;
            case 4:
                $string = '50,000 to 99,999';
                break;
            case 5:
                $string = '100,000 to 299,999';
                break;
            case 6:
                $string = '300,000 to 499,999';
                break;
            case 7:
                $string = '500,000 to 799,999';
                break;
            case 8:
                $string = '800,000 to 999,999';
                break;
            case 9:
                $string = '1,000,000 to 1,599,999';
                break;
            case 10:
                $string = '1,600,000+';
                break;
            case 11:
                $string = 'Prefer not to disclose';
                break;
        }
        return $string;
    }

    public function getHasExperienceAttribute($val)
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

    public function getOwnBusinessAttribute($val)
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

    public function getManagerialExperienceAttribute($val)
    {
        $string = 'NIL';
        switch ($val) {
            case 1:
                $string = '1 Year';
                break;
            case 2:
                $string = '2 Years';
                break;
            case 3:
                $string = '3 Years';
                break;
            case 4:
                $string = '4 Years';
                break;
            case 5:
                $string = '5 Years';
                break;
        }
        return $string;
    }
}
