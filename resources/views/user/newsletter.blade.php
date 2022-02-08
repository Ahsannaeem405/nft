
@extends('user.layout.default')
@section('content')
    <!--Nav Bar start-->
@include('user.layout.header')
    <!--Nav Bar end-->
    <!--Newsletter page Start-->
    <div class="newletter">
        <div class="container-fluid my-5 ">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 py-5 px-0">
                    <div class="newsletter-from text-center">
                        @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
                        <h2>SIGN UP TO A NEWSLETTER!</h2>
                        <p>For exclusive recipes, discount, opportunities and new prodects announcements, plus a few surpirse</p>
                        <form action="{{url('/newsletter/send')}}" method="post">
                            @csrf
                            <div class="newletter-form d-flex justify-content-center aligin-intems-center">
                                <input type="email" class="w-100 form-control" name="email" placeholder="Enter your email Address">
                                <input type="submit" style="    border: none;
                                background-color: #53B9F3;
                                color: white;
                                padding: 5px 45px;
                                border-radius: 25px" value="Submit">
                                {{-- <button type="submit" value="Submit">  Submit </button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--NewsLetter page End-->
    <!--footer blcok start-->
    @include('user.layout.footer');
@endsection
