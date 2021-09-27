<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile\AEWUser;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{

    public function index()
    {
        return view('dashboard.profile.AEWUser.editPersonalInfo');
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
     * @param  \App\Models\Profile\AEWUser  $aEWUser
     * @return \Illuminate\Http\Response
     */
    public function show(AEWUser $aEWUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile\AEWUser  $aEWUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AEWUser $aEWUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile\AEWUser  $aEWUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AEWUser $aEWUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile\AEWUser  $aEWUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AEWUser $aEWUser)
    {
        //
    }
}
