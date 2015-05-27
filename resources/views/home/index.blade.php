@extends('home.partials.master')


        @section('content')


            <div id="content">
                <article>
                    <section id="" class="section swatch-black section-text-shadow section-inner-shadow">
                        <div class="background-media" style="background-image: url('img/home/uploads/home-intro.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: 50%;" data-start="background-position:50% 50%"
                        data-70-top-bottom="background-position:50% 70%">
                        </div>
                        <div class="background-overlay grid-overlay-70 "></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <header class="element-tall-top element-normal-bottom condensed" data-start="opacity:1" data-center="opacity:1" data-100-top-bottom="opacity:0">
                                        <h1 class="super hairline bordered-normal">
                                          <strong>Education</strong> through <strong>Techonology</strong> at its Best.
                                        </h1>
                                    </header>
                                    <a href="{{ action('HomeController@about') }}#mission" class="scroll-to-id btn btn-link btn-lg element-no-top element-normal-bottom">
                                        read more
                                   </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="services" class="section swatch-white">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <header class="text-center element-tall-top element-no-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
                                        <h1 class="bigger hairline bordered bordered-normal">
                                            Services
                                        </h1>
                                        
                                    </header>
                                    <div class="row " data-os-animation="" data-os-animation-delay="">
                                        <div class="col-md-3 ">
                                            <div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
                                                <div class="box box-round box-normal element-medium-top element-short-bottom os-animation">
                                                    <div class="box-dummy"></div>
                                                    <a target="_blank" data-seiconcolor="#000" class="box-inner grid-overlay-10" href="{{ action('StudyHubController@index') }}" style="background-color:#e9e9e9;">
                                                        <img class="" src="img/home/icons/book-512.png" />
                                                    </a>
                                                                    </div>
                                                <h3 class="normal bold bordered bordered-small ">

                                                        studyHub

                                                </h3>
                                                <p class=""><strong>Personalized</strong> learning hub that empower learners to study at their own pace in and outside of the classroom.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".3s">
                                                <div class="box box-round box-normal">
                                                    <div class="box-dummy"></div>
                                                    <a target="_blank" class="box-inner grid-overlay-10" href="{{ action('EdBaseController@index') }}" style="background-color:#e9e9e9;">
                                                        <img class="" src="img/home/icons/macbook-512.png" />
                                                    </a>
                                                </div>
                                                <h3 class="normal bold bordered bordered-small ">

                                                        edBase

                                                </h3>
                                                <p class="">Is a <strong>reporting</strong> and <strong>managing</strong> system used in collecting, managing and tracking data of schools and students.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".6s">
                                                <div class="box box-round box-normal">
                                                    <div class="box-dummy"></div>
                                                    <a target="_blank" class="box-inner grid-overlay-10" href="{{ action('SupportingHandController@index') }}" style="background-color:#e9e9e9;">
                                                        <img class="" src="img/home/icons/lifebuoy-512.png" alt="a support" />
                                                    </a>
                                                </div>
                                                <h3 class="normal bold bordered bordered-small ">

                                                        supportingHand

                                                </h3>
                                                <p class="">Is <strong>online charity</strong> platform that makes it easier for anyone to offer a hand to support an educational need.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".9s">
                                                <div class="box box-round box-normal">
                                                    <div class="box-dummy"></div>
                                                    <a target="_blank" class="box-inner grid-overlay-10" href="{{ action('BookShelveController@index') }}" style="background-color:#e9e9e9;">
                                                        <img class="" src="img/home/icons/justify-512.png" alt="a clock" />
                                                    </a>
                                                </div>
                                                <h3 class="normal bold bordered bordered-small ">

                                                        bookBox

                                                </h3>
                                                <p class="">Is a <strong>publishing</strong> and a <strong>marketing</strong> platform for writers to get their eBooks to readers on the network.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
            </div>

           @include('home.partials.mission')


           @include('home.partials.footer')


        @stop

