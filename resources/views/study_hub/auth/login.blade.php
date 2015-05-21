@extends('study_hub.partials.master')

@section('body')

<body class="login">
    <div id="content">
        <div class="container-fluid">
            <div class="lock-container">
                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                    <h1 class="text-display-1 text-center margin-bottom-none">Sign In</h1>
                    <img src="images/people/110/guy-5.jpg" class="img-circle width-80">
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="form-control-material">
                                <input class="form-control" id="username" type="text" placeholder="Username">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-control-material">
                                <input class="form-control" id="password" type="password" placeholder="Enter Password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <a href="website-student-dashboard.html" class="btn btn-primary">Login <i class="fa fa-fw fa-unlock-alt"></i></a>
                        <a href="#" class="forgot-password">Forgot password?</a>
                        <a href="sign-up.html" class="link-text-color">Create account</a>
                    </div>
                </div>
            </div>
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