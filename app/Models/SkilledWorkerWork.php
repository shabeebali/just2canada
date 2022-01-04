<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkilledWorkerWork extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'skilled_worker_work';

    public function getBeenTempForeignWorkerAttribute($val)
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

    public function getYearsAsFullTimeAttribute($val)
    {
        $string = '';
        switch ($val) {
            case 0:
                $string = 'None';
                break;
            case 1:
                $string = '1 year';
                break;
            case 2:
                $string = '2 years or more';
                break;
        }
        return $string;
    }

    public function getEmployedInCanadaAttribute($val)
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
    public function getWhenLeftJobAttribute($val)
    {
        $string = '';
        switch ($val) {
            case 1:
                $string = 'Less than a year
                                    ago';
                break;
            case 2:
                $string = 'More than a year
                                    ago';
                break;
        }
        return $string;
    }

    public function getArrangedAttribute($val)
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
    public function getNocAttribute($val)
    {
        $string = '';
        switch ($val) {
            case NULL:
                $string = 'NIL';
                break;
            case '':
                $string = 'NIL';
                break;
            case 1:
                $string = 'NOC 00';
                break;
            case 2:
                $string = 'NOC 0, A, B';
                break;
            case 3:
                $string = 'Not sure';
                break;
        }
        return $string;
    }
    public function getHasQualificationCertificateAttribute($val)
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

    public function getHasNominationCertificateAttribute($val)
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
}
