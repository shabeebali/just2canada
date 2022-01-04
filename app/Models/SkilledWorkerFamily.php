<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkilledWorkerFamily extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'skilled_worker_family';

    public function getHasBloodRelativeAttribute($val)
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

    public function getRelativeWishToSponsorAttribute($val)
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

    public function getFullTimeStudentAttribute($val)
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

    public function getRelativeAgeAttribute($val)
    {
        $string = '';
        switch ($val) {
            case 0:
                $string = 'Younger than 18 years';
                break;
            case 1:
                $string = '18 years or over';
                break;
        }
        return $string;
    }

    public function getDependantFinancialAttribute($val)
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

    public function getRelativeEmploymentStatusAttribute($val)
    {
        $string = '';
        switch ($val) {
            case 1:
                $string = 'Employed';
                break;
            case 2:
                $string = 'Self-Employed';
                break;
            case 3:
                $string = 'Unemployed';
                break;
        }
        return $string;
    }
    public function getRelationshipAttribute($val)
    {
        $string = 'None';
        switch ($val) {
            case 1:
                $string = 'Mother or father';
                break;
            case 2:
                $string = 'Daughter or son';
                break;
            case 3:
                $string = 'Sister or brother';
                break;
            case 4:
                $string = 'Niece or nephew';
                break;
            case 5:
                $string = 'Grandmother or grandfather';
                break;
            case 6:
                $string = 'Granddaughter or grandson';
                break;
            case 7:
                $string = 'Aunt or uncle';
                break;
            case 8:
                $string = 'Spouse or common-law partner';
                break;
        }
        return $string;
    }
}
