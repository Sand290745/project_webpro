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

    function updateForm($id)
    {
        $company = Company::query()->where('id', $id)->firstOrFail();

        return view('admin.company.update-form', [
            'company' => $company,
        ]);
    }

    function update(Request $request, $id)
    {
        $company = Company::query()->where('id', $id)->firstOrFail();
        $data = $request->except('_token');
        $company->update($data);
            return redirect()->route('company-detail', ['id' => $company->id]);
    }

    function delete($id)
    {
            $company = Company::query()->where('id', $id)->firstOrFail();
            $company->delete();

            return redirect()->route('company-list');
    }

}
