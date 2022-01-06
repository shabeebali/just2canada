<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BusinessImmigrationForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $countries = \App\Models\Country::select('id', 'name')->get();
        return view('components.business-immigration-form', ['countries' => $countries]);
    }
}
