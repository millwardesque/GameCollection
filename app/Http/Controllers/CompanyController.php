<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Company;
use \Log;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('company.index', array(
          'title' => 'Video game companies',
          'page_h1' => 'Video game companies',
          'companies' => $companies,
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create', array(
          'title' => 'Create a video game company',
          'page_h1' => 'Create a video game company',
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:companies|max:255',
        ]);

        $company = new Company;
        $company->name = $request->input('name');
        $company->description = $request->input('description', "");
        $company->save();

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);

        return view('company.show', array(
            'title' => $company->name,
            'page_h1' => $company->name,
            'company' => $company,
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);

        return view('company.edit', array(
            'title' => 'Edit a video game company',
            'page_h1' => 'Edit a video game company',
            'company' => $company,
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:companies,name,' . $id . '|max:255',
        ]);

        $company->name = $request->input('name');
        $company->description = $request->input('description', "");
        $company->save();

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::destroy($id);
        return redirect()->route('company.index');
    }
}
