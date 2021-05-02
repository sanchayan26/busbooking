
@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{$user->name}} Dashboard (Driver)</h2></div>

                <div class="card-body">
                @include('multiauth::message')
                <div style="color: red;">
                <p >Please Change the Current place after trip finished!!! </p>
                </div>

                <h3 style="color:Green;">Your Next Trips Details</h3>

                @if(isset($nextTrip))

                <?php
                 $cusId =$nextTrip->customer_id;

                 $cusDetais= \App\Customer::select('*')->where('id',$cusId)->first();

                ?>
                <h3> customer name : {{$cusDetais->name}}</h3>
                <h3> customer phone number : {{$cusDetais->phone_number}}</h3>
                <h3> start place : {{$cusDetais->start_place}}</h3>
                <h3> end place : {{$cusDetais->end_place}}</h3>
                <h3> start time : {{$cusDetais->start_time}}</h3>
                <h3> start date : {{$cusDetais->start_date}}</h3>


                    
                @else
                <h3 style="color:red;">At the Moment You dont have any Trips</h3>
                @endif


                <div> 
                <a href="/home"> Return Back </a>
                </div>

                
        </div>
    </div>
</div>

@endsection