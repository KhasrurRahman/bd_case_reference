@extends('layouts.frontend.app')
@section('title','Home')

@push('css')
<style>
    #loader{
        visibility:hidden;
    }

    #enquirypopup .modal-dialog {
        width: 400px;
        padding: 0px ;
        position: relative;
    }

    #enquirypopup .modal-dialog {
        width: 400px;
        padding: 0px ;
        position: relative;
    }
    #enquirypopup .modal-dialog:before {
        content: '';
        height: 0px;
        width: 0px;
        border-left: 50px solid #17B6BB;
        border-right: 50px solid transparent;
        border-bottom: 50px solid transparent;
        position: absolute;
        top: 1px;
        left: -14px;
        z-index: 99;
    }

    .custom-modal-header {
        text-align: center;
        color: #17b6bb;
        text-transform: uppercase;
        letter-spacing: 2px;
        border-top: 4px solid;
    }

    #enquirypopup .modal-dialog .close {
        z-index: 99999999;
        color: white;
        text-shadow: 0px 0px 0px;
        font-weight: normal;
        top: 4px;
        right: 6px;
        position: absolute;
        opacity: 1;
    }

    .custom-modal-header .modal-title {
        /* font-weight: bold; */
        font-size: 18px;
    }

    #enquirypopup .modal-dialog:after {
        content: '';
        height: 0px;
        width: 0px;
        /* border-right: 50px solid rgba(255, 0, 0, 0.98); */
        border-right: 50px solid #17b6bb;
        border-bottom: 50px solid transparent;
        position: absolute;
        top: 1px;
        right: -14px;
        z-index: 999999;
    }

    .form-group {
        margin-bottom: 15px !important;
    }

    .form-inline .form-control {
        display: inline-block;
        width: 100%;
        vertical-align: middle;
    }

    @media screen and (max-width: 450px) {
        .select2-container--default .select2-selection--single {
            width: 300px;
            font-size: 10px;
        }
            .select2-container--default .select2-results__option{
                font-size: 10px;
                color: black;
            }
        }
    #fvpp-blackout {
        display: none;
        z-index: 499;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: #000;
        opacity: 0.5;
    }

    #my-welcome-message {
        display: none;
        z-index: 500;
        position: fixed;
        width: 71%;
        left: 14%;
        top: 20%;
        padding: 20px 2%;
        font-family: Calibri, Arial, sans-serif;
        background: #FFF;
    }

    #fvpp-close {
        position: absolute;
        top: 10px;
        right: 20px;
        cursor: pointer;
    }

    #fvpp-dialog h2 {
        font-size: 2em;
        margin: 0;
    }

    #fvpp-dialog p { margin: 0; }
</style>
<link href="{{asset('public/assets/backend/css/select2.css')}}" rel="stylesheet">
<link href="{{asset('public/assets/fontend/css/toastr.min.css')}}" rel="stylesheet">
<link href="{{asset('public/assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">



@endpush
@section('content')

    <!-- Main Banner Section Start -->
    <div class="banner" style="background-image:url({{asset('public/assets/fontend/img/fsdfssd.jpg')}});">
        <div class="container">
            <div class="banner-caption">
                <div class="col-md-12 col-sm-12 banner-text">
                    <h1>BD CASE REFERENCE</h1>
                    <h3 style="color: white;margin-top: 10px">(Beta Version)</h3>
                    <form class="form-horizontal" action="{{route('search')}}" method="get">
                        @csrf
                        <div class="col-md-10 no-padd">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control right-bor" placeholder="Type What You want">
                            </div>
                        </div>


                        <div class="col-md-2 no-padd">
                            <div class="input-group">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <section class="bottom-search-form">
        <div class="container">
            <form class="bt-form"  action="{{route('search2')}}" method="get">




                @php
                    $categories = DB::table('categories')->pluck("name","id");
                @endphp


                <label class="col-md-6 col-sm-12 col-xsm-12">
                    <select class="form-control js-example-basic-multiple" name="category">
                        <option disabled="true" selected="true">Division</option>
                        @foreach ($categories as $category => $value)
                            <option value="{{ $category }}"> {{ $value }}</option>
                        @endforeach
                    </select>
                </label>

                <label class="col-md-6 col-sm-12  col-xsm-12 ">
                    <select class="form-control js-example-basic-multiple" name="civil">
                        <option>Civil or Criminal</option>

                    </select>
                </label>

                <label class="col-md-6 col-sm-12 col-xsm-12 ">
                    <select class="form-control js-example-basic-multiple" name="act">
                        <option>Law or Act</option>

                    </select>
                </label>

                <label class="col-md-6 col-sm-12 ">
                    <select class="form-control js-example-basic-multiple" name="section_id">
                        <option>Section or Artical or Rule</option>
                    </select>
                </label>

                <div class="col-md-5 col-sm-12">
                    <button type="submit" class="btn btn-primary">Manual Search</button>
                </div>
            </form>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Main Banner Section End -->






    <!-- Browse Resume List Start -->
    <section class="manage-company" >
        <div class="container">

            @foreach($post as $res)
                <a href="{{ url('single/'.$res->id) }}" class="item-click post" id="body" >
                    <article >
                        <div class="brows-resume">
                            <div class="row">
                                <h5>{!! html_entity_decode($res->title) !!}</h5>
                                {!! html_entity_decode($res->body) !!}

                            </div>
                            <div class="row extra-mrg row-skill">
                                <div class="browse-resume-skills">
                                    <div class="col-md-9 col-sm-8">
                                        <div class="br-resume">
                                            <span>{{$res->category}}</span>/<span>{{$res->civil}}</span>/<span>{{$res->act}}</span>/<span>{{$res->section}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4">
                                        <div class="browse-resume-exp">
                                            <span class="resume-exp">Read More</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </a>

            @endforeach


            {{$post->links()}}





                <div id="my-welcome-message">
                    <h2>Welcome to my site</h2>
                    <p>The first free online case reference in Bangladesh which helps to find specific case references or decisions of the Supreme Court of Bangladesh.</p>
                </div>








        </div>
    </section>
    <!-- Browse Resume List End -->

@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {

            $('select[name="category"]').on('change', function(){
                var categoryId = $(this).val();

                if(categoryId) {
                    $.ajax({
                        url: 'civillist/'+categoryId,
                        type:"GET",
                        dataType:"json",
                        beforeSend: function(){
                            $('#loader').css("visibility", "visible");


                        },

                        success:function(data) {

                            $('select[name="civil"]').empty();
                            $('select[name="civil"]').append('<option value="0" disabled="true" selected="true">Civil or Criminal</option>');
                            $.each(data, function(key, value){

                                $('select[name="civil"]').append('<option value="'+ value.id +'">' + value.civil_name + '</option>');
                                console.log(value);

                            });
                        },
                        complete: function(){
                            $('#loader').css("visibility", "hidden");



                        }
                    });
                } else {
                    $('select[name="civil"]').empty();

                }

            });

            $('select[name="civil"]').on('change', function(){
                var actId = $(this).val();
                if(actId) {
                    $.ajax({
                        url: 'actlist/'+actId,
                        type:"GET",
                        dataType:"json",
                        beforeSend: function(){
                            $('#loader').css("visibility", "visible");


                        },

                        success:function(data) {

                            $('select[name="act"]').empty();
                            $('select[name="act"]').append('<option value="0" disabled="true" selected="true">Law or Act</option>');

                            $.each(data, function(key, value){

                                $('select[name="act"]').append('<option value="'+ value.id +'">' + value.name + '</option>');

                            });
                        },
                        complete: function(){
                            $('#loader').css("visibility", "hidden");


                        }
                    });
                } else {
                    $('select[name="act"]').empty();
                }

            });



            $('select[name="act"]').on('change', function(){
                var sectionId = $(this).val();

                if(sectionId) {
                    $.ajax({
                        url: 'sectionlist/'+sectionId,
                        type:"GET",
                        dataType:"json",
                        beforeSend: function(){
                            $('#loader').css("visibility", "visible");


                        },

                        success:function(data) {

                            $('select[name="section_id"]').empty();
                            $('select[name="section_id"]').append('<option value="0" disabled="true" selected="true">Section or Artical or Rule</option>');

                            $.each(data, function(key, value){

                                $('select[name="section_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');
                                console.log(value.id,value.name)


                            });
                        },
                        complete: function(){
                            $('#loader').css("visibility", "hidden");


                        }
                    });
                } else {
                    $('select[name="section_id"]').empty();
                }

            });



        });
    </script>

    <script>


        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({tags: true});
        });



        $( document ).ready(function(){
            $('#enquirypopup').fadeIn('slow', function(){
                $('#enquirypopup').delay(2000).fadeOut();
            });
        });
    </script>



    <script src="{{asset('public/assets/backend/js/select2.js')}}"></script>
    <script src="{{asset('public/assets/fontend/js/toastr.min.js')}}"></script>
    {!! Toastr::message() !!}


    <script src="{{asset('public/assets/fontend/js/jquery.firstVisitPopup.js')}}"></script>
    <script>

        $('#my-welcome-message').firstVisitPopup({
            cookieName : 'homepage',
            showAgainSelector: '#show-message'
        });
    </script>

@endpush
