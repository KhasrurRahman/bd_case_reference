@extends('layouts.frontend.app')
@section('title','contact us')

@push('css')

@endpush
@section('content')

    <!-- Title Header Start -->
    <section class="inner-header-title" style="background-image:
        url({{asset('public/assets/fontend/img/maxresdefault.jpg')}});">
        <div class="container">
            <h2>{!! html_entity_decode($res->title) !!}</h2>
        </div>
    </section>
    <div class="clearfix"></div>
<br>
    <!-- Title Header End -->
        <a href="#" class="item-click" id="body" >
            <article >
                <div class="brows-resume">
                    <div class="row no-mrg">
                        {!! html_entity_decode($res->body) !!}

                    </div>
                    <div class="row extra-mrg row-skill">
                        <div class="browse-resume-skills">
                            <div class="col-md-9 col-sm-8">
                                <div class="br-resume">
                                    <span>{{$res->category}}</span>/<span>{{$res->civil}}</span>/<span>{{$res->act}}</span>/<span>{{$res->section}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </a>




@endsection


@push('js')

@endpush
