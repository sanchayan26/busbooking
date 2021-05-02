<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Document</title>
    
</head>
<body>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">customer Dashboard</div>

                <div class="card-body">
                @if(isset($trips))

    
                    <h3> employee name : {{$trips->employee_name}}</h3>
                    <h3> employee phone number : {{$trips->employee_phonenumber}}</h3>
                    <h3> bus number : {{$trips->busnumber}}</h3>
                    <h3> start time : {{$trips->start_time}}</h3>
                    <h3> start date : {{$trips->start_date}}</h3>


                        
                    @else
                    <h3 style="color:red;">At the Moment You dont have any Trips</h3>
                    @endif

                    <div> 
                <a href="/customer" style="color:red;"> Return Back </a>
                </div>


                     
                </div>

                
            </div>
        </div>
    </div>
</div>
</body>
</html>














