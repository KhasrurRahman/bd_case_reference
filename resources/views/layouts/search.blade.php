@extends('layouts.frontend.app')
@section('title','home')

@push('css')
<style>

</style>

@endpush
@section('content')

    <!-- Title Header Start -->
    <section class="inner-header-title" style="background-image:url({{asset('public/assets/fontend/img/asdasdasd.jpg')}});">
        <div class="container">
            <h1>Search Result</h1>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Title Header End -->

    <div class="clearfix"></div>
    <!-- Title Header End -->






    <!-- Browse Resume List Start -->
    <section class="manage-company" >
        <div class="container">










@foreach($result as $res)
            <a href="{{ url('single/'.$res->id) }}" class="item-click" id="body" >
                <article >
                    <div class="brows-resume">
                        <div class="row no-mrg">
                            <h5>{!! html_entity_decode($res->title) !!}</h5>
                            {!! html_entity_decode(str_limit($res->body,500)) !!}

                        </div>
                        <div class="row extra-mrg row-skill">
                            <div class="browse-resume-skills">
                                <div class="col-md-9 col-sm-8">
                                    <div class="br-resume">
                                        <span>{{$res->category}}</span>/<span>{{$res->civil}}</span>/<span>{{$res->act}}</span>/<span>{{$res->section}}</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="browse-resume-exp">
                                        <span class="resume-exp">Read More</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </a>

            @endforeach


    {{$result->links()}}







        </div>
    </section>
    <!-- Browse Resume List End -->

@endsection

@push('js')



@endpush
