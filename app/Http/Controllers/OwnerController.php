<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner = Owner::all()->first();

        return view('owner.create')->with('owner', $owner);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avatarExt = $request->avatar_url->extension();
        $bgExt = $request->avatar_url->extension();

        $request->bg_url->move(public_path('assets/img/owner'), 'hero-bg.' . $avatarExt);
        $request->avatar_url->move(public_path('assets/img/owner'), 'avatar.' . $bgExt);

        
        $owner = Owner::all()->first();

        if(isset($owner)){
            
         Owner::where('id', 1)->update([
                'name' => $request->input('name'),
                'expertises' => $request->input('expertises'),
                'birthdate' => $request->input('birthdate'), 
                'website' => $request->input('website'), 
                'phone' => $request->input('phone'), 
                'city' => $request->input('city'), 
                'degree' => $request->input('degree'), 
                'email' => $request->input('email'),  
                'avatar_url' => 'assets/img/owner/avatar.' . $avatarExt, 
                'bg_url' => 'assets/img/owner/hero-bg.' . $bgExt,
                'address' => $request->input('address')
            ]);
        } else {
            Owner::create([
                'name' => $request->input('name'),
                'expertises' => $request->input('expertises'),
                'birthdate' => $request->input('birthdate'), 
                'website' => $request->input('website'), 
                'phone' => $request->input('phone'), 
                'city' => $request->input('city'), 
                'degree' => $request->input('degree'), 
                'email' => $request->input('email'),  
                'avatar_url' => 'assets/img/owner/avatar.' . $avatarExt, 
                'bg_url' => 'assets/img/owner/hero-bg.' . $bgExt,
                'address' => $request->input('address')
            ]);
        }

        return redirect(route('home'));
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
