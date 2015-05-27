@extends('study_hub.partials.master')

@section('body')

    <body class="container">
        <div id="content" class="col-xs-6 col-xs-offset-3">
            <div class="container-fluid">
                <div class="lock-container">
                    <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                        <h1 class="text-display-1">Create account</h1>
                        <div class="panel-body">
                            <!-- Signup -->
                            <form role="form" action="index.html">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material static required">
                                            <input type="email" class="form-control" id="exampleInputFirstName" placeholder="Your first name">
                                            <label for="exampleInputFirstName">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material static required">
                                            <input type="email" class="form-control" id="exampleInputLastName" placeholder="Your last name">
                                            <label for="exampleInputLastName">Last name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material static required">
                                        <input id="email" type="email" class="form-control" placeholder="Email">
                                        <label for="email">Email address</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material static required">
                                        <input id="username" type="text" class="form-control" placeholder="username">
                                        <label for="username">Public Username</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material static required">
                                        <input id="password" type="password" class="form-control" placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material static required">
                                        <input id="passwordConfirmation" type="password" class="form-control" placeholder="Password Confirmation">
                                        <label for="passwordConfirmation">Re-type password</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material static required">
                                        <select style="width: 100%;" data-toggle="select2" data-placeholder="Select a Country .." data-allow-clear="true">
                                            <option></option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        <div class="form-control-material static required">
                                            <select style="width: 100%;" data-toggle="select2" data-placeholder="Select a Gender .." data-allow-clear="true">
                                                <option></option>

                                                    <option value="AK">Male</option>
                                                    <option value="HI">Female</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <div class="form-control-material static required">
                                            <select style="width: 100%;" data-toggle="select2" data-placeholder="Year of birth" data-allow-clear="true">
                                                <option></option>

                                                    <option value="AK">1992</option>
                                                    <option value="HI">1991</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material static required">
                                        <select style="width: 100%;" data-toggle="select2" data-placeholder="Type Of Course" data-allow-clear="true">
                                            <option></option>

                                                <option value="AK">Juniour High School Courses</option>
                                                <option value="HI">Seniour High School Courses</option>
                                                <option value="HI">Program Courses</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">



                                            <div class="form-control-material">
                                                <textarea id="textarea" class="form-control" rows="5"></textarea>
                                                <label for="textarea">Your Interest In EdShare</label>
                                            </div>


                                </div>
                                <div class="form-group text-center">
                                    <div class="checkbox">
                                        <input type="checkbox" id="agree" />
                                        <label for="agree">* I Agree with <a href="#">Terms &amp; Conditions!</a></label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Create an Account</button>
                                </div>
                            </form>
                            <!-- //Signup -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="content" class="col-xs-6 col-xs-offset-3">
                    <div class="container-fluid">
                        <div class="lock-container">
                            <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                                <h3 class="text-muted">Already have an Account?</h3>
                                <div class="panel-body">
                                    <!-- Signup -->

                                        <div class="text-center">
                                            <a href="{{url('study_hub/auth/login')}}" class="btn btn-primary btn-block">Sign In</a>
                                        </div>

                                    <!-- //Signup -->
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