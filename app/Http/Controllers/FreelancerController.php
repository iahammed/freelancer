<?php

namespace App\Http\Controllers;

use App\CurrencyConverter\CurrencyConvertContract;
// use App\CurrencyConverter\CurrencyConverter;
use App\Models\Freelancer;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freelances = Freelancer::All();
        return view('Freelancer.index', compact('freelances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Freelancer.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'      =>  'required',
            'email'     =>  'required',
            'rate'      =>  'required|numeric',
            'currency'  =>  'required',
            'phone'     =>  'required',
            'address'   =>  'required', 
            'skills'    =>  'required', 
            'profile'   =>  'required', 
        ]);

        $data['skills'] = json_encode(explode(", ", $request->skills));
        $freelancer = Freelancer::create($data);
        return view('freelancer.show', compact('freelancer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Freelancer $freelancer, CurrencyConvertContract $currencyConverter)
    {
        $freelancer->converted = json_encode($currencyConverter->convert($freelancer->currency, $freelancer->rate));
        return view('freelancer.show', compact('freelancer'));
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
