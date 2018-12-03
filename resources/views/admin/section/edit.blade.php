@extends('layouts.backend.app')
@section('title','')
@push('css')
    <link href="{{ asset('public/assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <div class="container-fluid">


        <form action="{{route('admin.section.update',$section->id)}}" method="post">
            @csrf
            @method('put')
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
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
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Select Select Act,Law,Rules
                            </h2>
                        </div>
                        <div class="body">

                            <div class="form-group form-float">
                                <div class="form-line" {{ $errors->has('categorie') ? 'focused error' : '' }}>
                                    <label for="category">select Category</label>
                                    <select name="act_id" id="category" class="form-control show-tick selectpicker" data-live-search="true" multiple data-max-options="1">
                                        @foreach($act as $acts)
                                            <option {{ $acts->id == $section->act_id ? 'selected' : '' }}
                                                value="{{$acts->id}}">
                                                {{ $acts->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <br>
                            <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.section.index')}}">Back</a>
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
