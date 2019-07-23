@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">test</div>

                <div class="card-body">


                    @foreach($result as $res)
                        <a href="single.php" class="item-click" id="body" >
                            <article >
                                <div class="brows-resume">
                                    <div class="row no-mrg">
                                        {{$res->body}}
                                    </div>
                                    <div class="row extra-mrg row-skill">
                                        <div class="browse-resume-skills">
                                            <div class="col-md-9 col-sm-8">
                                                <div class="br-resume">
                                                    <span>Income Tax Matter</span><span>Account</span><span>Contempt of Court</span><span>Customs Act-1969</span><span>Penal Code-1860</span>
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



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
