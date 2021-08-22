@extends('layouts.frontend')
@section('title','Skoder Youth')
@section('content')
<!-- Start of slider area -->
<div class="slider-area">
    <div class="slider-active">
        @foreach ($sliders as $slider)
        <div class="slider-all">
            <img src="{{asset('images/'.$slider->image)}}" alt="">
            <div class="slider-text-wrapper">
                <div class="table">
                    <div class="table-cell">
                        <div class="slider-text animated">
                            <h3>Welcome to Skoder Youth Leadership Program</h3>
                            <h2>Learn, Innovate and Grow</h2>
                            <p>Paving the path towards growth, innovation and success </p>
                            <a class="button extra-small mb-20" href="{{route('becomeAMember.view')}}">
                                <span>Join Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End of slider area -->
<!-- start categoris area -->
<div class="categoris-area pb-80 pt-110">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h1 class="uppercase">We Focus On</h1>
            <p>We Offer a Wide Variety of IT Services </p>
            <div class="separator my mtb-15">
                <i class="icofont icofont-hat-alt"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categori mb-30">
                    <img style="width:80px; height:80px;" src="{{asset('frontend/images/icons/bd.png')}}" alt="">
                    <h3><a href="#">Innovation</a></h3>
                    <p>The traditional approaches and conventional methods are now unable to take us far in the game. The only answer here is innovation. Providing opportunities for new ideas, having a growth mindset, breaking the stereotypes, and making the impossible possible will help us move forward and overcome obstacles.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categori mb-30">
                    <img style="width:80px; height:80px;" src="{{asset('frontend/images/icons/led.png')}}" alt="">
                    <h3><a href="#">Leadership</a></h3>
                    <p>Leadership captures the most innate nature of only a few human beings who are capable to lead others towards a certain role. A true leader inspires and motivates others towards a goal by maintaining harmony and taking charge and responsibilities for actions.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categori mb-30">
                    <img style="width:80px; height:80px;" src="{{asset('frontend/images/icons/skd1.png')}}" alt="">
                    <h3><a href="#">Skill Development   </a></h3>
                    <p>Skill Development bridges the gaps we have to reach a certain peak of success and develops and hones those skills. Only if we accept these gaps and furnish our skills, then we will be able to contribute to our society effectively and efficiently. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-categori mb-30">
                    <img style="width:80px; height:80px;" src="{{asset('frontend/images/icons/opp.png')}}" alt="">
                    <h3><a href="#">Opportunities</a></h3>
                    <p>Today’s world offers us enormous numbers of opportunities that are waiting for us to act upon. It is necessary to create platforms to bring together our human resources to act upon these opportunities and innovate new ideas and a new road to success.</p>
                </div>
            </div>
        </div>
        {{-- <div style="position: absolute; left:50%; transform: translateX(-50%); margin-bottom: 2rem;">
            <a class="button extra-small mb-20" href="https://skoder.co/business.php">
                <span>To Know More</span>
            </a>
        </div> --}}
    </div>
</div>
<!-- End categoris area -->
<!-- start courses area -->
<div class="top-courses-area gray-bg pb-160 pt-110">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h1 class="uppercase">Recent Activities</h1>
            <p>Our Recent Programs </p>
            <div class="separator my mtb-15">
                <i class="icofont icofont-hat-alt"></i>
            </div>
        </div>
        <div class="row">
            <div class="all-courses">
                @foreach ($activities as $activity)
                <div class="col-md-4">
                    <div class="single-course">
                        <a href="{{$activity->url()}}"><img src="{{asset('images/'.$activity->image)}}" alt=""></a>
                        <div class="single-coures-text">
                            <h3><a href="{{$activity->url()}}">{{$activity->title}}</a></h3>
                            <p>{!!Str::limit($activity->details,100)!!}</p>
                            <a href="{{$activity->url()}}">READ MORE</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End courses area -->
<!-- start courses area -->
<div class="upcoming-event-area pt-110 pb-70">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h1 class="uppercase">UPCOMING EVENTS</h1>
            <p>Join our events to learn something new & interesting </p>
            <div class="separator my mtb-15">
                <i class="icofont icofont-hat-alt"></i>
            </div>
        </div>

        <div class="row">
            <div class="all-upcoming-event">
                @foreach ($events as $event)
                @include('frontend.includes.single_event')
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End courses area -->
<div class="countdown-area bg-1 ptb-110 bg-opacity bg-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="countdown-all">
                    <h3>Get Benifits From The Club </h3>
                    <a  href="{{route('becomeAMember.view')}}"><h1 style="color: rgb(73, 110, 233)">Become a Member</h1></a>
                    <div class="timer">
                        {{-- <div style="" data-countdown="2022/01/01"></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start courses area -->
<div class="upcoming-event-area pt-110 pb-80">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h1 class="uppercase">OUR GALLERY</h1>
            <p>Popular snapshots of our recent events</p>
            <div class="separator my mtb-15">
                <i class="icofont icofont-hat-alt"></i>
            </div>
        </div>
        <div class="row">
            @foreach ($galleries as $gallery)
            <div class="col-md-4 col-sm-6">
                <div class="gallery-img mb-30">
                    <img src="{{asset('images/'.$gallery->image)}}" alt="">
                    <div class="gallery-view">
                        <a class="img-poppu" href="{{asset('images/'.$gallery->image)}}">
                            <i class="fa fa-search-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="counter-area bg-2 bg-opacity bg-relative ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 text-center">
                <div class="counter-bottom2">
                    <div class="counter-img">
                        <img src="{{asset('frontend/images/icons/1.png')}}" alt="">
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Members</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>{{$countMembers}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3  text-center">
                <div class="counter-bottom2 mrg-xs">
                    <div class="counter-img">
                        <img src="{{asset('frontend/images/icons/2.png')}}" alt="">
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Alumnis</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>{{$countAlumnis}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3  text-center">
                <div class="counter-bottom2 mrg-xs">
                    <div class="counter-img">
                        <img src="{{asset('frontend/images/icons/3.png')}}" alt="">
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Activities</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>{{$countActivities}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3  text-center">
                <div class="counter-bottom2 mrg-xs">
                    <div class="counter-img">
                        <img src="{{asset('frontend/images/icons/4.png')}}" alt="">
                    </div>
                    <div class="counter-all">
                        <div class="counter-next2">
                            <h2>Events</h2>
                        </div>
                        <div class="counter cnt-two">
                            <h1>{{$countEvents}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End courses area -->
<div class="lecturers-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-60">
                    <h1 class="uppercase">Our Club Members</h1>
                    <p>Our active club members</p>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
            </div>
        </div>
       <div class="row">
        @foreach ($clubMembers as $clubMember)
        <div class="col-md-3 col-sm-6">
            <div class="single-lecturers">
                <div class="lecturers-img">
                    <a href="#"><img alt="" src="{{asset('images/'.$clubMember->image)}}"></a>
                    <div class="img-title">
                        <h3>{{$clubMember->name}}</h3>
                        <p> {{$clubMember->designation}}</p>
                    </div>
                </div>
                <div class="lecturers-details">
                    <h3>{{$clubMember->name}}</h3>
                    <p> {{$clubMember->designation}}</p>
                    <div class="last-about-details">
                        <ul>
                            @if ($clubMember->facebook)
                            <li><a href="{{$clubMember->facebook}}"><i class="icofont icofont-social-facebook"></i></a></li>
                            @endif
                            @if ($clubMember->twitter)
                            <li><a href="{{$clubMember->twitter}}"><i class="icofont icofont-social-tumblr"></i></a></li>
                            @endif
                            @if ($clubMember->linkedin)
                            <li><a href="{{$clubMember->linkedin}}"><i class="icofont icofont-social-linkedin"></i></a></li>
                            @endif
                        </ul>
                    </div>
                    <p>Email : {{$clubMember->email}}</p>
                    <p>Phone : {{$clubMember->phone}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
<!-- End page content -->
<div class="testimonial-area bg-10 bg-opacity bg-relative ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-all slider-active2">
                    @foreach ($testimonials as $testimonial)
                    <div class="single-testimonial">
                        <div class="test-img-name">
                            <div class="test-img">
                                <img src="{{asset('images/'.$testimonial->image)}}" alt="">
                            </div>
                            <div class="test-name">
                                <h3>{{$testimonial->name}}</h3>
                                <p>{{$testimonial->designation}}</p>
                            </div>
                        </div>
                        <p>{{$testimonial->message}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="event-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-55">
                    <h1 class="uppercase">BLOGS</h1>
                    <p>Some recent blogs from creative minds</p>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4 col-sm-6">
                <div class="news-are">
                    <div class="news-img">
                        <img src="{{asset('images/'.$blog->image)}}" alt="">
                        <div class="news-date">
                            <div class="blog-meta-2">
                                <span class="published3">
                                    <i class="icofont icofont-ui-calendar"></i>
                                    {{$blog->created_at->toFormattedDateString()}}
                                </span>
                            </div>
                            {{-- <div class="blog-meta for-news">
                                <span class="published3">
                                    <a href="#">
                                        <i class="icofont icofont-eye"></i> 34
                                    </a>
                                </span>
                                <span class="published4">
                                    <a href="#">
                                        <i class="icofont icofont-comment"></i> 20
                                    </a>
                                </span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="img-text gray-bg">
                        <h3><a href="{{$blog->url()}}">{{$blog->title}}</a></h3>
                        <p>{!!Str::limit($blog->details,100)!!}</p>
                        <a class="button extra-small" href="{{$blog->url()}}">
                            <span>Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
