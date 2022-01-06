<?php

namespace App\Http\Controllers;

use App\Models\BusinessImmigration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class BusinessImmigrationController extends Controller
{
    public function submit(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        Validator::make($request->toArray(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'nationality' => 'required',
            'reference' => 'required',
            'currently_in_canada' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'experience' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'qualification' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'dob' => 'required',
            'marital_status' =>  function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'spouse_dob' => function ($attribute, $value, $fail) use ($request) {
                if ($request->marital_status == 'married' && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'spouse_experience' => function ($attribute, $value, $fail) use ($request) {
                if ($request->marital_status == 'married' && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'no_of_children' => function ($attribute, $value, $fail) use ($request) {
                if (($request->marital_status == 'married' || $request->marital_status == 'divorced' || $request->marital_status == 'legally_seperated') && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'has_children_lt_22' => function ($attribute, $value, $fail) use ($request) {
                if (($request->marital_status == 'married' || $request->marital_status == 'divorced' || $request->marital_status == 'legally_seperated') && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'children_enrolled' => function ($attribute, $value, $fail) use ($request) {
                if (($request->marital_status == 'married' || $request->marital_status == 'divorced' || $request->marital_status == 'legally_seperated') && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'children_canadian' => function ($attribute, $value, $fail) use ($request) {
                if (($request->marital_status == 'married' || $request->marital_status == 'divorced' || $request->marital_status == 'legally_seperated') && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'children_mental' => function ($attribute, $value, $fail) use ($request) {
                if (($request->marital_status == 'married' || $request->marital_status == 'divorced' || $request->marital_status == 'legally_seperated') && ($value == '' || $value == null)) {
                    $fail('This field is required');
                }
            },
            'ordered_to_leave' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'arrested' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'been_military' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'employed_security' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'visited' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'visited_countries' => function ($attribute, $value, $fail) use ($request) {
                if ($request->visited == 'yes' && ($value == '' || $value == null || !$value)) {
                    $fail('This field is required');
                }
            },
            'has_blood_relative' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'relative_province' => function ($attribute, $value, $fail) use ($request) {
                if ($request->has_blood_relative == 'yes' && ($value == '' || $value == null || !$value)) {
                    $fail('This field is required');
                }
            },
            'visited_canada' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'visited_in_2' => function ($attribute, $value, $fail) use ($request) {
                if ($request->visited_canada == 'yes' && ($value == '' || $value == null || !$value)) {
                    $fail('This field is required');
                }
            },
            'visited_province' => function ($attribute, $value, $fail) use ($request) {
                if ($request->visited_canada == 'yes' && $request->visited_in_2 == 'yes' && ($value == '' || $value == null || !$value)) {
                    $fail('This field is required');
                }
            },
            'refused' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'refused_detail' => function ($attribute, $value, $fail) use ($request) {
                if ($request->refused == 'yes' && ($value == '' || $value == null || !$value)) {
                    $fail('This field is required');
                }
            },
            'assets' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'language_test' =>  function ($attribute, $value, $fail) {
                if ($value == '' || $value == null) {
                    $fail('This field is required');
                }
            },
            'language_proficiency' =>  function ($attribute, $value, $fail) use ($request) {
                if ($request->language_test == 'no' && ($value == '' || $value == null || !$value)) {
                    $fail('This field is required');
                }
            },
            'interested_programs' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null || !$value) {
                    $fail('This field is required');
                }
            },
            'prefered_location' => function ($attribute, $value, $fail) {
                if ($value == '' || $value == null || !$value) {
                    $fail('This field is required');
                }
            },
            'password' => [
                function ($attribute, $value, $fail) use ($request, $user) {
                    if (!Auth::check()) {
                        if (!$user) {
                            if ($request->password != $request->password_confirmation) {
                                $fail('Password does not match');
                            }
                        } else {
                            if (!Hash::check($value, $user->password)) {
                                $fail('Incorrect Password');
                            }
                        }
                    }
                }
            ],
        ])->validate();

        if (!$user) {
            $user = User::create([
                'name' => $request->firstname . ' ' . $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }
        if (!Auth::user()) {
            Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ]);
        }
        /*
        $model = new BusinessImmigration($request->only([
            'fullname',
            'email',
            'phone',
            'country',
            'nationality',
            'reference',
            'currently_in_canada',
            'experience',
            'describe',
            'qualification',
            'dob',
            'marital_status',
            'ordered_to_leave',
            'arrested',
            'been_military',
            'employed_security',
            'visited',
            'has_blood_relative',
            'visited_canada',
            'refused',
            'assets',
            'language_test',
            'interested_programs',
            'prefered_location'
        ]));
        */
        $model = new BusinessImmigration($request->toArray());
        $model->save();

        return response()->json(['message' => 'success']);
    }
}
