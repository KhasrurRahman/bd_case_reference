@extends('layouts.backend.app')
@section('title','')
@push('css')
    <link href="{{ asset('public/assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <div class="container-fluid">


        <form action="{{route('admin.civil.update',$civil->first()->id)}}" method="post">
            @csrf
            @method('put')
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add New Civil,Criminal...
                            </h2>
                        </div>
                        <div class="body">

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="title" class="form-control" name="civil_name" value="{{$civil->first()->civil_name}}">
                                    <label class="form-label">Name</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Select Applicate and High Court Division
                            </h2>
                        </div>
                        <div class="body">

                            <div class="form-group form-float">
                                <div class="form-line" {{ $errors->has('categorie') ? 'focused error' : '' }}>
                                    <label for="category">select Category</label>
                                    <select name="category_id" id="category" class="form-control show-tick selectpicker" data-live-search="true" multiple data-max-options="1">
                                        @foreach($category as $categorys)
                                            <option {{ $categorys->id == $civil->first()->category_id ? 'selected' : '' }}
                                                value="{{$categorys->id}}">
                                                {{ $categorys->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <br>
                            <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.civil.index')}}">Back</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>

                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>

@endsection



@push('js')
    <script src="{{asset('public/assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
@endpush
