@extends('layout')
@section('content')
<main>
    <div class="ms-auto me-auto mt-5" style="width: 500px">
        <div class="mt-5">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)                                  
                        <div class="alert alert-danger{{$error}}"></div>    
                    @endforeach    
                </div>              
                           
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>    
            @endif

            @if(session()->has('success'))
                <div class="alert alert-danger">{{session('success')}}</div>        
            @endif
        </div>
        <p>We will send to your email address the link to reset your password</p>
        <form action="{{route('forget.password.post')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email adress</label>
                <input type="email" class="form-control" name="email">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</main>

@endsection