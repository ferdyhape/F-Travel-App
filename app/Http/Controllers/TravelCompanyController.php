<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TravelCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = auth()->user()->travelCompany;
        return view('dashboard_company.profile.index', [
            'company' => $company,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // dd($request);
        $validateCompany = $request->validate([
            'name' => 'required|max:50|min:3',
            'description' => 'required|max:255|min:3',
            'email' => 'required|email:rfc,dns|unique:travel_companies,email,' . $id . ',id',
            'address' => 'required|max:100|min:3',
            'phone_number' => 'required|max:15|min:10',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        // dd($validateCompany);

        if ($request->hasFile('logo')) {
            if (auth()->user()->travelCompany->logo) {
                Storage::delete('public/' . auth()->user()->travelCompany->logo);
            }
            $validateCompany['logo'] = $request->file('logo')->store('company', 'public');
        }

        $company = auth()->user()->travelCompany;
        $company->update($validateCompany);

        return redirect('/my-company/profile')->with('success', 'Berhasil mengubah profile company');
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
