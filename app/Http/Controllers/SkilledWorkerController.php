<?php

namespace App\Http\Controllers;

use App\Models\SkilledWorker;
use App\Models\SkilledWorkerChildren;
use App\Models\SkilledWorkerEducation;
use App\Models\SkilledWorkerFamily;
use App\Models\SkilledWOrkerFinance;
use App\Models\SkilledWorkerLanguage;
use App\Models\SkilledWorkerOccupations;
use App\Models\SkilledWorkerPrevious;
use App\Models\SkilledWorkerWork;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SkilledWorkerController extends Controller
{
    public function submit(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $request->validate([
            'password' => [
                'required',
                function ($attribute, $value, $fail) use ($request, $user) {
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
            ]
        ]);

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
        $resume = FALSE;
        if ($request->resume) {
            $resume = $request->file('resume')->store('resumes');
        }
        $request = $request->toArray();
        //dd($request);
        $data = Arr::only($request, [
            'firstname',
            'lastname',
            'salution',
            'dob',
            'spouse_dob',
            'marital_status',
            'country_id',
            'resident_country_id',
            'phone',
            'fax',
            'hear_us',
            'aoi',
            'further_info'
        ]);
        if ($data['spouse_dob'] == null || $data['spouse_dob'] == 'null') {
            $data['spouse_dob'] = NULL;
        }
        $aoi = json_decode($data['aoi']);
        if (!is_array($aoi)) {
            $aoi = [$aoi];
        }
        $data['aoi'] = $aoi;
        $data['user_id'] = $user->id;
        $model = SkilledWorker::create($data);
        if ($resume) {
            $model->resume_uri = $resume;
            $model->save();
        }
        $children = new SkilledWorkerChildren(json_decode($request['children'], TRUE));
        $model->children()->save($children);

        $education = new SkilledWorkerEducation(json_decode($request['education'], TRUE));
        $model->education()->save($education);

        $language = new SkilledWorkerLanguage;
        $langReq = json_decode($request['language'], TRUE);
        if ($langReq['language_test']) {
            if ($langReq['language_test'] == 1) { //IELTS 
                $language->ielts = $langReq['language']['ielts'];
            }
            if ($langReq['language_test'] == 2) { // CELPIP 
                $language->celpip = $langReq['language']['celpip'];
            }
            if ($langReq['language_test'] == 3) { // GENERAL 
                $language->general = $langReq['language']['general'];
            }
        }
        if ($langReq['done_tef'] == 1) {
            $language->general_french = $langReq['language']['general_french'];
        }
        if ($langReq['done_tef'] === 0 || $langReq['done_tef'] === '0') {
            $language->french_tef = $langReq['language']['french_tef'];
        }
        $model->language()->save($language);

        $work = new SkilledWorkerWork(json_decode($request['work'], TRUE));
        $model->work()->save($work);

        $familyData = json_decode($request['family'], TRUE);
        foreach ($familyData as $key => $v) {
            if ($v === '') {
                $familyData[$key] = NULL;
            }
        }
        $family = new SkilledWorkerFamily($familyData);
        $model->family()->save($family);

        $prevReq = json_decode($request['previous'], TRUE);
        foreach ($prevReq as $key => $v) {
            if ($v == '') {
                $prevReq[$key] = NULL;
            }
        }
        $previous = new SkilledWorkerPrevious($prevReq);
        $model->previous()->save($previous);

        foreach (json_decode($request['occupations'], TRUE) as $occupation) {
            $occupationModel = new SkilledWorkerOccupations($occupation);
            $model->occupations()->save($occupationModel);
        }

        $finance = new SkilledWOrkerFinance(json_decode($request['business'], TRUE));
        $model->finance()->save($finance);

        return response()->json(['message' => 'success']);
    }
}
