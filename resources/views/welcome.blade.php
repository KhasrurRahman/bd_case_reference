@extends('layouts.frontend.app')
@section('title','home')

@push('css')
<style>
    #loader{
        visibility:hidden;
    }
</style>
{{--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />--}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


@endpush
@section('content')

    <!-- Main Banner Section Start -->
    {{--<div class="banner" style="background-image:url({{asset('public/assets/fontend/img/fsdfssd.jpg')}});">--}}
        {{--<div class="container">--}}
            {{--<div class="banner-caption">--}}
                {{--<div class="col-md-12 col-sm-12 banner-text">--}}
                    {{--<h1>Browse what You want</h1>--}}
                    {{--<form class="form-horizontal" action="search_result.php">--}}
                        {{--<div class="col-md-10 no-padd">--}}
                            {{--<div class="input-group">--}}
                                {{--<input type="text" class="form-control right-bor" placeholder="Type What You want">--}}
                            {{--</div>--}}
                        {{--</div>--}}


                        {{--<div class="col-md-2 no-padd">--}}
                            {{--<div class="input-group">--}}
                                {{--<a href="search_result.php"><button type="submit" class="btn btn-primary">Search</button></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}


    {{--</div>--}}
    {{--<div class="clearfix"></div>--}}
    <!-- Main Banner Section End -->

    <div class="panel-body" style="padding-top: 200px">
        <form class="form-horizontal" role="form" method="POST" action="">
            {{ csrf_field() }}
            <div class="form-group-sm">

                <div class="col-md-3">
                    <select name="category" class="form-control js-example-basic-multiple">
                        <option selected="selected">--1st select division--</option>
                        @foreach ($categories as $category => $value)
                            <option value="{{ $category }}"> {{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="civil" class="form-control js-example-basic-multiple">
                        <option selected="selected">--1st select division--</option>

                    </select>
                </div>

                <div class="col-md-3">
                    <select name="act" class="form-control js-example-basic-multiple">
                        <option selected="selected">--1st select civil/criminal--</option>

                    </select>
                </div>

                <div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>

            </div>
        </form>
    </div>





    <!-- Browse Resume List Start -->
    {{--<section class="manage-company" >--}}
        {{--<div class="container">--}}





            {{----}}





            {{--<a href="single.php" class="item-click">--}}
                {{--<article>--}}
                    {{--<div class="brows-resume">--}}
                        {{--<div class="row no-mrg">--}}
                            {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
                        {{--</div>--}}
                        {{--<div class="row extra-mrg row-skill">--}}
                            {{--<div class="browse-resume-skills">--}}
                                {{--<div class="col-md-9 col-sm-8">--}}
                                    {{--<div class="br-resume">--}}
                                        {{--<span>Income Tax Matter</span><span>Account</span><span>Contempt of Court</span><span>Customs Act-1969</span><span>Penal Code-1860</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-4">--}}
                                    {{--<div class="browse-resume-exp">--}}
                                        {{--<span class="resume-exp">Read More</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
            {{--</a>--}}

            {{--<a href="single.php" class="item-click">--}}
                {{--<article>--}}
                    {{--<div class="brows-resume">--}}
                        {{--<div class="row no-mrg">--}}
                            {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
                        {{--</div>--}}
                        {{--<div class="row extra-mrg row-skill">--}}
                            {{--<div class="browse-resume-skills">--}}
                                {{--<div class="col-md-9 col-sm-8">--}}
                                    {{--<div class="br-resume">--}}
                                        {{--<span>Criminal Matters </span><span>Bankruptcy Act, 1997</span><span>Contempt of Court</span><span>International Crimes (Tribunals) Act--}}
{{--1973</span><span>Penal Code-1860</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-4">--}}
                                    {{--<div class="browse-resume-exp">--}}
                                        {{--<span class="resume-exp">Read More</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
            {{--</a>--}}

            {{--<a href="single.php" class="item-click">--}}
                {{--<article>--}}
                    {{--<div class="brows-resume">--}}
                        {{--<div class="row no-mrg">--}}
                            {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
                        {{--</div>--}}
                        {{--<div class="row extra-mrg row-skill">--}}
                            {{--<div class="browse-resume-skills">--}}
                                {{--<div class="col-md-9 col-sm-8">--}}
                                    {{--<div class="br-resume">--}}
                                        {{--<span>Service Matters </span><span>Code of Civil Procedure, 1908 (V of 1908), Section-47</span><span>Contempt of Court</span><span>Nari O Shishu Nirjatan Daman Act-1990</span><span>Code of Civil Procedure, 1908 (V of 1908), Order-22</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-4">--}}
                                    {{--<div class="browse-resume-exp">--}}
                                        {{--<span class="resume-exp">Read More</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
            {{--</a>--}}

            {{--<a href="single.php" class="item-click">--}}
                {{--<article>--}}
                    {{--<div class="brows-resume">--}}
                        {{--<div class="row no-mrg">--}}
                            {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
                        {{--</div>--}}
                        {{--<div class="row extra-mrg row-skill">--}}
                            {{--<div class="browse-resume-skills">--}}
                                {{--<div class="col-md-9 col-sm-8">--}}
                                    {{--<div class="br-resume">--}}
                                        {{--<span>Code of Civil Procedure, 1908 (V of 1908), Section-47</span><span>Account</span><span>Contempt of Court</span><span>Customs Act-1969</span><span>Code of Civil Procedure, 1908 (V of 1908), Section-151</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-4">--}}
                                    {{--<div class="browse-resume-exp">--}}
                                        {{--<span class="resume-exp">Read More</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
            {{--</a>--}}

            {{--<a href="single.php" class="item-click">--}}
                {{--<article>--}}
                    {{--<div class="brows-resume">--}}
                        {{--<div class="row no-mrg">--}}
                            {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
                        {{--</div>--}}
                        {{--<div class="row extra-mrg row-skill">--}}
                            {{--<div class="browse-resume-skills">--}}
                                {{--<div class="col-md-9 col-sm-8">--}}
                                    {{--<div class="br-resume">--}}
                                        {{--<span>Income Tax Matter</span><span>Account</span><span>Contempt of Court</span><span>Customs Act-1969</span><span>Penal Code-1860</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-4">--}}
                                    {{--<div class="browse-resume-exp">--}}
                                        {{--<span class="resume-exp">Read More</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
            {{--</a>--}}

            {{--<a href="single.php" class="item-click">--}}
                {{--<article>--}}
                    {{--<div class="brows-resume">--}}
                        {{--<div class="row no-mrg">--}}
                            {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
                        {{--</div>--}}
                        {{--<div class="row extra-mrg row-skill">--}}
                            {{--<div class="browse-resume-skills">--}}
                                {{--<div class="col-md-9 col-sm-8">--}}
                                    {{--<div class="br-resume">--}}
                                        {{--<span>Income Tax Matter</span><span>Code of Civil Procedure, 1908 (V of 1908), Order-39</span><span>Contempt of Court</span><span>Contract Act-1872</span><span>Dhaka Municipality Corporation Ordinance-1983--}}
{{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-4">--}}
                                    {{--<div class="browse-resume-exp">--}}
                                        {{--<span class="resume-exp">Read More</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
            {{--</a>--}}

            {{--<a href="single.php" class="item-click">--}}
                {{--<article>--}}
                    {{--<div class="brows-resume">--}}
                        {{--<div class="row no-mrg">--}}
                            {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
                        {{--</div>--}}
                        {{--<div class="row extra-mrg row-skill">--}}
                            {{--<div class="browse-resume-skills">--}}
                                {{--<div class="col-md-9 col-sm-8">--}}
                                    {{--<div class="br-resume">--}}
                                        {{--<span>Income Tax Matter</span><span>Evidence Act 1872 </span><span>Income Tax Matter</span><span>Customs Act-1969</span><span>Writ Matters</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-4">--}}
                                    {{--<div class="browse-resume-exp">--}}
                                        {{--<span class="resume-exp">Read More</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
            {{--</a>--}}

            {{--<a href="single.php" class="item-click">--}}
                {{--<article>--}}
                    {{--<div class="brows-resume">--}}
                        {{--<div class="row no-mrg">--}}
                            {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
                        {{--</div>--}}
                        {{--<div class="row extra-mrg row-skill">--}}
                            {{--<div class="browse-resume-skills">--}}
                                {{--<div class="col-md-9 col-sm-8">--}}
                                    {{--<div class="br-resume">--}}
                                        {{--<span>Criminal Matters </span><span>Code of Civil Procedure, 1908 (V of 1908), Order-43--}}
{{--</span><span>Contempt of Court</span><span>Code of Civil Procedure, 1908 (V of 1908), (General) </span><span>Contract Act-1872</span><span>Companies Rules-2009</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-sm-4">--}}
                                    {{--<div class="browse-resume-exp">--}}
                                        {{--<span class="resume-exp">Read More</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
            {{--</a>--}}







            {{--<div class="row">--}}
                {{--<ul class="pagination">--}}
                    {{--<li><a href="#">&laquo;</a></li>--}}
                    {{--<li class="active"><a href="#">1</a></li>--}}
                    {{--<li><a href="#">2</a></li>--}}
                    {{--<li><a href="#">3</a></li>--}}
                    {{--<li><a href="#">4</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>--}}
                    {{--<li><a href="#">&raquo;</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</section>--}}
    <!-- Browse Resume List End -->

@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {

            $('select[name="category"]').on('change', function(){
                var categoryId = $(this).val();
                if(categoryId) {
                    $.ajax({
                        url: 'api/civillist/'+categoryId,
                        type:"GET",
                        dataType:"json",
                        beforeSend: function(){
                            $('#loader').css("visibility", "visible");


                        },

                        success:function(data) {

                            $('select[name="civil"]').empty();
                            $('select[name="civil"]').append('<option value="">select sumething</option>');
                            $.each(data, function(key, value){

                                $('select[name="civil"]').append('<option value="'+ key +'">' + value + '</option>');

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

            $('select[name="civil"]').on('click', function(){
                var actId = $(this).val();
                if(actId) {
                    $.ajax({
                        url: 'api/actlist/'+actId,
                        type:"GET",
                        dataType:"json",
                        beforeSend: function(){
                            $('#loader').css("visibility", "visible");


                        },

                        success:function(data) {

                            $('select[name="act"]').empty();

                            $.each(data, function(key, value){

                                $('select[name="act"]').append('<option value="'+ key +'">' + value + '</option>');

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

        });





    </script>

    <script>

        function matchCustom(params, data) {
            // If there are no search terms, return all of the data
            if ($.trim(params.term) === '') {
                return data;
            }

            // Do not display the item if there is no 'text' property
            if (typeof data.text === 'undefined') {
                return null;
            }

            // `params.term` should be the term that is used for searching
            // `data.text` is the text that is displayed for the data object
            if (data.text.indexOf(params.term) > -1) {
                var modifiedData = $.extend({}, data, true);
                modifiedData.text += ' (matched)';

                // You can return modified objects from here
                // This includes matching the `children` how you want in nested data sets
                return modifiedData;
            }

            if (!data.text.indexOf(params.term) > -1) {
                var modifiedData = $.extend();
                modifiedData.text += ' (not match)';

                // You can return modified objects from here
                // This includes matching the `children` how you want in nested data sets
                return modifiedData;
            }

            // Return `null` if the term should not be displayed
            return null;
        }

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({tags: true,matcher: matchCustom});
        });


    </script>




    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

@endpush
