<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class SkilledWorkerForm extends Component
{
    public $salution;
    public $firstname;
    public $lastname;
    public $marital_status;
    public $dob;
    public $spouse_dob;
    public $country_id;
    public $resident_country_id;
    public $email;
    public $email_confirmation;
    public $hear_us;
    public $phone;
    public $fax;
    public $page;
    public function next1()
    {
        Validator::make([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'salution' => $this->salution,
            'marital_status' => $this->marital_status,
            'dob' => $this->dob,
            'spouse_dob' => $this->spouse_dob,
            'country_id' => $this->country_id,
            'resident_country_id' => $this->resident_country_id,
            'email' => $this->email,
            'email_confirmation' => $this->email_confirmation,
            'hear_us' => $this->hear_us
        ], [
            'firstname' => 'required',
            'lastname' => 'required',
            'salution' => 'required',
            'marital_status' => 'required',
            'dob' => 'required',
            'spouse_dob' => 'required_if:marital_status,2',
            'country_id' => 'required',
            'resident_country_id' => 'required',
            'email' => 'required|email|confirmed',
            // 'hear_us' => 'required'
        ])->validate();
        // $this->dispatchBrowserEvent('page-updated', ['page' => $this->page]);
    }

    public function render()
    {
        $countries = \App\Models\Country::select('id', 'name')->get();
        $this->page = 1;
        return view('livewire.skilled-worker-form', ['countries' => $countries]);
    }
}
