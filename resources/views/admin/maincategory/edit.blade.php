@extends('layouts.backend.app')
@section('title','')
@push('css')
@endpush
@section('content')
    <div class="container-fluid">


        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <form action="{{route('admin.maincategory.update',$category->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" name="name" value="{{$category->name}}">
                                    <label class="form-label">Applicate and High Court Division</label>
                                </div>
                            </div>
                            <br>
                            <a type="button" class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.maincategory.index')}}">Back</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection



@push('js')
@endpush
