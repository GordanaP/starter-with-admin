<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use App\Utilities\CountryList;

class Countries
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     */
    public function compose(View $view)
    {
        $view->with([
            'countries' => CountryList::get()->array,
        ]);
    }
}