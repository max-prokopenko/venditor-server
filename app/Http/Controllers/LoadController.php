<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class LoadController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies =  DB::table('companies')->simplePaginate(15);
        return view('loader.companies', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loader.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        set_time_limit(10);

        MyModel::truncate();
        
        for ($i=0; $i <= 42; $i++) {        
            $client = new Client();
            $res = $client->request('GET', 'http://avoindata.prh.fi/tr/v1?totalResults=true&maxResults=1000&companyRegistrationFrom=2014-02-28&resultsFrom='.$i*1000);
            $response = $res->getBody();
            $response = json_decode($response);
            $results = $response->results;
            foreach ($results as $results) {
                $company = new Company;
                $company->businessId = $results->businessId;
                $company->name = $results->name;
                $company->registrationDate = $results->registrationDate;
                $company->companyForm = $results->companyForm;
                $company->detailsUri = $results->detailsUri;
                $company->bisDetailsUri = $results->bisDetailsUri;

                $company->save();
            }
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
