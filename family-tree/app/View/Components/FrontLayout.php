<?php

namespace App\View\Components;

use App\Models\Person;
use Illuminate\View\Component;

class FrontLayout extends Component
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
        $people = Person::limit(20)->get();

        return view('frontend.layout.main', ['people' => $people]);
    }
}
