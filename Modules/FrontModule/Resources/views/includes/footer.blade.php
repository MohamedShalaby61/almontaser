  <div class="addresses">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>@lang('main.address')</h2>
          <p>{{ $configArr['address'] }}</p>
        </div>
        <div class="col-md-8">
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d316761.1297419384!2d0.003518182523658518!3d51.66539612977011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1518129934487"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div><!-- end map -->
        </div>
      </div>
    </div>
  </div>

  <a class="contact" href="http://api.whatsapp.com/send?phone={{ $configArr['phone'] }}">
  <img src="{{url('assets/front')}}/img/whatsapp.png">
  </a>
