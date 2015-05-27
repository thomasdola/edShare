
@extends('study_hub.partials.master')
    <!-- Fixed navbar -->

    @section('body')


            @include('study_hub.partials.nav_bar')



        @include('study_hub.partials.tc_banner')
            <div class="container">
                <div class="page-section">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="page-section padding-top-none">
                                <div class="media media-grid v-middle">
                                    <div class="media-left">
                                        <span class="icon-block half bg-blue-300 text-white">2</span>
                                    </div>
                                    <div class="media-body">
                                        <h1 class="text-display-1 margin-none">The MVC architectural pattern</h1>
                                    </div>
                                </div>
                                <br/>
                                <p class="text-body-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta eius enim inventore minus optio ratione veritatis. Beatae deserunt illum ipsam magni minima mollitia officiis quia tempora! Aliquid autem beatae, dignissimos exercitationem illum, incidunt itaque libero, minima molestiae necessitatibus perferendis quae quas quidem recusandae sit! Esse maxime porro provident quasi?</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda aut debitis, ducimus, ea eaque earum eius enim eos explicabo facilis harum impedit natus nemo, nobis obcaecati omnis perspiciatis praesentium quaerat quas quod reprehenderit sapiente temporibus vel voluptatem voluptates voluptatibus?</p>
                            </div>
                            <h5 class="text-subhead-2 text-light">Curriculum</h5>
                            <div class="panel panel-default curriculum open paper-shadow" data-z="0.5">
                                <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-1">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-block img-circle bg-indigo-300 half text-white"><i class="fa fa-graduation-cap"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="text-headline">Chapter 1</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                                        </div>
                                    </div>
                                    <span class="collapse-status collapse-open">Open</span>
                                    <span class="collapse-status collapse-close">Close</span>
                                </div>
                                <div class="list-group collapse in" id="curriculum-1">
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">1.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-green-300"></i> Installation
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">2:03 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media active" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">2.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-blue-300"></i> The MVC architectural pattern
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">25:01 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">3.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Database Models
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">12:10 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">4.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Database Access
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">1:25 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">5.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Eloquent Basics
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">22:30 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-quiz.html">
                                        <div class="media-left">
                                            <div class="text-crt">6.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Take Quiz
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">10:00 min</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                                <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-2">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-block half img-circle bg-orange-300 text-white"><i class="fa fa-graduation-cap"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="text-headline">Chapter 2</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                                        </div>
                                    </div>
                                    <span class="collapse-status collapse-open">Open</span>
                                    <span class="collapse-status collapse-close">Close</span>
                                </div>
                                <div class="list-group collapse" id="curriculum-2">
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">1.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Installation
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">2:03 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">2.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> The MVC architectural pattern
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">25:01 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">3.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Database Models
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">12:10 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">4.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Database Access
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">1:25 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">5.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Eloquent Basics
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">22:30 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-quiz.html">
                                        <div class="media-left">
                                            <div class="text-crt">6.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Take Quiz
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">10:00 min</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                                <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-3">
                                    <div class="media">
                                        <div class="media-left">
                                            <span class="icon-block half img-circle bg-green-300 text-white"><i class="fa fa-graduation-cap"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="text-headline">Chapter 3</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                                        </div>
                                    </div>
                                    <span class="collapse-status collapse-open">Open</span>
                                    <span class="collapse-status collapse-close">Close</span>
                                </div>
                                <div class="list-group collapse" id="curriculum-3">
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">1.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Installation
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">2:03 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">2.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> The MVC architectural pattern
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">25:01 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">3.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Database Models
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">12:10 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">4.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Database Access
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">1:25 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-course.html">
                                        <div class="media-left">
                                            <div class="text-crt">5.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Eloquent Basics
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">22:30 min</div>
                                        </div>
                                    </div>
                                    <div class="list-group-item media" data-target="website-take-quiz.html">
                                        <div class="media-left">
                                            <div class="text-crt">6.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-grey-200"></i> Take Quiz
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">10:00 min</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <br/>
                        </div>
                        @include('study_hub.partials.tc_right_sidebar')
                    </div>
                </div>
            </div>




    @include('study_hub.partials.footer')

    @include('study_hub.partials.scripts')

    @endsection