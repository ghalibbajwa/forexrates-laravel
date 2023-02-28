<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DataTables;
use Storage;
use App\Setting;
use App\Report;
use App\Compaign;

class SiteSettingController extends Controller
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'setting' => Setting::get(),
        ];

        return view('site-setting', $data);
    }
    
    public function store(Request $request)
    {
        $input = $request->except('_token');
        foreach ($input as $key => $value) {
            $setting = Setting::where('key',$key)->first();
            if(empty($setting))
            {
                if($key == "intro-video"){
                    $value = Storage::disk('compaign_videos')->putFile('',$value);
                }
                $setting = new Setting;
                $setting->key = $key;   
            }else{
                if($key == "intro-video"){
                    Storage::disk('compaign_videos')->delete($value);
                    $value = Storage::disk('compaign_videos')->putFile('',$value);
                }
            }
            $setting->value = $value;
            $setting->save();
        }

        return redirect()->back()->with('success','Settings Updated');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function reports()
    {
        $data = [
            'compaigns' =>  Compaign::get(),
        ];
        return view('reports.reports',$data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        $reports = Report::with('user','comments.compaign','comments.user')->orderBy('created_at','desc')->select(['id','user_id','reporter_id', 'comment','created_at']);

        return DataTables::of($reports)->make();
    }
}
