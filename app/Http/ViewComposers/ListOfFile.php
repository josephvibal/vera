<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

use App\ListOfBIRForm;

class ListOfFile {

    public function compose(View $view) {
    	$filetype  = ListOfBIRForm::orderBy('form_title','asc')->get();
        $view->with('filetype', $filetype);
    }
}