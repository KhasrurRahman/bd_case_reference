@extends('layouts.backend.app')
@section('title','Create post')
@push('css')
    <link href="{{ asset('public/assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <div class="container-fluid">


        <!-- Vertical Layout | With Floating Label -->
        <form action="{{route('admin.post.update',$post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Post
                            </h2>
                        </div>
                        <div class="body">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <h3>Title</h3>
                                    <textarea id="tinymce" name="title">
                                        {{$post->title}}
                                    </textarea>
                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="title" class="form-control" name="reference" value="{{$post->reference}}">
                                    <label class="form-label">Reference-book</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Select 1st  -->

                            </h2>
                        </div>
                        <select name="category" class="form-control show-tick selectpicker" data-live-search="true">
                            <option selected="selected" disabled>--1st select division--</option>
                            @foreach ($category as $categorys)
                                <option {{ $categorys->name == $post->category ? 'selected' : '' }} value="{{ $categorys->name }}"> {{ $categorys->name }}</option>
                            @endforeach
                        </select>

                    </div>
                </label>

                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Select 2nd  -->

                            </h2>
                        </div>
                        <select name="civil" class="form-control show-tick selectpicker" data-live-search="true">
                            <option selected="selected" disabled>--1st select civil--</option>
                            @foreach ($civil as $categorys)
                                <option {{ $categorys->civil_name == $post->civil ? 'selected' : '' }} value="{{ $categorys->civil_name }}"> {{ $categorys->civil_name }}</option>
                            @endforeach
                        </select>

                    </div>
                </label>

                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Select 3rd  -->

                            </h2>
                        </div>
                        <select name="act" class="form-control show-tick selectpicker" data-live-search="true">
                            <option selected="selected" disabled>--1st select act--</option>
                            @foreach ($act as $categorys)
                                <option {{ $categorys->name == $post->act ? 'selected' : '' }} value="{{ $categorys->name }}"> {{ $categorys->name }}</option>
                            @endforeach
                        </select>

                    </div>
                </label>

                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Selected section
                            </h2>
                        </div>
                        <select name="section_id" class="form-control show-tick selectpicker" data-live-search="true" >
                        @foreach($section as $sections)
                                <option {{ $sections->id == $post->section_id ? 'selected' : '' }} value="{{$sections->id}}">{{$sections->name}} </option>
                        @endforeach
                        </select>

                    </div>
                </label>


                <div class="col-lg-3">
                    <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.post.index')}}">Back</a>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>

                </div>


            </div>





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
{{$post->body}}
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




    <script src="{{asset('public/assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
@endpush
