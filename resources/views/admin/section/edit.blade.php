@extends('layouts.backend.app')
@section('title','')
@push('css')
    <link href="{{asset('public/assets/backend/css/select2.css')}}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">


        <form action="{{route('admin.section.update',$section->id)}}" method="post">
            @csrf
            @method('put')
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Section/Article/Rules
                            </h2>
                        </div>
                        <div class="body">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="title" class="form-control" name="name" value="{{$section->name}}">
                                    <label class="form-label">Name</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Relation-

                            </h2>
                        </div>
                        <div>
                            <ol class="breadcrumb breadcrumb-bg-pink">
                                <li><a href="javascript:void(0);"><i class="material-icons"></i> {{$section->act->civil->category->name}}</a></li>
                                <li class="active"><i class="material-icons"></i>{{$section->act->civil->civil_name}}</li>
                                <li class="active"><i class="material-icons"></i>{{$section->act->name}}</li>
                            </ol>
                        </div>

                    </div>
                </label>



                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Select Select Act,Law,Rules
                            </h2>
                        </div>
                        <div class="body">

                            <section class="bottom-search-form">

                                @php
                                    $categories = DB::table('categories')->pluck("name","id");
                                @endphp


                                <label class="col-md-6 col-sm-6">
                                    <select class="form-control js-example-basic-multiple" name="category">
                                        <option disabled="true" selected="true">1st select This</option>
                                        @foreach ($categories as $category => $value)
                                            <option value="{{ $category }}"> {{ $value }}</option>
                                        @endforeach
                                    </select>
                                </label>

                                <label class="col-md-6 col-sm-6">
                                    <select class="form-control js-example-basic-multiple" name="civil">
                                        <option>1st select Division</option>

                                    </select>
                                </label>

                                <label class="col-md-6 col-sm-6">
                                    <select class="form-control js-example-basic-multiple" name="act_id">
                                        <option>1st select civil</option>

                                    </select>
                                </label>






                                <br>
                                <br>
                                <br>
                            <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.section.index')}}">Back</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>

                            </section>

                </div>

                    </div>
                </div>
        </form>
    </div>


@endsection



@push('js')
    <script type="text/javascript">
        $(document).ready(function() {

            $('select[name="category"]').on('change', function(){
                var categoryId = $(this).val();

                if(categoryId) {
                    $.ajax({
                        url: '/co/civillist/'+categoryId,
                        type:"GET",
                        dataType:"json",


                        success:function(data) {

                            $('select[name="civil"]').empty();
                            $('select[name="civil"]').append('<option value="0" disabled="true" selected="true">Select Civil</option>');
                            $.each(data, function(key, value){

                                $('select[name="civil"]').append('<option value="'+ value.id +'">' + value.civil_name + '</option>');
                                console.log(value);

                            });
                        },

                    });
                } else {
                    $('select[name="civil"]').empty();

                }

            });

            $('select[name="civil"]').on('change', function(){
                var actId = $(this).val();
                if(actId) {
                    $.ajax({
                        url: '/co/actlist/'+actId,
                        type:"GET",
                        dataType:"json",

                        success:function(data) {

                            $('select[name="act_id"]').empty();
                            $('select[name="act_id"]').append('<option value="0" disabled="true" selected="true">Select act</option>');

                            $.each(data, function(key, value){

                                $('select[name="act_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');

                            });
                        },
                    });
                } else {
                    $('select[name="act_id"]').empty();
                }

            });




        });
    </script>

    <script>


        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({tags: true});
        });


    </script>

    <script src="{{asset('public/assets/backend/js/select2.js')}}"></script>
@endpush
