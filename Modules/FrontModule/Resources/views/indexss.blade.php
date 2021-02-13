@extends('frontmodule::layouts.master')
@section('content')


@if(App()->getLocale() == 'ar')
    <div id="rev_slider_15_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container overlay overlay--dark" data-alias="slider1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullwidth mode -->
        <div id="rev_slider_15_2" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.1">
            <ul>
            @foreach($slider as $index=>$slide)
                <!-- SLIDE  -->

                <li data-index="rs-{{$slid[$index]}}" data-transition="fade,slotfade-horizontal" data-slotamount="default,default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Elastic.easeOut,default" data-easeout="Elastic.easeIn,default" data-masterspeed="300,default" data-delay="6010" data-rotate="0,0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('images/sliders/' . $slide->photo)}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="3000" data-ease="Power3.easeOut" data-scalestart="130" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="15" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div id="rrzm_36" class="rev_row_zone rev_row_zone_middle" style="z-index: 5;">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption  " id="slide-76-layer-1" data-x="100" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-type="row" data-columnbreak="3" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption  " id="slide-76-layer-2" data-x="100" data-y="100" data-width="['auto']" data-height="['auto']" data-type="column" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-columnwidth="41.67%" data-verticalalign="top" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; width: 100%;"></div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption  " id="slide-76-layer-3" data-x="100" data-y="100" data-width="['auto']" data-height="['auto']" data-type="column" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-columnwidth="58.33%" data-verticalalign="top" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; width: 100%;">
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption   tp-resizeme" id="slide-76-layer-4" data-x="" data-y="" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-fontsize="['60', '55', '40', '32']" data-lineheight="['72', '60', '43', '38']" data-frames='[{"delay":"+0","speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[40,40,40,40]" data-marginleft="[0,0,0,0]" data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: normal; font-size: 72px; line-height: 72px; font-weight: 700; color: #fff; letter-spacing: 0px; display: block;font-family:'Droid Arabic Kufi', serif;">
                                     <h1>{{$slide->title}}</h1>  
                                </div>
                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption   tp-resizeme" id="slide-{{$slid[$index]}}-layer-5"data-x="" data-y="" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-fontsize="['20', '20', '18', '16']" data-lineheight="['36', '36', '24', '22']" data-frames='[{"delay":"+0","speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[40,40,40,40]" data-marginleft="[0,0,0,0]" data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: normal; font-size: 24px; line-height: 36px; font-weight: 600; color: rgba(255,255,255,0.8); letter-spacing: 0px; display: block;">
                                {!! $slide->description !!} 
                                   
                                </div>
                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption" id="slide-76-layer-6" data-x="" data-y="" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":"+0","speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; display: inline-block;">
                                    <a href="#" class="btn btn-secondary"> {{__('frontmodule::front.learn')}}</a></div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
                <!-- SLIDE  -->
               
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->
  @else  
    <div id="rev_slider_15_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="slider1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullwidth mode -->
        <div id="rev_slider_15_1" class="rev_slider fullwidthabanner dark-overlay" style="display:none;" data-version="5.4.8.1">
            <ul>
                <!-- SLIDE  -->
              @foreach($slider as $index=>$slide)              
                <li data-index="rs-{{$slid[$index]}}" data-transition="fade,slotfade-horizontal" data-slotamount="default,default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Elastic.easeOut,default" data-easeout="Elastic.easeIn,default" data-masterspeed="300,default" data-delay="6010" data-rotate="0,0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('images/sliders/' . $slide->photo)}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="3000" data-ease="Power3.easeOut" data-scalestart="130" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="15" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div id="rrzm_36" class="rev_row_zone rev_row_zone_middle" style="z-index: 5;">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption  " id="slide-36-layer-2" data-x="" data-y="center" data-voffset="-210" data-width="['auto']" data-height="['auto']" data-type="row" data-columnbreak="3" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+5670","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption  " id="slide-36-layer-3" data-x="100" data-y="100" data-width="['auto']" data-height="['auto']" data-type="column" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+5670","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-columnwidth="75%" data-verticalalign="top" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; width: 100%;">
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption  tp-no-events   tp-resizeme" id="slide-{{$slid[$index]}}-layer-5" data-x="" data-y="" data-height="['auto']" data-type="text" data-responsive_offset="on" data-fontsize="['50', '45', '40', '32']" data-lineheight="['64', '55', '43', '38']" data-frames='[{"delay":"+0","split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"+2570","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[30,30,30,30]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; max-width: 930px; white-space: normal; font-size: 60px; line-height: 70px; font-weight: 600; color: #ffffff; letter-spacing: 0px; display: block;pointer-events:none;">
                                     
                                    {{$slide->title}} 
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption   tp-resizeme" id="slide-36-layer-6" data-x="" data-y="" data-height="['auto']" data-fontsize="['20', '20', '18', '16']" data-lineheight="['36', '36', '24', '22']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":"+2600","speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"+1870","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[35,35,35,35]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; max-width: 731px; white-space: normal; font-size: 20px; line-height: 36px; font-weight: 400; color: #ffffff; letter-spacing: 0px; display: block;">
                                {!! $slide->description !!} 
                                </div>
                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption" id="slide-36-layer-10" data-x="" data-y="" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":"+3600","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2070","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; white-space: normal; display: inline-block;">
                                    <a href="#" class="btn btn-secondary btn--rounded">{{__('frontmodule::front.learn')}}</a></div>
                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption" id="slide-36-layer-11" data-x="" data-y="" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":"+3800","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+1870","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[30,30,30,30]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; white-space: normal; display: inline-block;">
                                    <a href="{{route('about')}}" class="btn btn-outline-light btn--rounded">{{__('frontmodule::front.about')}}</a></div>
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption  " id="slide-36-layer-4" data-x="100" data-y="100" data-width="['auto']" data-height="['auto']" data-type="column" data-responsive_offset="on" data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+5670","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-columnwidth="25%" data-verticalalign="top" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; width: 100%;"></div>
                        </div>
                    </div>
                </li>
              @endforeach
                <!-- SLIDE  -->
                
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->
@endif


    

    <section class="subscribe-three">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-5">
                            <h4>{{__('frontmodule::front.getlast')}}</h4>
                        </div><!-- ends: .col-lg-5 -->
                        <div class="col-lg-7">
                            <form action="#" class="intro-form m-0" _lpchecked="1">
                                <div class="input-group input-group-light">
                                    <span class="icon-left" id="basic-addon7"><i class="la la-envelope"></i></span>
                                    <input type="text" class="form-control" placeholder="{{__('frontmodule::front.enteryouremail')}}" aria-label="Username">
                                </div>
                                <div><button type="submit" class="btn btn-primary">{{__('frontmodule::front.getstarted')}}</button></div>
                            </form>
                        </div><!-- ends: .col-lg-7 -->
                    </div><!-- ends .row -->
                </div>
            </div>
        </div>
    </section><!-- ends: .subscribe-three -->




  
   

    <section class="about-wrapper p-top-110 p-bottom-30"  style="background: #f5f7fc;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-contents">
                        <h3>{{$configArr[1]}}</h3>
                        
                        <p>{{$configArr[2]}}.</p></br></br>

                        <a href="#" class="btn btn-primary">{{__('frontmodule::front.aboutus')}}</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="line-chart_wrap cardify ">
                        
                    <img src="{{asset('images/config/c12.jpg')}}" alt="">
                        
                    </div><!-- End: .line-chart_wrap -->
                </div>
            </div>
        </div>
    </section><!-- ends: .about-wrapper -->




    <section class="case_studies">
        <div class="p-top-100 p-bottom-95 bg-half-gray">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title divider text-center" style="margin-bottom:40px">
                            <h1>{{__('frontmodule::front.servicesarea')}}</h1>
                            <p class="mx-auto">{{$configs['services_desc']}}.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="carousel-two owl-carousel">

                        @foreach($services as $service)
                            <div class="carousel-two-single">
                                <div class="card card-shadow card--seven">
                                    <figure style ="width:360px;height:230px">
                                      <img src="{{asset('images/service/' . $service->photo)}}" alt="" style="width:100%;height:100%">
                                    </figure>
                                    <div class="card-body text-center" style="height:260px;" >
                                        <h6><a href="">{{$service->title}}</a></h6>
                                       {!!str_limit($service->description,100)!!}
                                       <a href="{{route('serviceSingle',$service->id)}}" class="btn btn-outline-primary">See Details</a>
                                    </div>
                                    
                                </div><!-- End: .card -->
                            </div>
                        @endforeach    
                         
                        </div><!-- ends: .owl-carousel -->
                    </div>
                </div>
            </div>
        </div>
        
    </section> 


    
    <div class="p-top-100 p-bottom-80" style="background: #f5f7fc;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5">
                        <div class="divider text-center">
                            <h1 class="color-dark">{{__('frontmodule::front.projects')}}</h1>
                            <p class="mx-auto">{{$configs['projects_desc']}}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filter-sort">
                            <ul id="card_filter">
                                <li data-uk-filter="" class="active"> All</li>
                              @foreach($protofiliocategs as $index=>$protofiliocateg)  
                                <li data-uk-filter="{{$protofiliocateg->id}}">{{$protofiliocateg->title}}</li>
                              @endforeach  
                              
                            </ul>
                        </div><!-- ends: .filter-sort -->
                    </div><!-- ends: .col-lg-12 -->
                </div>
                <div class="row" data-uk-grid="{controls: '#card_filter'}">
                @foreach($projects as $project)
                    <div data-uk-filter="{{$project->portfolio_category->id}}" class="col-lg-4 col-md-6">
                        <div class="card card-shadow card-one">
                            <figure style ="width:360px;height:230px">
                                <img src="{{asset('images/project/' . $project->photo)}}" alt="" style="width:100%;height:100%">
                                <figcaption>
                                    <a href="{{route('projectSingle',$project->id)}}"><i class="la la-link"></i></a>
                                </figcaption>
                            </figure>
                            <div class="card-body">
                                <p class="card-subtitle color-secondary">{{$project->title}}</p>
                                <h6><a href="{{route('projectSingle',$project->id)}}">{!! str_limit($project->description,100) !!}</a></h6>
                            </div>
                        </div><!-- Ends: .card -->
                    </div>
                @endforeach    
                  
                </div><!-- ends: .row -->
            </div>
        </div><!-- ends: .filter-wrapper -->
    </div><!-- ends: .section-padding2 -->

    <!-- <section class="p-top-70 p-bottom-70 border-bottom clients-logo-area" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-four owl-carousel">
                      @foreach($partners as $partner)  
                        <div class="carousel-single" style="width:145px;height:60px;">
                            <img style="width:100%;height:100%;" src="{{asset('images/partners/' . $partner->photo)}}" alt="">
                        </div>
                      @endforeach                        
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ends: clients logo area -->
    
    



    
    


    
    <section class="news-area p-top-100 p-bottom-60" style="background-color: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 section-title">
                    <h2>{{__('frontmodule::front.news')}}</h2>
                    <p>{{$configs['blogs_desc']}}.</p>
                </div>
                <div class="post--card-four col-lg-12">
                    <div class="row">
                        @foreach($blogs as $blog)
                         <div class="col-lg-4 col-sm-6">
                            <div class="card post--card post--card4">
                                <figure style="height:213px">
                                    <img style="height:100%;width:100%" src="{{asset('/images/blog/' . $blog->photo)}}" alt="">
                                </figure>
                                <div class="card-body">
                                    <h6><a href="">{{$blog->title}}</a></h6>
                                    <p>{!! str_limit($blog->short_desc,100) !!}</p>
                                    <ul class="post-meta d-flex m-top-20">
                                        <li>{{$blog->tags}}</li>
                                        <li>in <a href="">{{$blog->categories->first()->title}}</a></li>
                                    </ul>
                                </div>
                            </div><!-- End: .card -->
                         </div><!-- ends: .col-lg-4 -->
                        @endforeach


                      
                    </div><!-- ends: .row -->
                </div><!-- ends: .post--card1 -->
            </div>
        </div>
    </section><!-- ends: .news-area -->


    <section class="testimonials p-bottom-65" style="margin-top:45px;background-color: #f5f7fc;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>{{__('frontmodule::front.whatsay')}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-carousel-three owl-carousel">
                    @foreach($testimonials as $testimonial)
                        <div class="carousel-single">
                            <div class="card card-shadow card--testimonial2">
                                <div class="card-body text-center" >
                                    <img src="{{asset('images/testimonials/' . $testimonial->photo)}}" style="width:75px;height:75px; " alt="" class="rounded-circle">
                                    <h6>{{$testimonial->name}}</h6>
                                    <div class="ratings color-warning">
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                    </div>
                                    <p>{!! str_limit($testimonial->quote,150)!!}.</p>
                                    <p class="author-spec"><strong></strong> <span class="color-secondary">{!! $testimonial->job_title!!}</span></p>
                                </div>
                            </div><!-- End: .card-body -->
                        </div><!-- ends: .carousel-single -->
                    @endforeach    
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-wrapper-sm cta--seven bgimage biz_overlay overlay--secondary">
        <div class="bg_image_holder">
            <img src="{{asset('images/config/cta3.png')}}" alt="">
        </div>
        <div class="container content_above">
            <div class="row d-flex align-items-center">
                <div class="col-lg-9">
                    <p class="m-0 color-light">{{__('frontmodule::front.ready')}}</p>
                </div>
                <div class="col-lg-3">
                    <div class="action-btn">
                        <a href="" class="btn btn-light">{{__('frontmodule::front.contuct')}}</a>
                    </div>
                </div>
            </div><!-- .row -->
        </div>
    </section><!-- ends: .cta-wrapper-sm -->
  
    
</body>
@stop


