<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class AdminCompanyController extends Controller
{
    function list()
    {
        $companies = Company::query();

        return view('admin.company.list', [
            'companies' => $companies->get(),
        ]);
    }

    function detail($id)
    {
        $company = Company::where('id', $id)->firstOrFail();

        return view('admin.company.detail', [
            'company' => $company,
        ]);
    }

    function createForm()
    {
        $companies = Company::query()->get();

        return view('admin.company.create', [
            'companies' => $companies,
        ]);
    }

    function create(Request $request)
    {
        $data = $request->except('_token');
        $companies = Company::create($data);
            return redirect()->route('company-list');
    }

}
