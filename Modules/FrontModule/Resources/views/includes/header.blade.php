<nav>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
            <ul style="{{ App()->getLocale() == 'ar' ? 'float: right;' : '' }}">
                <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/AlMontaserTravel/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="col-md-4 img">
        <img src="{{url('assets/front')}}/img/centerlogo.png">
        </div>
        <div class="col-md-4">
          <div class="language" style="{{ App()->getLocale() == 'ar' ? 'text-align: left;' : '' }}">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ App()->getLocale() == 'ar' ? 'العربية' : 'English' }} <i class="fa fa-globe"
                  aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @if(App()->getLocale() == 'ar')
                      <a class="dropdown-item" data-lang="en" href="{{url('lang/en')}}"> English </a>
                  @else
                      <a class="dropdown-item" data-lang="ar" href="{{url('lang/ar')}}"> العربية </a>
                  @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

