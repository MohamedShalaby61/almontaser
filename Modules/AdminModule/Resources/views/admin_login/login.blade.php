<!DOCTYPE html>
<html>
    
<head>
    <title>تسجيل الدخول</title>
      <!-- meta data -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('assets/admin')}}/static/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/static/css/font-awesome.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/static/css/style.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/static/css/hover-min.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/static/css/styleArabic.css">
</head>
<body class="hold-transition login-page">
    <header>اسم الشركة</header>
<div class="container" >
        <div class="d-flex justify-content-center">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                      <!--logo text or image-->
                              <p class="text-logo">ايس ادمن</p>
                              <!--    <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">-->
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form method="post" action="{{ url('admin-panel/login') }}">
                        @csrf
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control input_user" value="" placeholder="البريد الالكتروني">
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="password" name="password"  class="form-control input_pass" value="" placeholder="كلمة المرور">
                        </div>
                        
                        </div>
                        <div class="d-flex justify-content-center mt-3 mb--3 login_container">
                            <button name="button" class="btn login_btn ">تسجيل الدخول</button>
                        </div>
                        </form>
                @if (count($errors) > 0)
                  @foreach ($errors->all() as $item)
                    <div class="error">
                   <i class="fa fa-times-circle" aria-hidden="true"></i><span>{{$item}}</span>
                </div>
                  @endforeach
                @endif
                
            </div>
        </div>
    </div>
<!-- /.login-box -->

    <footer>© جميع الحقوق محفوظة </footer>
    
    <script src="{{url('assets/admin')}}/static/js/bootstrap.min.js"></script>
    <script src="{{url('assets/admin')}}/static/js/jquery-3.3.1.min.js"></script>
</body>
</html>