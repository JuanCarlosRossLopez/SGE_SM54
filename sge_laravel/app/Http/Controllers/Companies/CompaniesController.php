<?php

namespace App\Http\Controllers\Companies;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Companies::all(); 
        return view('companies.companies', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.companies', compact('Companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $company = new Companies();
        $company->company_name = $request->input('company_name');
        $company->addres = $request->input('addres');
        $company->asesor_name = $request->input('asesor_name');
        $company->job = $request->input('job');
        $company->company_phone_number = $request->input('company_phone_number');
        $company->company_email = $request->input('company_email');
        $company->work_area = $request->input('work_area');
        $company->company_description = $request->input('company_description');
        $company->save();

        return redirect('empresas')->with('notification', 'Company created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Companies::find($id);
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Companies::find($id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
      
        ]);

        $company = new Companies();
        $company->company_name = $request->input('company_name');
        $company->addres = $request->input('addres');
        $company->asesor_name = $request->input('asesor_name');
        $company->job = $request->input('job');
        $company->company_phone_number = $request->input('company_phone_number');
        $company->company_email = $request->input('company_email');
        $company->work_area = $request->input('work_area');
        $company->company_description = $request->input('company_description');
        $company->save();

        return redirect('empresas')->with('notification', 'Company created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Companies::find($id);
    
        if (!$company) {
            return redirect('empresas')->with('error', 'Company not found');
        }
    
        $company->delete();
        return redirect('empresas')->with('notification', 'Company deleted successfully');
    }
}
