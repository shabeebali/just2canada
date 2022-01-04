<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkilledWorkerPrevious extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'skilled_worker_previous';

    public function getVisitedCanadaAttribute($val)
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
    public function getAppliedForImmigrationAttribute($val)
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
    public function getPreferredDestinationAttribute($val)
    {
        $string = 'NIL';
        if ($val === 1) {
            $string = 'Any';
        }
        if ($val === 2) {
            $string = 'Alberta (AB)';
        }
        if ($val === 3) {
            $string = 'British Columbia (BC)';
        }
        if ($val === 4) {
            $string = 'Manitoba (MB)';
        }
        if ($val === 5) {
            $string = 'New Brunswick (NB)';
        }
        if ($val === 6) {
            $string = 'Newfoundland and Labrador (NL)';
        }
        if ($val === 7) {
            $string = 'Northwest Territories (NT)';
        }
        if ($val === 8) {
            $string = 'Nova Scotia (NS)';
        }
        if ($val === 9) {
            $string = 'Nunavut (NU)';
        }
        if ($val === 10) {
            $string = 'Ontario (ON)';
        }
        if ($val === 11) {
            $string = 'Prince Edward Island (PE)';
        }
        if ($val === 12) {
            $string = 'Quebec (QC)';
        }
        if ($val === 13) {
            $string = 'Saskatchewan (SK)';
        }
        if ($val === 14) {
            $string = 'Yukon (YT)';
        }
        return $string;
    }

    public function getSubmittedExpressEntryAttribute($val)
    {
        $string = 'NIL';
        if ($val === 2) {
            $string = 'No';
        }
        if ($val === 2) {
            $string = 'Yes';
        }
        if ($val === 3) {
            $string = 'I am not sure what it is';
        }
        return $string;
    }
}
