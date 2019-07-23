@extends('layouts.backend.app')
@section('title','Create post')
@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
    <div class="container-fluid">


        <!-- Vertical Layout | With Floating Label -->
        <form action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row clearfix"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add New Post
                        </h2>
                    </div>
                    <div class="body">

                        <div class="form-group form-float">
                            <div class="form-line">
                                <h3>Title</h3>
                                <textarea id="tinymce" name="title">

                            </textarea>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="title" class="form-control" name="reference">
                                <label class="form-label">Reference-Book</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




            <div class="row clearfix">

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
                        <select class="form-control js-example-basic-multiple" name="act">
                            <option>1st select civil</option>

                        </select>
                    </label>

                    <label class="col-md-6 col-sm-6">
                        <select class="form-control js-example-basic-multiple" name="section_id">
                            <option>1st select Act</option>
                        </select>
                    </label>



                </section>



                <div class="col-lg-3">
                    <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.post.index')}}">Back</a>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>

                </div>


            </div>



            <br>





            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Body
                            </h2>
                        </div>
                        <div class="body">
                            <textarea id="tinymce" name="body">

                            </textarea>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>


@endsection



@push('js')
    <!-- TinyMCE -->
    <script src="{{ asset('public/assets/backend/plugins/tinymce/tinymce.js') }}"></script>
    <script>
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{asset('public/assets/backend/plugins/tinymce')}}';
        });
    </script>



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

                            $('select[name="civil"]').empty();
                            $('select[name="civil"]').append('<option value="0" disabled="true" selected="true">Select Civil</option>');
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
                        url: '/co/actlist/'+actId,
                        type:"GET",
                        dataType:"json",
                        beforeSend: function(){
                            $('#loader').css("visibility", "visible");


                        },

                        success:function(data) {

                            $('select[name="act"]').empty();
                            $('select[name="act"]').append('<option value="0" disabled="true" selected="true">Select act</option>');

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
                        url: '/co/sectionlist/'+sectionId,
                        type:"GET",
                        dataType:"json",
                        beforeSend: function(){
                            $('#loader').css("visibility", "visible");


                        },

                        success:function(data) {

                            $('select[name="section_id"]').empty();
                            $('select[name="section_id"]').append('<option value="0" disabled="true" selected="true">Select section</option>');

                            $.each(data, function(key, value){

                                $('select[name="section_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');
                                console.log(value.id)


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


    </script>




    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endpush
