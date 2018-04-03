@extends('front.master')
@section('content')
    <body>
    <!--[if lt IE 8]>
   @include('front.includes.menu-bar')

    <!--Home page style-->
    <header id="home" class="home home-main-content">
        <div class="overlay sections">
            <div class="container text-center">
                <div class="row">
                    <div class="div-menu">
                        <header class="cd-header">
                            <div id="cd-logo">
                                <a href="index.html"><img src="{{asset('/front')}}/assets/images/logo.png" alt="Logo"></a>
                            </div>
                            <a class="cd-menu-trigger" href="#main-nav"><span></span></a>
                        </header>
                    </div>



                    <div class="home-wrapper">

                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                            <div class="home-content">
                                <h2>{{$publishedAboutInfo->name}}</h2>
                                <hr/>
                                <p>#User Profession &nbsp; # &nbsp; {{$publishedAboutInfo->profession}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sections -->
    <section id="about" class="sections3">
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="about-wrapper">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-photo">
                            <img src="{{asset($publishedAboutInfo->image)}}" alt="About Photo" height="400" width="300"/>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content text-left">
                            <h4>Hi, i’m {{$publishedAboutInfo->name}}, Experience Crafter from Bangladesh.</h4>
                            <p>{{$publishedAboutInfo->description}}</p>
                            <a href="#" class="btn btn-default">Hire Me !</a><br/>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- /container -->
    </section>

    <!-- Sections -->
@include('front.includes.working_process-content')

    <!-- Sections -->
    <section id="experience" class="experience">
        <div class="overlay sections">
            <div class="container">
                <div class="row">
                    <div class="experience-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="experience-content">

                                <h4>Work Experience</h4>

                                <div class="content-details content-border">
                                    <h5>{{$publishedAboutInfo->work_title}}</h5>
                                    <h6>{{$publishedAboutInfo->created_at}}</h6>
                                    <p>{{$publishedAboutInfo->work_description}}</p>
                                </div>

                                <div class="content-details">
                                    <h5>{{$publishedAboutInfo->experience_title}}</h5>
                                    <h6>{{$publishedAboutInfo->created_at}}</h6>
                                     <p>{{$publishedAboutInfo->experience_description}}</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="experience-content">

                                <h4>Education</h4>

                                <div class="content-details content-border">
                                    <h5>{{$publishedAboutInfo->education_title}}</h5>
                                    <h6>{{$publishedAboutInfo->created_at}}</h6>
                                    <p>{{$publishedAboutInfo->education_description}}</p>
                                </div>

                                <div class="content-details">
                                    <h5>{{$publishedAboutInfo->achivement_title}}</h5>
                                    <h6>{{$publishedAboutInfo->created_at}}5</h6>
                                    <p>{{$publishedAboutInfo->achivement_description}}</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sections -->
@include('front.includes.work-content')
    <!-- Sections -->
  @include('front.includes.clint-content')
    <!-- Sections -->
    <section id="contact" class="contact">
        <div class="overlay sections">
            <div class="container">
                <div class="row">
                    <div class="contact-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="col-lg-12">
                                <h1 class="text-success text-center">{{Session::get('message')}}</h1>
                            </div>
                            <div class="contact-area">

                                <h4>Leave a message</h4>
                                <form class="form-horizontal" action="{{ url('/client-sms') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="name" class="form-control"/>
                                            {{ $errors->has('name') ? $errors->first('name') : ' ' }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Email </label>
                                        <div class="col-sm-9">
                                            <input type="email"  name="email" class="form-control"/>
                                            {{ $errors->has('email') ? $errors->first('email') : ' ' }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Subject</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="subject" class="form-control"/>
                                            {{ $errors->has('subject') ? $errors->first('subject') : ' ' }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Message</label>
                                        <div class="col-sm-9">
                                            <textarea name="sms" class="form-control" style="resize: vertical"></textarea>
                                            {{ $errors->has('sms') ? $errors->first('sms') : ' ' }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <input type="submit" name="btn" class="btn btn-success " value="Sent"/>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-details-area">

                                <div class="contact-details">
                                    <h4>Address</h4>
                                    <p>{{$publishedAboutInfo->address}}</p>
                                </div>

                                <div class="contact-details">
                                    <h4>Phone</h4>
                                    <p>{{$publishedAboutInfo->phone_number}}</p>

                                </div>

                                <div class="contact-details">
                                    <h4>Web</h4>
                                    <p>{{$publishedAboutInfo->web_site}}</p>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Footer-->

@include('front.includes.footer')

@endsection

