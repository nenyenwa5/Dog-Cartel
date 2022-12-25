<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use App\Http\Requests\StoreUserProfileRequest;
use App\Http\Requests\UpdateUserProfileRequest;


class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('userViews.create-profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserProfileRequest $request)
    {
        dd('nenye');
        $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:5',
            'address' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
        ]);
        $userProfile = new UserProfile;
        $userProfile->firstname = $request->input('firstname');
        $userProfile->lastname = $request->input('lastname');
        $userProfile ->address = $request->input('address');
        $userProfile->phone = $request->input('phone');
        $userProfile->about_me = $request->input('about_me');
        $userProfile->country = $request->input('country');
        $userProfile->state = $request->input('state');
        $userProfile->user_id = auth()->user()->id;
            if($request->hasFile('photo')){
                $file = $request->file('photo');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('uploads/image/', $filename);
                $userProfile->photo = $filename;
            }      
        
        $userProfile->save();
        return redirect()->back()->with('status', 'Profile created successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserProfileRequest  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserProfileRequest $request, UserProfile $userProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
