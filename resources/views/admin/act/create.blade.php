@extends('layouts.backend.app')
@section('title','Create Act/law')
@push('css')
    <link href="{{ asset('public/assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
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
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Select Civil,Criminal.. category
                            </h2>
                        </div>
                        <div class="body">

                            <div class="form-group form-float">
                                <div class="form-line" {{ $errors->has('civil') ? 'focused error' : '' }}>
                                    <label for="civil">select Category</label>

                                    <select name="civil_id" class="form-control show-tick selectpicker" data-live-search="true" multiple data-max-options="1">
                                        @foreach($civil as $civils)
                                            <option value="{{ $civils->id }}">
                                                {{ $civils->civil_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

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
    <script src="{{asset('public/assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
@endpush
