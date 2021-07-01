<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingsController extends Controller
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
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function show(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->tawkToStatus == 'on'){
            $newTawkToSTatus = 1;
         }else{
             $newTawkToSTatus = 0;
         }
         if($request->whatsAppStatus == 'on'){
             $newwhatsAppStatus = 1;
          }else{
              $newwhatsAppStatus = 0;
          }
 
         
         $updateDetails = array (
             'sitename' => $request->sitename,
             'whatsAppStatus' => $newwhatsAppStatus,
             'tawkToStatus' => $newTawkToSTatus,
             'tawkTo' => $request->tawkTo,
             'email'=>$request->email,
             'email_one'=>$request->email_one,
             'mobile_one'=>$request->mobile_one,
             'mobile_two'=>$request->mobile_two,
             'mpesa'=>$request->mpesa,
             'paypal'=>$request->paypal,
             'tagline'=>$request->tagline,
             'url'=>$request->url,
             'location'=>$request->location,
             'map'=>$request->map,
             'address'=>$request->address,
             'welcome'=>$request->welcome
         );
         
         DB::table('_site_settings')->update($updateDetails);
         Session::flash('message', "Changes have Been Saved");
         return response()->json(['success'=>'Changes Saved Successfully!']);
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSetting $siteSetting)
    {
        //
    }

    public function logo_and_favicon(){
        activity()->log('User Accessed Logo & Favicon Settings Page');
        $SiteSettings = DB::table('_site_settings')->get();
        return view('admin.logo_and_favicon',compact('SiteSettings'));
    }


    public function logo_and_favicon_update(Request $request){
        activity()->log('User Made an update on the logo and the favicons page');
        $path = 'uploads/logo';
        if(isset($request->logo)){
            $file = $request->file('logo');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $logo = $filename;
        }else{
            $logo = $request->logo_cheat;
        }

        if(isset($request->favicon)){
            $file = $request->file('favicon');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $favicon = $filename;
        }else{
            $favicon = $request->favicon_cheat;
        }

        if(isset($request->logo_two)){
            $file = $request->file('logo_two');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $logo_two = $filename;
        }else{
            $logo_two = $request->logo_two_cheat;
        }

        if(isset($request->logo_footer)){
            $file = $request->file('logo_footer');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $logo_footer = $filename;
        }else{
            $logo_footer = $request->logo_footer_cheat;
        }


        $updateDetails = array (
            'logo'=>$logo,
            'logo_footer' =>$logo_footer,
            'logo_two'=>$logo_two,
            'favicon'=>$favicon,
        );

        DB::table('_site_settings')->update($updateDetails);
        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }
}
