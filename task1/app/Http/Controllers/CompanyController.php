<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

class CompanyController extends Controller
{
    public function show()
    {
        return view('userview');
    }

    public function store(Request $req)
    {
      //  print_r($req->input());

       $companydata= new Company;
       $companydata->name=$req->name;
       $companydata->address=$req->address;
       echo $companydata->save();

    }
    
}
