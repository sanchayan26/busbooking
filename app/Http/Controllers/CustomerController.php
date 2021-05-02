<?php

namespace App\Http\Controllers;

use App\Customer;
use App\user;
use App\trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Facades\DB;

class CustomerController extends Controller
{



    public function editdetails()
    {
        //
        
        return view('customer.edit');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('customer.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer.booking');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dump($request->all());
        $customer = new customer();
        $customer->name=$request->input('name');
        $customer->phone_number=$request->input('phone_number');
        $customer->start_place=$request->input('start_place');
        $customer->end_place=$request->input('end_place');
        $customer->start_time=$request->input('start_time');
        $customer->start_date=$request->input('start_date');
        $customer->email=$request->input('email');
        $customer->save();

        $place= $_POST["start_place"]; 
        $users = user::where('currentplace','=',$place)->get();

        //dd($users[0]->id);
        $cusId =$customer->id;

        $trip = new trip;
        $trip->customer_id = $cusId;
        $trip->customer_name = $request->input('name');
        $trip->start_place = $request->input('start_place');
        $trip->end_place = $request->input('end_place');
        $trip->start_time = $request->input('start_time');
        $trip->start_date = $request->input('start_date');
        $trip->employee_id = $users[0]->id;
        $trip->employee_name = $users[0]->name;
        $trip->employee_phonenumber = $users[0]->phonenumber;
        $trip->busnumber = $users[0]->busnumber;
        

        $trip->save();
        
       // $name=$request->name;
       // $start_place=$request->start_place;
       // $end_place=$request->end_place;
            
       // DB::insert("insert into trips (customer_name, start_place,end_place,end_place) values ('$name','$start_place','$end_place')");


    //return $users->name;
     //return view('customer.register')->with('users',$users );

     return view('customer.register',compact('users','customer'));

    
                
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function getemail(Request $request, Customer $customer)
    {
        return view('employee.getEmail');
    }

    public function update(Request $request){
        $cusId =0;
        $email =$request->email;
        $cusId=Customer::select('id')->where('email',$email)->first();
    
        $details= trip::select('*')->where('customer_id',$cusId->id)->first();
        return view('viewtrips')->with('trips',$details);
        //        //->orderBy('updated_at','DESC')

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
   
}
