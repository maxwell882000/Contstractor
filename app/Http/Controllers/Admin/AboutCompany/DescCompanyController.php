<?php

namespace App\Http\Controllers\Admin\AboutCompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DescCompanyController extends Controller
{
    private const PATH = "about_company.pages.desc_company.";

    public function companyAboutTitleShow()
    {
        return view(self::PATH . "company_about_title");
    }

    public function companyAboutTitleInput(){
        return redirect()->back();
    }

    public function companyAboutShowList()
    {
        return view(self::PATH . "company_about_show");
    }

    public function companyAboutShow()
    {
        return view(self::PATH . "company_about_input");
    }

    public function companyAboutInput()
    {
        return redirect()->back();
    }
}
