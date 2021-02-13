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
            <div class="item active">
                <div class="wrapper">
                    <div class="image">
                        <img src="{{url('assets/front')}}/img/background.png" style="width:100%;">
                    </div>
                    <div class="content">
                        <img src="{{url('assets/front')}}/img/logo.png">
                        <p>نتميز بالدقة والجودة والأسعار التنافسية</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="wrapper">
                    <div class="image">
                        <img src="{{url('assets/front')}}/img/background-slid.png" style="width:100%;">
                    </div>
                    <div class="content">
                        <img src="{{url('assets/front')}}/img/logo.png">
                        <p>نتميز بافضل الاسعار بالاضافة الى<br> سيارات ليموزين حديثة</p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="wrapper">
                    <div class="image">
                        <img src="{{url('assets/front')}}/img/background-slid1.png" style="width:100%;">
                    </div>
                    <div class="content">
                        <img src="{{url('assets/front')}}/img/logo.png">
                        <p>نتميز بافضل خدمة ليموزين لجميع عملائنا</p>
                    </div>
                </div>
            </div>
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
        <div class="item active">
          <div class="wrapper">
            <div class="image">
              <img src="{{url('assets/front')}}/img/background.png" style="width:100%;">
            </div>
            <div class="content">
              <img src="{{url('assets/front')}}/img/logo.png">
              <p>we are distinguished by<br> accuracy , quality and<br> competitive price</p>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="wrapper">
            <div class="image">
              <img src="{{url('assets/front')}}/img/background-slid.png" style="width:100%;">
            </div>
            <div class="content">
              <img src="{{url('assets/front')}}/img/logo.png">
              <p> We are distinguished by<br> the best prices in addition<br> to the modern luxury cars</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="wrapper">
            <div class="image">
              <img src="{{url('assets/front')}}/img/background-slid1.png" style="width:100%;">
            </div>
            <div class="content">
              <img src="{{url('assets/front')}}/img/logo.png">
              <p>We are distinguished by,<br> the best luxury limousine<br> service for all our clients</p>
            </div>
          </div>
        </div>
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
                <h2>About Us</h2>
                <p>El-montaser Limousine Services and Tourist Transportation is one of the largest limousine companies in the
                    Middle East.We provide you with limousine service at an unparalleled level of expertise and professionalism.
                    We provide limousine service within the Arab Republic of Egypt. When you arrive at any of the Egyptian
                    airports, you will find El-montaser Limousine Company staff at your service.</p>
                <p class="p">All of our chauffeurs are fluent in all languages in order all our customers.</p>
                <p class="p">All of our chauffeurs are fluent in all languages in order all our customers.</p>
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
      <h2>Our Services</h2>
      <p>Runway Limousine Company offer a wide range of limousine services such as limousine Borg<br> Al Arab airport,
        Cairo airport limousine, inter-governorate transportation, corporate transportation,<br> and wedding, events and
        conferences services.A fleet of modern luxury cars are all driven<br> by professional drivers and at a
        competitive price.</p>
    </div>
  </div> {{--end services--}}

  <div class="our-services"> {{--start our services--}}
    <div class="container">
      <h2>Our Services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="content">
            <div class="serv">
              <img src="{{url('assets/front')}}/img/service1.png">
              <h3>Cairo Airport Limousine:</h3>
              <p>Elmontaser Limousine Company offers you the best prices as well as modern luxury cars. If you are
                looking for a car rental office in Cairo or Alexandria or you want to rent a car with driver, we offer
                you Cairo International Airport limousine service through a fleet of modern luxury cars and professional
                drivers who knows how to deal with crises.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="content">
            <div class="serv">
              <img src="{{url('assets/front')}}/img/service2.png">
              <h3>Borg Al Arab Airport limousine:</h3>
              <p>Elmontaser Limousine Company offers you the best prices as well as modern luxury cars. If you are
                looking for a car rental office in Cairo or Alexandria or you want to rent a car with driver, we offer
                you Cairo International Airport limousine service through a fleet of modern luxury cars and professional
                drivers who knows how to deal with crises.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="content">
            <div class="serv">
              <img src="{{url('assets/front')}}/img/service3.png">
              <h3>Conference services:</h3>
              <p>ElmontaserLimousine Company can assist conference organizers in all governorates in various
                transportation services by providing conference organizing companies with cars and limousine services in
                order to manage guest transfers during the conference.We have a fleet of cars which equipped to assist
                conference organizers in all governorates.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content">
            <div class="serv">
              <img src="{{url('assets/front')}}/img/service4.png">
              <h3>Sharm El Sheikh and Hurghada Airport Limousine:</h3>
              <p>Elmontaser Limousine Company offers you limousine service from Sharm El Shaikh Int’l airport to Cairo
                at a competitive price as well as from Alexandria to Sharm El Shaikh through our branches in Sharm El
                Shaikh City which provide the customer with airport transfer service from Sharm El Sheikh Airport to the
                hotel and to all Governorates of Egypt, professional drivers to transfer you from Sharm El Sheikh to
                Cairo.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content">
            <div class="serv">
              <img src="{{url('assets/front')}}/img/service5.png">
              <h3>Limousine services between provinces:</h3>
              <p> All of our stretched limousine and vehicles are in excellent condition; cars are all driven by
                professional drivers who are distinguished by their full knowledge of the different roads within the
                Arab Republic of Egypt, drivers are keen to choose the best route in order to arrive on time. Our fleet
                consists of vehicles 7 passenger, 14 passengers, 33 passengers and 50 passengers.</p>
            </div>
          </div>
        </div>
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
            <h2>our-advantage</h2>
            <p>Elmontaser Limousine Company owns a distinguished fleet<br> of the latest types of cars.We have the best
              driver crew trained<br> at the highest level of efficiency and good manners, and holders of<br> accredited
              certificates in safe driving.drivers<br> are keen to choose the best route in order to arrive on time.</p>
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
        <h2>Our Services</h2>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4">
              <div class="service-img">
                <img src="{{url('assets/front')}}/img/icon1.png">
                <p>offering 24-hour customer service</p>
              </div>
            </div>
            <div class="col-md-4" id="main">
              <div class="service-img">
                <img src="{{url('assets/front')}}/img/icon2.png">
                <p>we provide the best price for companies and individuals for short or long-term leases for the various
                  types of cars</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-img">
                <img src="{{url('assets/front')}}/img/icon3.png">
                <p>commitment to deadlines,24-hour service</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> {{-- end car service--}}

  <div class="customer-service"> {{-- start customer service--}}
    <div class="container">
      <h2>Customer service at all times</h2>
      <div class="row center">
        <div class="col-md-6">
          <h3>For reservations and inquiries from inside<br> and outside Egypt</h3>
          <div class="row">
            <div class="col-lg-3 col-sm-6 serve">
              <button>+20659968555</button>
            </div>
            <div class="col-lg-3 col-sm-6 serve">
              <button>+20659968555</button>
            </div>
            <div class="col-lg-3 col-sm-6 serve">
              <button>+20659968555</button>
            </div>
            <div class="col-lg-3 col-sm-6 serve">
              <button>+20659968555</button>
            </div>

          </div>
          <h3>Bank Transfer</h3>
          <div class="row center">
            <div class="col-md-6 serve">
              <button class="button">
                <p>
                  Egypt Bank
                </p>551874841684
              </button>
            </div>
            <div class="col-md-6 serve">
              <button class="button">
                <p>
                  Al-ahly Bank
                </p>551874841684
              </button>
            </div>
          </div>
          <div class="paid">
            <img src="{{url('assets/front')}}/img/vodafone.png">
            <img src="{{url('assets/front')}}/img/fawery.png">
          </div>
        </div>
        <div class="col-md-6">
          <h3>Send Message</h3>
          <div class="row center">
            <div class="col-md-12">
              <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="col-md-12">
              <input type="text" name="name" placeholder="Email" required>
            </div>
            <div class="col-md-12">
              <input type="text" name="name" placeholder="Phone" required>
            </div>
            <div class="col-md-12">
              <textarea rows="7" cols="50" name="enquiry" placeholder=" Message"></textarea>

            </div>
            <div class="send">
              <input type="submit" value="send">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> {{-- end customer service--}}


@stop


