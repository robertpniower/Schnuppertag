<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of companies
     */
    public function index()
    {
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new company
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created company
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'employees_nr' => 'required|integer',
            'street' => 'required|string|max:255',
            'number' => 'required|integer',
            'postalcode' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'phone' => ['required', 'min:8', 'max:10', 'regex:/^\d+$/'],
        ]);

        $company = new Company();
        $company->name = $request->input('name');
        $company->industry = $request->input('industry');
        $company->employees_nr = $request->input('employees_nr');
        $company->street = $request->input('street');
        $company->number = $request->input('number');
        $company->postalcode = $request->input('postalcode');
        $company->city = $request->input('city');
        $company->country = $request->input('country');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $company->phone = $request->input('phone');

        $company->save();

        return redirect('/company')->with('success', 'Company crerated successfully');
    }

    /**
     * Display the specified company
     */
    public function show($company_id)
    {
        $company = Company::find($company_id);
        return view('company.show', compact('company'));
    }

    /**
     * Show the form for editing companies
     */
    public function edit(Company $company)
    {
        return view ('company.edit', [
            'company'=> $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $company->update([
            'name' => $request->input('name'),
            'industry' => $request->input('industry'),
            'employees_nr' => $request->input('employees_nr'),
            'street' => $request->input('street'),
            'number' => $request->input('number'),
            'postalcode' => $request->input('postalcode'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        return redirect()->route('company.index')->with('success', 'Company updated successfully.');
    }

    /**
     * Remove the specified company.
     */
    public function destroy($company_id)
    {
        

        $company = Company::where('company_id', $company_id)->firstOrFail();
        $company->delete();
        return redirect()->route('company.index')->with('success', 'Company deleted successfully.');
    }
}
