
@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h2>helllo!! {{$user->name}} your details </h2> </div>
                

                <div class="card-body">
                <div style="color: red;">
                <p >Please Change the Current place after trip finished!!! </p>
                </div>

               

                     <ul class="nav flex-column">
                     <li class="nav-item">
                              <a class="nav-link active" ><h3>your  id :- {{$user->id}}</h3> </a>
                         </li>
                        <li class="nav-item">
                              <a class="nav-link active">  <h3>your Name :-{{$user->name}}</h3> </a>
                         </li>
                      
                         <li class="nav-item">
                              <a class="nav-link active" ><h3> bus  number :- {{$user->busnumber}}</h3> </a>
                         </li>
                        <li class="nav-item">
                            <a class="nav-link" ><h3> phone number :- {{$user->phonenumber}}</h3></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" ><h3>your current place :- {{$user->currentplace}}</h3></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" ><h3>your email address :-{{$user->email}}</h3></a>
                        </li>
                    
                     </ul>
                     
                </div>

                <div> 
                <a href="/" style="color:red;"> Return Back </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection