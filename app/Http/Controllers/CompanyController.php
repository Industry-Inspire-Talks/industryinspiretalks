<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function insert(Request $request)
    {

        $company = new Company();
        $company->fill($request->input());
        $company->save();

        return redirect()->back()->with('alert', 'Sucessfully Registered');
    }

    public function update(Request $request, Company $company)
    {
        $company->fill($request->input());
        $company->save();

        return redirect()->back()->with('alert', 'Updated Successfully');
    }

    public function delete(Company $company)
    {
        $company->delete();

        return redirect('/companies')->with('alert', 'Deleted Successfully');
    }

}
