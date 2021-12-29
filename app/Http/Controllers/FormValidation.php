<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormValidation extends Controller
{
    public function skilledWorkerFormValidation1(Request $request)
    {
        Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'salution' => 'required',
            'marital_status' => 'required|gt:0',
            'dob' => 'required',
            'spouse_dob' => 'required_if:marital_status,2',
            'country_id' => 'required|gt:0',
            'resident_country_id' => 'required|gt:0',
            'email' => 'required|email|confirmed',
            'email_confirmation' => 'required',
            'hear_us' => 'required'
        ], [
            'resident_country_id.*' => 'Please specify the country of current residence',
            'country_id.*' => 'Please specify the country of citizenship',
            'marital_status.*' => 'Please specify marital status',
            'hear_us.required' => 'This field is required',
            'dob.required' => 'This field is required',
            'spouse_dob.*' => 'This field is required',
        ])->validate();
        $user = User::where('email', $request->email)->first();
        return response()->json(['message' => 'success', 'account_exists' => $user ? 1 : 0]);
    }

    public function skilledWorkerFormValidation2(Request $request)
    {
        Validator::make($request->all(), [
            'child_1_age' => function ($attribute, $value, $fail) use ($request) {
                if ($request->no_of_children > 0 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'child_2_age' => function ($attribute, $value, $fail) use ($request) {
                if ($request->no_of_children > 1 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'child_3_age' => function ($attribute, $value, $fail) use ($request) {
                if ($request->no_of_children > 2 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'child_4_age' => function ($attribute, $value, $fail) use ($request) {
                if ($request->no_of_children > 3 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'child_5_age' => function ($attribute, $value, $fail) use ($request) {
                if ($request->no_of_children > 4 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'child_6_age' => function ($attribute, $value, $fail) use ($request) {
                if ($request->no_of_children > 5 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'highest_level' => 'required',
            'name_of_diploma' => 'required',
            'aos' => 'required',
            'cos' => 'required',
            'toei' => 'required',
            'completed_post_sec' => 'required',
            'name_of_bachelor_degree' => 'required',
            'general_french_speak' => function ($attribute, $value, $fail) use ($request) {
                if (($request->done_tef === 0 || $request->done_tef === '0') && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'general_french_read' =>
            function ($attribute, $value, $fail) use ($request) {
                if (($request->done_tef === 0 || $request->done_tef === '0') && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'general_french_write' =>
            function ($attribute, $value, $fail) use ($request) {
                if (($request->done_tef === 0 || $request->done_tef === '0') && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'general_french_listen' =>
            function ($attribute, $value, $fail) use ($request) {
                if (($request->done_tef === 0 || $request->done_tef === '0') && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'french_tef_speak' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->done_tef == 1 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'french_tef_read' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->done_tef == 1 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'french_tef_write' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->done_tef == 1 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'french_tef_listen' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->done_tef == 1 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'general_speak' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 3 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'general_read' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 3 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'general_write' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 3 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'general_listen' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 3 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'celpip_speak' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 2 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'celpip_read' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 2 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'celpip_write' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 2 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'celpip_listen' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 2 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'ielts_speak' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 1 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'ielts_read' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 1 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'ielts_write' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 1 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'ielts_listen' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 1 && ($value == '' || $value == null || $value == 0)) {
                    $fail('This field required');
                }
            },
            'been_temp_foreign_worker' => 'numeric|gte:0',
            'years_as_full_time' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->been_temp_foreign_worker == 1 && ($value == '' || $value == null)) {
                    $fail('This field required');
                }
            },
            'employed_in_canada' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->been_temp_foreign_worker == 1 && ($value == '' || $value == null)) {
                    $fail('This field required');
                }
            },
            'when_left_job' =>
            function ($attribute, $value, $fail) use ($request) {
                if ($request->has('employed_in_canada') && ($request->employed_in_canada === 0 || $request->employed_in_canada === '0') && ($value == '' || $value == null)) {
                    $fail('This field required');
                }
            },
            'arranged' => 'numeric|gte:0',
            'has_qualification_certificate' => 'numeric|gte:0',
            'has_nomination_certificate' => 'numeric|gte:0',
            'has_blood_relative' => 'required',
            'relationship' => 'required_if:has_blood_relative,1',
            'relative_wish_to_sponsor' => function ($attribute, $value, $fail) use ($request) {
                if ($request->has_blood_relative == 1 && $request->relationship != '' && $request->relationship != null && ($request->relationship == 1 || $request->relationship == 2 || $request->relationship == 6 || $request->relationship == 8)) {
                    if ($value == null || $value == '') {
                        $fail('This field is required');
                    }
                }
            },
            'full_time_student' => function ($attribute, $value, $fail) use ($request) {
                if ($request->has_blood_relative == 1 && $request->relative_wish_to_sponsor == 1 && $request->relationship != '' && $request->relationship != null && $request->relationship == 1) {
                    if ($value == null || $value == '') {
                        $fail('This field is required');
                    }
                }
            },
            'relative_age' => function ($attribute, $value, $fail) use ($request) {
                if ($request->has_blood_relative == 1 && $request->relative_wish_to_sponsor == 1 && $request->relationship != '' && $request->relationship != null && ($request->relationship == 2 || $request->relationship == 6)) {
                    if ($value == null || $value == '') {
                        $fail('This field is required');
                    }
                }
            },
            'relative_annual_income' => function ($attribute, $value, $fail) use ($request) {
                if ($request->has_blood_relative == 1 && $request->relative_wish_to_sponsor == 1 && $request->relationship != '' && $request->relationship != null && ($request->relationship == 2 || $request->relationship == 6)) {
                    if ($value == null || $value == '') {
                        $fail('This field is required');
                    }
                }
            },
            'dependant_financial' => 'required_if:has_blood_relative,1',
        ], [
            'child_1_age.*' => 'This field is required',
            'child_2_age.*' => 'This field is required',
            'child_3_age.*' => 'This field is required',
            'child_4_age.*' => 'This field is required',
            'child_5_age.*' => 'This field is required',
            'child_6_age.*' => 'This field is required',
            'highest_level.*' => 'This field is required',
            'name_of_diploma.*' => 'This field is required',
            'aos.*' => 'This field is required',
            'cos.*' => 'This field is required',
            'toei.*' => 'This field is required',
            'completed_post_sec.*' => 'This field is required',
            'name_of_bachelor_degree.*' => 'This field is required',
            'language_test.*' => 'This field is required',
            'general_french_speak.*' => 'This field is required',
            'general_french_read.*' => 'This field is required',
            'general_french_write.*' => 'This field is required',
            'general_french_listen.*' => 'This field is required',
            'french_tef_speak.*' => 'This field is required',
            'french_tef_read.*' => 'This field is required',
            'french_tef_write.*' => 'This field is required',
            'french_tef_listen.*' => 'This field is required',
            'general_speak.*' => 'This field is required',
            'general_read.*' => 'This field is required',
            'general_write.*' => 'This field is required',
            'general_listen.*' => 'This field is required',
            'celpip_speak.*' => 'This field is required',
            'celpip_read.*' => 'This field is required',
            'celpip_write.*' => 'This field is required',
            'celpip_listen.*' => 'This field is required',
            'ielts_speak.*' => 'This field is required',
            'ielts_read.*' => 'This field is required',
            'ielts_write.*' => 'This field is required',
            'ielts_listen.*' => 'This field is required',
            'been_temp_foreign_worker.*' => 'This field is required',
            'years_as_full_time.*' => 'This field is required',
            'employed_in_canada.*' => 'This field is required',
            'when_left_job.*' => 'This field is required',
            'arranged.*' => 'This field is required',
            'has_qualification_certificate.*' => 'This field is required',
            'has_nomination_certificate.*' => 'This field is required',
            'has_blood_relative.*' => 'This field is required',
            'relationship.*' => 'This field is required',
            'relative_wish_to_sponsor.*' => 'This field is required',
            'full_time_student.*' => 'This field is required',
            'relative_age.*' => 'This field is required',
            'relative_annual_income.*' => 'This field is required',
            'dependant_financial.*' => 'This field is required'
        ])->validate();
        return response()->json(['message' => 'success']);
    }
    public function skilledWorkerFormValidation3(Request $request)
    {
        Validator::make($request->all(), [
            'occupations.*.job_title' => 'required'
        ], [
            'occupations.*.job_title.*' => 'This field is required'
        ])->validate();
        return response()->json(['message' => 'success']);
    }
    public function skilledWorkerFormValidation4(Request $request)
    {
        Validator::make($request->all(), [
            'no_of_staff' => function ($attribute, $value, $fail) use ($request) {
                if ($request->net_worth > 5 && $request->has_experience == 1 && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'own_business' => function ($attribute, $value, $fail) use ($request) {
                if ($request->net_worth > 5 && $request->has_experience == 1 && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'percent_of_business' => function ($attribute, $value, $fail) use ($request) {
                if ($request->net_worth > 5 && $request->has_experience == 1 && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'annual_sale' => function ($attribute, $value, $fail) use ($request) {
                if ($request->net_worth > 5 && $request->has_experience == 1 && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'annual_income' => function ($attribute, $value, $fail) use ($request) {
                if ($request->net_worth > 5 && $request->has_experience == 1 && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'net_assets' => function ($attribute, $value, $fail) use ($request) {
                if ($request->net_worth > 5 && $request->has_experience == 1 && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            }
        ])->validate();
        return response()->json(['message' => 'success']);
    }
}
