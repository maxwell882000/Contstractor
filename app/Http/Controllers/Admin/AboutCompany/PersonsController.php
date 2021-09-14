<?php

namespace App\Http\Controllers\Admin\AboutCompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    private const  PATH = "admin_panel.pages.about_company.persons.";

    public function personsShowList()
    {
        return view(self::PATH . "persons_show");
    }
    public function personsTitleInput(){
        return redirect()->back();
    }
    public function personsShow()
    {
        return view(self::PATH . "persons_input");
    }

    public function personsInput()
    {
        return redirect()->back();
    }

}
