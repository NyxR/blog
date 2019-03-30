@extends("layout.layout")

@section('title', $title)

@section('links')
    <link rel="stylesheet" href="{{ asset('css/signin.css')}}">
@endsection

@section('content')

    <div class="signinBox">
           <img src="{{ asset('img/HyperDevVectFin.png')}}" alt="">
            <h3>Sign In here</h3>
            <form action="" method="">
               <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="inputBox">
                    <input type="text" name="mail" placeholder="e-mail">
                    <span><i class="fa fa-user"></i></span>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" placeholder="password">
                    <span><i class="fa fa-lock"></i></span>
                </div>
                <input type="submit" class="signBox-btn">
                <a href="">Forget your Password?</a>
            </form>
    </div>
@endsection