@extends('layouts.backend.app')
@section('title','')
@push('css')
    <link href="{{asset('public/assets/backend/css/select2.css')}}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">


        <form action="{{route('admin.act.update',$act->id)}}" method="post">
            @csrf
            @method('put')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update Act/Law/Rules
                            </h2>
                        </div>
                        <div class="body">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" name="name" value="{{$act->name}}">
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
                                <li><a href="javascript:void(0);"><i class="material-icons"></i> {{$act->civil->category->name}}</a></li>
                                <li class="active"><i class="material-icons"></i>{{$act->civil->civil_name}}</li>
                            </ol>
                        </div>

                    </div>
                </label>



                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Select Civil,Criminal.. category
                            </h2>
                        </div>
                        <div class="body">

                            <section class="bottom-search-form">


                                @php
                                    $categories = DB::table('categories')->pluck("name","id");
                                @endphp


                                <label class="col-md-6 col-sm-6">
                                    <select class="form-control js-example-basic-multiple" name="category">
                                        <option disabled="true" selected="true">select Division</option>
                                        @foreach ($categories as $category => $value)
                                            <option value="{{ $category }}"> {{ $value }}</option>
                                        @endforeach
                                    </select>
                                </label>

                                <label class="col-md-6 col-sm-6">
                                    <select class="form-control js-example-basic-multiple" name="civil_id">
                                        <option>1st select Division</option>

                                    </select>
                                </label>







                            </section>

                            <br>
                            <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.act.index')}}">Back</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>

                        </div>
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
                        beforeSend: function(){
                            $('#loader').css("visibility", "visible");


                        },

                        success:function(data) {

                            $('select[name="civil_id"]').empty();
                            $('select[name="civil_id"]').append('<option value="0" disabled="true" selected="true">Select Civil</option>');
                            $.each(data, function(key, value){

                                $('select[name="civil_id"]').append('<option value="'+ value.id +'">' + value.civil_name + '</option>');
                                console.log(value);

                            });
                        },
                        complete: function(){
                            $('#loader').css("visibility", "hidden");



                        }
                    });
                } else {
                    $('select[name="civil_id"]').empty();

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
