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
                    <form method="post" action="/customer/getDetails">
                        @csrf

                        <input type="hidden" name="_method" value="PUT">


                    

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" name='email' type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  required>

                            
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ok') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div> 
                <a href="/home" style="color:red;"> Return Back </a>
                </div>


                     
                </div>

                
            </div>
        </div>
    </div>
</div>
</body>
</html>














