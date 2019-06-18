@if($sliders->count() > 2)
    @if(App()->getLocale() == 'ar')
        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1690" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{url('/')}}/images/sliders/{{$sliders->first()->photo}}" data-title="Slide Title" data-transition="parallaxvertical">

                                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{url('/')}}/images/sliders/{{$sliders->first()->photo}}">

                                    <div class="tp-caption"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingtop="[0,0,0,0]"
                                         data-responsive_offset="on"
                                         data-type="text"
                                         data-height="none"
                                         data-width="['700','700','650','400']"
                                         data-whitespace="normal"
                                         data-hoffset="['-680','-680','-680','-680']"
                                         data-voffset="['-120','-130','-110','-105']"
                                         data-x="['right','right','right','right']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-textalign="['top','top','top','top']"
                                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                         style="z-index: 7; white-space: nowrap;">
                                        <div class="slide-content left-slide">
                                            <div class="big-title">
                                               {{ $sliders->first()->title }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-caption"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingtop="[0,0,0,0]"
                                         data-responsive_offset="on"
                                         data-type="text"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-width="['700','700','650','400']"
                                         data-hoffset="['-680','-680','-680','-680']"
                                         data-voffset="['85','30','30','15']"
                                         data-x="['right','right','right','right']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-textalign="['top','top','top','top']"
                                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                         style="z-index: 7; white-space: nowrap;">
                                        <div class="slide-content left-slide">
                                            <div class="text">
                                               {!! $sliders->first()->description !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-caption"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingtop="[0,0,0,0]"
                                        data-responsive_offset="on"
                                        data-type="text"
                                        data-height="none"
                                        data-width="['700','700','650','450']"
                                        data-whitespace="normal"
                                        data-hoffset="['-680','-680','-680','-680']"
                                        data-voffset="['160','105','120','105']"
                                        data-x="['right','right','right','right']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-textalign="['top','top','top','top']"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                        style="z-index: 7; white-space: nowrap;">
                                        <div class="slide-content left-slide">
                                            <div class="btn-box">
                                                <a class="btn-one" href="#">@lang('frontmodule::front.more')</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1691" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{url('/')}}/images/sliders/{{$sliders->skip(1)->first()->photo}}" data-title="Slide Title" data-transition="parallaxvertical">

                                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{url('/')}}/images/sliders/{{$sliders->skip(1)->first()->photo}}">

                                    <div class="tp-caption"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingtop="[0,0,0,0]"
                                         data-responsive_offset="on"
                                         data-type="text"
                                         data-height="none"
                                         data-width="['700','700','700','460']"
                                         data-whitespace="normal"
                                         data-hoffset="['720','720','720','720']"
                                         data-voffset="['-130','-140','-125','-110']"
                                         data-x="['center','center','center','center']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-textalign="['top','top','top','top']"
                                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                         style="z-index: 7; white-space: nowrap;">
                                        <div class="slide-content text-center">
                                            <div class="big-title">
                                                {{$sliders->skip(1)->first()->title}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-caption"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingtop="[0,0,0,0]"
                                         data-responsive_offset="on"
                                         data-type="text"
                                         data-height="none"
                                         data-width="['700','700','700','460']"
                                         data-whitespace="normal"
                                         data-hoffset="['720','720','720','720']"
                                         data-voffset="['-75','-85','-55','-55']"
                                         data-x="['center','center','center','center']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-textalign="['top','top','top','top']"
                                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                         style="z-index: 7; white-space: nowrap;">
                                        <div class="slide-content text-center">
                                            <div class="big-title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-caption"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingtop="[0,0,0,0]"
                                         data-responsive_offset="on"
                                         data-type="text"
                                         data-height="none"
                                         data-width="['700','700','600','460']"
                                         data-whitespace="normal"
                                         data-hoffset="['720','720','720','720']"
                                         data-voffset="['-30','-40','0','-30']"
                                         data-x="['center','center','center','center']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-textalign="['top','top','top','top']"
                                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                         style="z-index: 7; white-space: nowrap;">
                                        <div class="slide-content text-center">
                                            <div class="border-box"></div>
                                        </div>
                                    </div>
                                    <div class="tp-caption"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingtop="[0,0,0,0]"
                                         data-responsive_offset="on"
                                         data-type="text"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-width="['700','700','700','460']"
                                         data-hoffset="['720','720','720','720']"
                                         data-voffset="['20','30','25','10']"
                                         data-x="['center','center','center','center']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-textalign="['top','top','top','top']"
                                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                         style="z-index: 7; white-space: nowrap;">
                                        <div class="slide-content text-center">
                                            <div class="text">
                                                {!! $sliders->skip(1)->first()->description !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-caption"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingtop="[0,0,0,0]"
                                        data-responsive_offset="on"
                                        data-type="text"
                                        data-height="none"
                                        data-width="['700','700','700','460']"
                                        data-whitespace="normal"
                                        data-hoffset="['720','720','720','720']"
                                        data-voffset="['110','120','120','90']"
                                        data-x="['center','center','center','center']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-textalign="['top','top','top','top']"
                                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                        style="z-index: 7; white-space: nowrap;">
                                        <div class="slide-content text-center">
                                            <div class="btn-box">
                                                <a class="btn-one" href="#">هدفنا الجودة</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1692" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{url('/')}}/images/sliders/{{$sliders->skip(2)->first()->photo}}" data-title="Slide Title" data-transition="parallaxvertical">
                                <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{url('/')}}/images/sliders/{{$sliders->skip(2)->first()->photo}}">

                                    <div class="tp-caption"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingtop="[0,0,0,0]"
                                         data-responsive_offset="on"
                                         data-type="text"
                                         data-height="none"
                                         data-width="['650','600','650','400']"
                                         data-whitespace="normal"
                                         data-hoffset="['15','15','15','15']"
                                         data-voffset="['-85','-95','-90','-75']"
                                         data-x="['right','right','right','right']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-textalign="['top','top','top','top']"
                                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                         style="z-index: 7; white-space: nowrap;">
                                        <div class="slide-content">
                                            <div class="big-title">
                                                {{$sliders->skip(2)->first()->title}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tp-caption"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingtop="[0,0,0,0]"
                                         data-responsive_offset="on"
                                         data-type="text"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-width="['650','600','650','400']"
                                         data-hoffset="['15','15','15','15']"
                                         data-voffset="['80','60','30','20']"
                                         data-x="['right','right','right','right']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-textalign="['top','top','top','top']"
                                         data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                         style="z-index: 7; white-space: nowrap;">
                                        <div class="slide-content">
                                            <div class="text">
                                               {!! $sliders->skip(1)->first()->description !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tp-caption"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]"
                                         data-paddingtop="[0,0,0,0]"
                                         data-responsive_offset="on"
                                         data-type="text"
                                         data-height="none"
                                         data-width="['650','600','650','400']"
                                         data-whitespace="normal"
                                         data-hoffset="['15','15','15','15']"
                                         data-voffset="['160','135','120','100']"
                                         data-x="['right','right','right','right']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-textalign="['top','top','top','top']"
                                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                         style="z-index: 7; white-space: nowrap;">
                                        <div class="slide-content">
                                            <div class="btn-box">
                                                <a class="btn-one" href="#">@lang('frontmodule::front.see_our_doctors')</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
    @else
    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1690" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{url('/')}}/images/sliders/{{$sliders->first()->photo}}" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{url('/')}}/images/sliders/{{$sliders->first()->photo}}">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','700','650','400']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-120','-130','-110','-105']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="big-title">
                                   {{ $sliders->first()->title }}
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['700','700','650','400']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['50','30','30','15']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="text">{!! $sliders->first()->description !!}</div>
                            </div>
                        </div>
                        <div class="tp-caption"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['700','700','650','450']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['125','105','120','105']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content left-slide">
                                <div class="btn-box">
                                    <a class="btn-one" href="#">@lang('frontmodule::front.more')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1691" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{url('/')}}/images/sliders/{{$sliders->skip(1)->first()->photo}}" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{url('/')}}/images/sliders/{{$sliders->skip(1)->first()->photo}}">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','700','700','460']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-130','-140','-125','-110']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content text-center">
                                <div class="big-title">
                                    {{$sliders->skip(1)->first()->title}}
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','700','700','460']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-75','-85','-55','-55']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content text-center">
                                <div class="big-title">
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','700','600','460']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-30','-40','0','-30']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content text-center">
                                <div class="border-box"></div>
                            </div>
                        </div>
                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['700','700','700','460']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['20','30','25','10']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content text-center">
                                <div class="text">{!! $sliders->skip(1)->first()->description !!}</div>
                            </div>
                        </div>
                        <div class="tp-caption"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['700','700','700','460']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['110','120','120','90']"
                            data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content text-center">
                                <div class="btn-box">
                                    <a class="btn-one" href="#">about us</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1692" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{url('/')}}/images/sliders/{{$sliders->skip(2)->first()->photo}}" data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{url('/')}}/images/sliders/{{$sliders->skip(2)->first()->photo}}">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['650','600','650','400']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-85','-95','-90','-75']"
                        data-x="['right','right','right','right']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content">
                                <div class="big-title">
                                    {{$sliders->skip(2)->first()->title}}
                                </div>
                            </div>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['650','600','650','400']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['50','60','30','20']"
                        data-x="['right','right','right','right']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content">
                                <div class="text">{!! $sliders->skip(2)->first()->description !!}</div>
                            </div>
                        </div>

                        <div class="tp-caption"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['650','600','650','400']"
                            data-whitespace="normal"
                            data-hoffset="['15','15','15','15']"
                            data-voffset="['125','135','120','100']"
                            data-x="['right','right','right','right']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content">
                                <div class="btn-box">
                                    <a class="btn-one" href="#">Meet Our Doctors</a>
                                </div>
                            </div>
                        </div>
                    </li>
    @endif
@endif
