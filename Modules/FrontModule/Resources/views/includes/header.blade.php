<nav>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <ul>
            {{-- <li><a href="{{$configArr['fb_link']}}"><span class="fab fa-facebook-f"></span></a></li>
            <li><a href="{{$configArr['tw_link']}}"><span class="fab fa-twitter"></span></a></li>
            <li><a href="{{$configArr['telegram']}}"><span class="fab fa-instagram"></span></a></li>
            <li><a href="{{$configArr['youtube']}}"><span class="fab fa-youtube"></span></a></li> --}}
          </ul>
        </div>
        <div class="col-md-4 img">
        <img src="{{url('assets/front')}}/img/centerlogo.png">
        </div>
        <div class="col-md-4">
          <div class="language">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English <i class="fa fa-globe"
                  aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach ($activeLang as $lang)
                    @if($lang->lang == 'ar')
                        <a class="dropdown-item" data-lang="ar" href="{{url('lang', [$lang->lang])}}"> العربية </a>
                    @else
                        <a class="dropdown-item" data-lang="en" href="{{url('lang', [$lang->lang])}}"> English </a>
                    @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

