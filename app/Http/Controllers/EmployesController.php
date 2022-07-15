<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = DB::table('employes')->simplePaginate(10);
        return view('employes.index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('employes')->insert([
            "first_name" => $request->input('first_name'),
            "last_name" => $request->input('last_name'),
            "company_id" => $request->input('company_id'),
            "email" => $request->input('email'),
            "phone" => $request->input('phone'),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employe = DB::table('employes')->leftJoin('companies', 'companies.id', '=', 'employes.company_id')->where('employes.id', $id)->first();
        return view('employes.show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe = DB::table('employes')->leftJoin('companies', 'companies.id', '=', 'employes.company_id')->where('employes.id', $id)->first();
        return view('employes.edit', compact('employe'));
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
        DB::table('employes')->where('id', $id)->update([
            'first_name' => $request->input('first_name')
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('employes')->where('id', $id)->delete();
        return back();
    }
}
