<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('companies.index', ['companies' => Company::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        error_log($request);
        Company::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'trade' => $request['trade'],
            'createdBy' => $request->user()->name,
            'userId' => $request->user()->id
        ]);

        return view ('companies.index', [
            'companies' => Company::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('companies.show', [
            "company"=> Company::findOrFail($id),
            "jobs" => Job::where('companyId', $id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("companies.edit", [
            "company" => Company::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Company::updateOrCreate([
            'id' => $id,
        ], [
            'name' => $request['name'],
            'address' => $request['address'],
            'trade' => $request['trade'],
        ]);

        return view('companies.index', [
            "companies" => Company::all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
