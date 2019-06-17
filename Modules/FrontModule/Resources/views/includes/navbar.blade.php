<header class="header-style2-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="inner-content clearfix">
                    <div class="header-style2-logo float-left">
                        <a href="{{ route('index_front') }}">
                            <img style="width:230px;height:50px" src="{{ url('') }}/images/config/{{ $config['logo'] }}" alt="Awesome Logo">
                        </a>
                    </div>   
                    <div class="header-middle clearfix float-left" >
                        <nav class="main-menu style1 style2 clearfix">
                            <div class="navbar-header clearfix">    
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown current"><a href="{{ route('index_front') }}">@lang('frontmodule::front.home')</a></li>
                                    <li><a href="{{route('about_us')}}">@lang('frontmodule::front.about_us')</a></li>
                                    <li><a href="{{ route('question') }}">@lang('frontmodule::front.ask')</a></li>
                                    <li><a href="{{ url('blogs') }}">@lang('frontmodule::front.blogs')</a></li>
                                    <li class="dropdown"><a href="{{route('services')}}">@lang('frontmodule::front.services')</a>
                                        <ul>
                                            @if($services->count() > 0)
                                                @foreach($services as $service)
                                                <li><a href="{{ route('single_service',str_replace(' ','-',$service->title)) }}">{{ $service->title }}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}">@lang('frontmodule::front.contact_us')</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="header-style2-button float-right">
                        <a href="{{ route('question') }}"><span class="icon-date"></span>@lang('frontmodule::front.ask')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</header>
