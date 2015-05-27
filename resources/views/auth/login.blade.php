@extends('study_hub.partials.master')

@section('body')

<body class="login">
    <div id="content">
        <div class="container-fluid">
            {{--<form class="lock-container">--}}
            {!! Form::open(['class'=>'lock-container']) !!}
                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                    <h1 class="text-display-1 text-center margin-bottom-none">Sign In</h1>
                    <img src="{{asset('img/studyHub/images/people/110/guy-5.jpg')}}" class="img-circle width-80">
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="form-control-material">
                                <input class="form-control" id="email" type="email" placeholder="Email" name="email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-control-material">
                                <input class="form-control" id="password" type="password" placeholder="Enter Password" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Login <i class="fa fa-fw fa-unlock-alt"></i></button>
                    {!! Form::close() !!}
                        <a href="{{url('/auth/password')}}" class="forgot-password">Forgot password?</a>
                        <a href="{{url('/auth/register')}}" class="link-text-color">Create account</a>
                    </div>
                </div>

            {{--</form>--}}
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <strong>Learning</strong> v1.0.0 &copy; Copyright 2015
    </footer>
    <!-- // Footer -->
    @include('study_hub.partials.scripts')
</body>

@stop