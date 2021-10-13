<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use App\Models\Company;
use Illuminate\Http\Request;

class AdminCompanyController extends Controller
{
    function __construct() {
        $this->middleware('auth');
    }
    
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
        try {
        $data = $request->except('_token');
        $companies = Company::create($data);
            return redirect()->route('company-list')->with('status', "{$companies->name} was created."); 
        }catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
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
        try {
            $company = Company::query()->where('id', $id)->firstOrFail();
        $data = $request->except('_token');
        $company->update($data);
            return redirect()->route('company-list', ['id' => $company->id])
            ->with('status', "{$company->name} was updated.");
        }catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }
    }

    function delete($id)
    {
        try {
            $company = Company::query()->where('id', $id)->firstOrFail();
            $company->delete();

            return redirect()->route('company-list')
            ->with('status', "{$company->name} was deleted.");
        }catch (QueryException $excp) {
            return redirect()->back()->withErrors([
                'error' => $excp->errorInfo[2],
            ]);
        }     
    }

}
