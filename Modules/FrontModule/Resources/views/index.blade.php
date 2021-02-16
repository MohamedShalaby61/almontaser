@extends('frontmodule::layouts.master')
@section('content')


@if(App()->getLocale() == 'ar')
<header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($sliders as $slider)
            <div class="item @if($loop->first) active @endif">
                <div class="wrapper">
                    <div class="image">
                        <img src="{{url('images/sliders/'.$slider->photo)}}" style="width:100%;">
                    </div>
                    <div class="content">
                        <img src="{{url('assets/front')}}/img/logo.png">
                        <p>{{ $slider->title }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</header>
@else
<header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          @foreach($sliders as $slider)
              <div class="item @if($loop->first) active @endif">
                  <div class="wrapper">
                      <div class="image">
                          <img src="{{url('images/sliders/'.$slider->photo)}}" style="width:100%;">
                      </div>
                      <div class="content">
                          <img src="{{url('assets/front')}}/img/logo.png">
                          <p>{{ $slider->title }}</p>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
    </div>
  </header>

@endif

    <div class="aboutus"> {{--start about us--}}
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <img src="{{url('assets/front')}}/img/car2.png">
                </div>
                <div class="col-md-6">
                <h2>@lang('main.About Us')</h2>
                <p style="float:{{ App()->getLocale() == 'ar' ? 'right' : 'left' }}">{!! $configArr['about'] !!}</p>
                </div>
            </div>
        </div>
  </div>
  <div class="service">
    <div class="container">

    </div>
  </div> {{--end about us--}}

  <div class="services"> {{--start services--}}
    <div class="container">
      <h2>@lang('main.Our Services')</h2>
      <p>{!! $configArr['about_index'] !!}</p>
    </div>
  </div> {{--end services--}}

  <div class="our-services"> {{--start our services--}}
    <div class="container">
      <h2>@lang('main.Our Services')</h2>
      <div class="row">
          @foreach($services as $service)
            <div class="col-md-4">
              <div class="content">
                <div class="serv">
                  <img src="{{url('images/service/'.$service->photo)}}">
                  <h3>{{ $service->title }}</h3>
                  <p>{!! $service->description !!}</p>
                </div>
              </div>
            </div>
          @endforeach
      </div>
    </div>
  </div> {{--end our services--}}

  <div class="transfer-services"> {{-- start transfer services--}}
    <div class="container">
      <h2>Airport transfer services to and from all<br> airports and governorates of Egypt:</h2>
      <div class="row">
        <div class="transfer-button">
          <div class="col-md-2">
            <div>Conference service</div>
          </div>
          <div class="col-md-2">
            <div>Airport limousine.</div>
          </div>
          <div class="col-md-2">
            <div>business services.</div>
          </div>
          <div class="col-md-2">
            <div>Mrasi Limousine.</div>
          </div>
          <div class="col-md-2">
            <div>Sharm Limousine. </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="transfer-button">
          <div class="col-md-2">
            <div>Conference service</div>
          </div>
          <div class="col-md-2">
            <div>Airport limousine.</div>
          </div>
          <div class="col-md-2">
            <div>business services.</div>
          </div>
          <div class="col-md-2">
            <div>Mrasi Limousine.</div>
          </div>
          <div class="col-md-2">
            <div>Sharm Limousine. </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="transfer-button">
          <div class="col-md-2">
            <div>Conference service</div>
          </div>
          <div class="col-md-2">
            <div>Airport limousine.</div>
          </div>
          <div class="col-md-2">
            <div>business services.</div>
          </div>
          <div class="col-md-2">
            <div>Mrasi Limousine.</div>
          </div>
          <div class="col-md-2">
            <div>Sharm Limousine. </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="transfer-button">
          <div class="col-md-2">
            <div>Conference service</div>
          </div>
          <div class="col-md-2">
            <div>Airport limousine.</div>
          </div>
          <div class="col-md-2">
            <div>business services.</div>
          </div>
          <div class="col-md-2">
            <div>Mrasi Limousine.</div>
          </div>
          <div class="col-md-2">
            <div>Sharm Limousine. </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="transfer-button">
          <div class="col-md-2">
            <div>Conference service</div>
          </div>
          <div class="col-md-2">
            <div>Airport limousine.</div>
          </div>
          <div class="col-md-2">
            <div>business services.</div>
          </div>
          <div class="col-md-2">
            <div>Mrasi Limousine.</div>
          </div>
        </div>
      </div>

    </div>
  </div> {{-- end transfer services--}}

  <div class="our-advantage"> {{-- start our advantage--}}
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="advantage">
            <h2>@lang('main.our-advantage')</h2>
            <p>{{ $configArr['our_advantage_desc'] }}</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="img">
            <img src="{{url('assets/front')}}/img/person.png">
          </div>
        </div>
      </div>
    </div>
  </div> {{-- end our advantage--}}

  <div class="car-service"> {{-- start car service--}}
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="img">
            <img src="{{url('assets/front')}}/img/car3.png">
          </div>
        </div>
        <h2>@lang('main.Our Services')</h2>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4">
              <div class="service-img">
                <img src="{{url('assets/front')}}/img/icon1.png">
                <p>{{ $configArr['first_services_features'] }}</p>
              </div>
            </div>
            <div class="col-md-4" id="main">
              <div class="service-img">
                <img src="{{url('assets/front')}}/img/icon2.png">
                <p>{{ $configArr['second_services_features'] }}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-img">
                <img src="{{url('assets/front')}}/img/icon3.png">
                <p>{{ $configArr['third_services_features'] }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> {{-- end car service--}}

  <div class="customer-service"> {{-- start customer service--}}
    <div class="container">
      <h2>@lang('main.Customer service at all times')</h2>
      <div class="row center">
        <div class="col-md-6">
          <h3>@lang('main.For reservations')</h3>
          <div class="row">
            <div class="col-lg-3 col-sm-6 serve">
              <button>{{ $configArr['phone'] }}</button>
            </div>

          </div>
          <h3>@lang('main.bank_trans')</h3>
          <div class="row center">
            <div class="col-md-6 serve">
              <button class="button">
                {{ $configArr['first_transaction_bank'] }}
              </button>
            </div>
            <div class="col-md-6 serve">
              <button class="button">
                  {{ $configArr['second_transaction_bank'] }}
              </button>
            </div>
          </div>
          <div class="paid">
            <img src="{{url('assets/front')}}/img/vodafone.png">
            <img src="{{url('assets/front')}}/img/fawery.png">
          </div>
        </div>
        <div class="col-md-6">
          <h3>@lang('main.Send Message')</h3>
          <div class="row center">
            <div class="col-md-12">
              <input type="text" name="name" placeholder="@lang('main.name')" required>
            </div>
            <div class="col-md-12">
              <input type="text" name="email" placeholder="@lang('main.email')" required>
            </div>
            <div class="col-md-12">
              <input type="text" name="phone" placeholder="@lang('main.phone')" required>
            </div>
            <div class="col-md-12">
              <textarea rows="7" cols="50" name="message" placeholder=" @lang('main.message')"></textarea>

            </div>
            <div class="send">
              <input type="submit" class="send_message" value="send">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> {{-- end customer service--}}


@stop


@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).on('click','.send_message',function (e) {
            e.preventDefault();
            let name = $('input[name=name]').val();
            let email = $('input[name=email]').val();
            let phone = $('input[name=phone]').val();
            let message = $('textarea[name=message]').val();

            $.ajax({
                url: '{{ route('send.message') }}',
                method: 'post',
                data: {name:name,email:email,phone:phone,message:message,_token: '{{ csrf_token() }}'},
                success : function (data) {
                    if(data.status == 0) {
                        Swal.fire({
                            title: 'Error!',
                            text: '{{ __("main.all_fields") }}',
                            icon: 'error',
                            confirmButtonText: 'Cool'
                        })
                    } else {
                        Swal.fire({
                            title: 'Success',
                            text: '{{ __("main.message_success") }}',
                            icon: 'success',
                            confirmButtonText: 'Cool'
                        })
                    }
                }
            });
        });
    </script>
@endpush
