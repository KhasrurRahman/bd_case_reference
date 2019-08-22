@extends('layouts.frontend.app')
@section('title','home')

@push('css')
<style>
    .pagination li {
        list-style-type: none;
        float: left;
        width: 40px;
        height: 40px;
        line-height:40px;
        border: 1px solid #FFF;
        background-color: cadetblue;
        color: #FFF;
        text-align: center;
        cursor: pointer;
        margin:0 5px;
    }

    .pagination li:hover {
        background-color: #fff;
        border: 1px solid #000;
        color: #000
    }

    .pagination ul {
        border: 0;
        padding: 0;
    }

    .active {
        background-color: #fff !important;
        border: 1px solid #000 !important;
        color: #000 !important;
    }
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
            <a href="{{ url('single/'.$res->id) }}" class="item-click post" id="body">
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


    <div class="pagination"></div>


    {{--{{$result->links()}}--}}







        </div>
    </section>
    <!-- Browse Resume List End -->

@endsection

@push('js')
    <script src="{{asset('public/assets/fontend/js/paginate.js')}}"></script>
<script>
    $('.pagination').pagination({
        itemsToPaginate: ".post",
        activeClass: 'active'
    });
</script>

@endpush
