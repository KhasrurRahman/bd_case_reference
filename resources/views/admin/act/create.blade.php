@extends('layouts.backend.app')
@section('title','Create Act/law')
@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
@endpush
@section('content')
    <div class="container-fluid">


        <form action="{{route('admin.act.store')}}" method="post">
            @csrf
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add New Act/Law/Rules
                            </h2>
                        </div>
                        <div class="body">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="title" class="form-control" name="name">
                                    <label class="form-label">Name</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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
                                    <option>select Civil</option>

                                </select>
                            </label>







                </section>



            </div>
            <br>
            <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.act.index')}}">Back</a>
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
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




    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

@endpush
