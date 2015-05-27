
@extends('study_hub.partials.master')
    <!-- Fixed navbar -->

    @section('body')


            @include('study_hub.partials.nav_bar')



    <div class="">
        <div class="page-section half bg-white">
            <div class="container">
                <div class="section-toolbar">
                    <div class="cell">
                        <div class="media width-120 v-middle margin-none">
                            <div class="media-left">
                                <div class="icon-block bg-grey-200 s30"><i class="fa fa-question"></i></div>
                            </div>
                            <div class="media-body">
                                <p class="text-body-2 text-light margin-none">Questions</p>
                                <p class="text-title text-primary margin-none">25</p>
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="media width-120 v-middle margin-none">
                            <div class="media-left">
                                <div class="icon-block bg-grey-200 s30"><i class="fa fa-diamond"></i></div>
                            </div>
                            <div class="media-body">
                                <p class="text-body-2 text-light margin-none">Score</p>
                                <p class="text-title text-success margin-none">800 pt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="split-vertical-body">
            <div class="split-vertical-cell">
                <div class="container height-100pc">
                    <div class="page-section height-100pc">
                        <div class="row height-100pc">
                            <div class="col-md-9">
                                <div class="text-subhead-2 text-light">Question 2 of 25</div>
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="panel-heading">
                                        <h4 class="text-headline">Step by Step</h4>
                                    </div>
                                    <div class="panel-body">
                                        <p class="text-body-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cumque minima nemo repudiandae rerum! Aspernatur at, autem expedita id illum laudantium molestias officiis quaerat, rem sapiente sint totam velit. Enim.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur consequuntur dignissimos dolorem dolores eaque error eum excepturi fugit in iste laboriosam, libero maiores neque officiis omnis, pariatur possimus, quidem quo quod recusandae rem repudiandae rerum saepe sequi suscipit tempora? A aperiam autem deleniti distinctio ea expedita facere fugiat, fugit iure labore laboriosam laudantium nam neque nihil numquam, obcaecati, quam quibusdam ratione recusandae rem sapiente sed veritatis voluptas? Accusantium et laborum minima perferendis praesentium vel. Aliquid architecto, aspernatur autem blanditiis consequuntur debitis, ducimus eaque eos in iste nisi pariatur quidem rem sapiente tempora, tenetur vitae. Dolorem quae quo recusandae similique?</p>
                                    </div>
                                </div>
                                <div class="text-subhead-2 text-light">Your Answer</div>
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="panel-body">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">Aspernatur corporis deserunt dolorum eos nulla</label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox" checked>
                                            <label for="checkbox2">Accusantium aperiam aut cumque deleniti dolores</label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox5" type="checkbox">
                                            <label for="checkbox5">Culpa doloribus enim explicabo ipsa iste porro</label>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="text-right">
                                            <button class="btn btn-success"><i class="fa fa-save fa-fw"></i> Save Answer</button>
                                            <button class="btn btn-primary"><i class="fa fa-chevron-right fa-fw"></i> Next Question</button>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                            </div>
                            <div class="col-md-3 height-100pc">
                                <div class="split-vertical">
                                    <div class="s-container">
                                        <div class="text-subhead-2 text-light">Time to complete</div>
                                        <div class="tk-countdown"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('study_hub.partials.scripts')

    @endsection