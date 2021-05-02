
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

                     <ul class="nav flex-column">
                     <li class="nav-item">
                              <a class="nav-link active" href="/employee/home/view"> view details</a>
                         </li>
                         
                        <li class="nav-item">
                              <a class="nav-link active" href="/employee/{{$user->id}}/edit"> edit details</a>
                         </li>
                      
                         <li class="nav-item">
                              <a class="nav-link active" href="/employee/trip/{{$user->id}}"> view next trip </a>
                         </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/employee/close/{{$user->id}}">close the account</a>
                        </li>
                    
                     </ul>

                     <div> 
                <a href="/" style="color:red;"> Return Back </a>
                </div>
                     
                </div>

                
            </div>
        </div>
    </div>
</div>

@endsection