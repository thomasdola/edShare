@extends('study_hub.partials.master')
    <!-- Fixed navbar -->

    @section('body')

        @include('study_hub.partials.nav_bar')


        @include('study_hub.partials.banner')
                <div class="container">
                    <div class="page-section">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="panel panel-default">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="bg-green-400 text-white">
                                                <div class="panel-body">
                                                    <i class="fa fa-credit-card fa-fw fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            Your subscription ends on <span class="text-body-2">25 February 2015</span>
                                        </div>
                                        <div class="media-right media-padding">
                                            <a class="btn btn-white paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated href="#">
                            Upgrade
                        </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" data-toggle="isotope">
                                    <div class="item col-xs-12 col-lg-6">
                                        <div class="panel panel-default paper-shadow" data-z="0.5">
                                            <div class="panel-heading">
                                                <h4 class="text-headline margin-none">Courses</h4>
                                                <p class="text-subhead text-light">Your recent courses</p>
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item media v-middle">
                                                    <div class="media-body">
                                                        <a href="website-take-course.html" class="text-subhead list-group-link">Basics of HTML</a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="progress progress-mini width-100 margin-none">
                                                            <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item media v-middle">
                                                    <div class="media-body">
                                                        <a href="website-take-course.html" class="text-subhead list-group-link">Angular in Steps</a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="progress progress-mini width-100 margin-none">
                                                            <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item media v-middle">
                                                    <div class="media-body">
                                                        <a href="website-take-course.html" class="text-subhead list-group-link">Bootstrap Foundations</a>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="progress progress-mini width-100 margin-none">
                                                            <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="panel-footer text-right">
                                                <a href="website-student-courses.html" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#"> View all</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-xs-12 col-lg-6">
                                        <div class="panel panel-default paper-shadow" data-z="0.5">
                                            <div class="panel-body">
                                                <h4 class="text-headline margin-none">Rewards</h4>
                                                <p class="text-subhead text-light">Your latest achievements</p>
                                                <div class="icon-block half img-circle bg-purple-300">
                                                    <i class="fa fa-star text-white"></i>
                                                </div>
                                                <div class="icon-block half img-circle bg-indigo-300">
                                                    <i class="fa fa-trophy text-white"></i>
                                                </div>
                                                <div class="icon-block half img-circle bg-green-300">
                                                    <i class="fa fa-mortar-board text-white"></i>
                                                </div>
                                                <div class="icon-block half img-circle bg-orange-300">
                                                    <i class="fa fa-code-fork text-white"></i>
                                                </div>
                                                <div class="icon-block half img-circle bg-red-300">
                                                    <i class="fa fa-diamond text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default paper-shadow" data-z="0.5">
                                            <div class="panel-heading">
                                                <h4 class="text-headline">Certificates
                                                    <small>(4)</small>
                                                </h4>
                                            </div>
                                            <div class="panel-body">
                                                <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                                    <i class="fa fa-file-text"></i>
                                                </a>
                                                <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                                    <i class="fa fa-file-text"></i>
                                                </a>
                                                <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                                    <i class="fa fa-file-text"></i>
                                                </a>
                                                <a class="btn btn-default text-grey-400 btn-lg btn-circle paper-shadow relative" data-hover-z="0.5" data-animated data-toggle="tooltip" data-title="Name of Certificate">
                                                    <i class="fa fa-file-text"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-xs-12 col-lg-6">
                                        <div class="panel panel-default paper-shadow" data-z="0.5">
                                            <div class="panel-heading">
                                                <h4 class="text-headline margin-none">Quizzes</h4>
                                                <p class="text-subhead text-light">Your recent performance</p>
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item media v-middle">
                                                    <div class="media-body">
                                                        <h4 class="text-subhead margin-none">
                                                            <a href="website-take-quiz.html" class="list-group-link">Title of quiz goes here?</a>
                                                        </h4>
                                                        <div class="caption">
                                                            <span class="text-light">Course:</span>
                                                            <a href="website-take-course.html">Basics of HTML</a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right text-center">
                                                        <div class="text-display-1">5.8</div>
                                                        <span class="caption text-light">Good</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item media v-middle">
                                                    <div class="media-body">
                                                        <h4 class="text-subhead margin-none">
                                                            <a href="website-take-quiz.html" class="list-group-link">Directives & Routing</a>
                                                        </h4>
                                                        <div class="caption">
                                                            <span class="text-light">Course:</span>
                                                            <a href="website-take-course.html">Angular in Steps</a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right text-center">
                                                        <div class="text-display-1 text-green-300">9.8</div>
                                                        <span class="caption text-light">Great</span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item media v-middle">
                                                    <div class="media-body">
                                                        <h4 class="text-subhead margin-none">
                                                            <a href="website-take-quiz.html" class="list-group-link">Responsive & Retina</a>
                                                        </h4>
                                                        <div class="caption">
                                                            <span class="text-light">Course:</span>
                                                            <a href="website-take-course.html">Bootstrap Foundations</a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right text-center">
                                                        <div class="text-display-1 text-red-300">3.4</div>
                                                        <span class="caption text-light">Failed</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="panel-footer">
                                                <a href="website-student-quizzes.html" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#"> Go to Results</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item col-xs-12 col-lg-6">
                                        <h4 class="text-headline margin-none">Forum Activity</h4>
                                        <p class="text-subhead text-light">Latest forum topics & comments</p>
                                        <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated>
                                            <li class="list-group-item paper-shadow">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img src="{{asset('img/studyHub/images/people/110/guy-3.jpg')}}" alt="person" class="img-circle width-40" />
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="website-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                                        <div class="text-light">
                                                            Topic: <a href="website-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="width-60 text-right">
                                                            <span class="text-caption text-light">1 hr ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item paper-shadow">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img src="{{asset('/img/studyHub/images/people/110/guy-6.jpg')}}" alt="person" class="img-circle width-40" />
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="website-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                                        <div class="text-light">
                                                            Topic: <a href="website-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="width-60 text-right">
                                                            <span class="text-caption text-light">2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item paper-shadow">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img src="{{asset('/img/studyHub/images/people/110/guy-5.jpg')}}" alt="person" class="img-circle width-40" />
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="website-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                                        <div class="text-light">
                                                            Topic: <a href="website-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="width-60 text-right">
                                                            <span class="text-caption text-light">3 hr ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item paper-shadow">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img src="{{asset('img/studyHub/images/people/110/guy-4.jpg')}}" alt="person" class="img-circle width-40" />
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="website-forum-thread.html" class="text-subhead link-text-color">Can someone help me with AngularJS?</a>
                                                        <div class="text-light">
                                                            Topic: <a href="website-forum-category.html">AngularJS</a> &nbsp; By: <a href="#">Adrian Demian</a>
                                                        </div>
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="width-60 text-right">
                                                            <span class="text-caption text-light">4 hr ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                            </div>
                            @include('study_hub.partials.right_side_bar')
                        </div>
                    </div>
                </div>


        @include('study_hub.partials.footer')

        @include('study_hub.partials.scripts')

    @endsection