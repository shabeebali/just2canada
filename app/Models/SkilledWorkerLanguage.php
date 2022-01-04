<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkilledWorkerLanguage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = ['general' => 'array', 'ielts' => 'array', 'celpip' => 'array', 'general_french' => 'array', 'french_tef' => 'array'];
    protected $table = 'skilled_worker_language';

    public function getLanguageTestAttribute($val)
    {
        $string = '';
        switch ($val) {
            case 1:
                $string = 'IELTS';
                break;
            case 2:
                $string = 'CELPIP';
                break;
            case 3:
                $string = 'No';
                break;
        }
        return $string;
    }

    public function getDoneTefAttribute($val)
    {
        $string = '';
        switch ($val) {
            case NULL:
                $string = 'NIL';
                break;
            case '':
                $string = 'NIL';
                break;
            case 0:
                $string = 'No';
                break;
            case 1:
                $string = 'Yes';
                break;
        }
        return $string;
    }

    public function getCelpipAttribute($val)
    {
        $val = json_decode($val, TRUE);
        foreach ($val as $key => $value) {
            $val[$key] = 'Level ' . $value;
        }
        return $val;
    }
    public function getGeneralAttribute($val)
    {
        $val = json_decode($val, TRUE);
        foreach ($val as $key => $value) {
            $val[$key] = $this->getLanguageOptionValue($value);
        }
        return $val;
    }
    public function getGeneralFrenchAttribute($val)
    {
        $val = json_decode($val, TRUE);
        foreach ($val as $key => $value) {
            $val[$key] = $this->getLanguageOptionValue($value);
        }
        return $val;
    }
    public function getLanguageOptionValue($val)
    {
        switch ($val) {
            case 1:
                return 'Advanced/Native Proficiency (CLB 9+)';
                break;
            case 2:
                return 'Upper Intermediate (CLB 8)';
                break;
            case 3:
                return 'Intermediate (CLB 7)';
                break;
            case 4:
                return 'Lower Intermediate (CLB 5)';
                break;
            case 5:
                return 'Basic (CLB 3)';
                break;
            case 6:
                return 'Not at all (CLB 1)';
                break;
            default:
                return '';
        }
    }
}
