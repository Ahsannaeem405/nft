<?php

namespace App\Http\Controllers;

use App\Models\Upcoming;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UpcomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function detail(){

return view('user.detail');
     }
    function upcoming(){

        $view = Upcoming::where('status', 1)->get();


        return view('user.upcoming', compact('view'));

    }


    function view_index(){


    //     $get=Http::get('https://testnets-api.opensea.io/api/v1/assets?order_direction=desc&offset=0&limit=20');
    //    $res=json_decode($get->body());
    //  dd(  $res);




     $data=Http::get('https://api.opensea.io/api/v1/collections?asset_owner=0x495f947276749Ce646f68AC8c248420045cb7b5e&offset=0&limit=6');
        $data=json_decode($data->body());


        $data1=Http::get('https://api.opensea.io/api/v1/collections?asset_owner=0x495f947276749Ce646f68AC8c248420045cb7b5e&offset=0&limit=12');
        $data1=json_decode($data1->body());


        return view('user.index', compact('data', 'data1'));


    }






     public function approved($id){

        $upc = Upcoming::find($id);
        $upc->status = 1;

        $upc->save();
        return back()->with('success', 'Updated Successfully');

     }

     public function disapproved($id){

        $upc = Upcoming::find($id);
        $upc->status = 2;

        $upc->save();
        return back()->with('success', 'Updated Successfully');

     }




    public function index()
    {


        $date =  date("Y/m/d");

        $today = Upcoming::whereDate('created_at', $date)->get()->count();
        $all = Upcoming::all()->count();
        $upcc = Upcoming::get()->take(5);
        $ad_all = User::all()->count();





        $count = null;
        $count1 = null;
        $count2 = null;
        $count3 = null;
        $count4 = null;
        $count5 = null;
        $pre_month1 = null;
        for ($i = 4; $i >= 0; $i--) {
            $pre_month1 .= date('M-Y', strtotime('-' . $i . ' month')) . ',';
        }




        $pre_month1 = explode(',', $pre_month1);

        // dd($pre_month1['0']);
        $users = Upcoming::pluck('created_at')->all();


        foreach ($users as $user) {



            if (date('M-Y', strtotime($user)) == $pre_month1['0']) {
                $count1 += 1;
            } elseif (date("M-Y", strtotime($user)) == $pre_month1['1']) {
                $count2 += 1;
            } elseif (date("M-Y", strtotime($user)) == $pre_month1['2']) {
                $count3 += 1;
            } elseif (date("M-Y", strtotime($user)) == $pre_month1['3']) {
                $count4 += 1;
            } elseif (date("M-Y", strtotime($user)) == $pre_month1['4']) {
                $count5 += 1;
            }
        }

        $count =[
            "$count1","$count2"," $count3", "$count4", "$count5"
        ];



// dd($count);

        return view('admin.index', compact('today', 'all', 'ad_all', 'count','pre_month1', 'upcc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $upc = new Upcoming();
        $upc->name = $request->name;
        $upc->email = $request->email;
        $upc->url = $request->url;
        $upc->official_url = $request->official_url;
        $upc->official_twitter = $request->official_twitter;
        $upc->openSea_link = $request->openSea_link;
        $upc->maximum_number = $request->maximum_number;
        $upc->unit_price = $request->unit_price;
        $upc->date = $request->date;
        $upc->time = $request->time;

        $upc->short_description = $request->short_description;
        $upc->tell_us = $request->tell_us;
        $upc->project_differences = $request->project_differences;
        $upc->projects_roadmap = $request->projects_roadmap;
        $upc->links_images = $request->links_images;


        $upc->blockchain = $request->blockchain;
        $upc->derivative = $request->derivative;
        $upc->status = 0;
        $upc->save();

        return back()->with('success', 'Form Submitted Successfully');
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
     * @param  \App\Models\Upcoming  $upcoming
     * @return \Illuminate\Http\Response
     */
    public function show(Upcoming $upcoming)
    {
            $view = Upcoming::orderBy('id', 'desc')->get();

            return view('admin.viewApplications', compact('view'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upcoming  $upcoming
     * @return \Illuminate\Http\Response
     */

    public function edit(Upcoming $upcoming)
    {
return view('admin.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upcoming  $upcoming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $admin = User::find(Auth::user()->id);

        $admin->name = $request->firstname;

        $admin->email = $request->email;


        if($request->password!=null)
        {

            $admin->password=Hash::make($request->password);
        }

        $admin->update();
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upcoming  $upcoming
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upcoming $upcoming)
    {
        //
    }
}
