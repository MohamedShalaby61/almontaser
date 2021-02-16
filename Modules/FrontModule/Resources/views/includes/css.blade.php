<link rel="shortcut icon" type="image/x-icon" href="{{url('assets/front')}}/img/logo.png">
<link rel="stylesheet" href="{{url('assets/front')}}/css/bootstrap.css">
<link rel="stylesheet" href="{{url('assets/front')}}/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('assets/front')}}/css/fontawesome.min.css">
<link rel="stylesheet" href="{{url('assets/front')}}/css/normalize.css">
<link rel="stylesheet" href="{{url('assets/front')}}/css/style.css">
<link href="{{url('assets/front')}}/https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&family=Roboto:wght@500&display=swap" rel="stylesheet">

@if(app()->getLocale() == 'ar')

    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/front')}}/img/logo.png">
    <link rel="stylesheet" href="{{url('assets/front')}}/css/bootstrap-ar.css">
    <link rel="stylesheet" href="{{url('assets/front')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('assets/front')}}/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{url('assets/front')}}/css/normalize.css">
    <link rel="stylesheet" href="{{url('assets/front')}}/css/style.css">
    <link rel="stylesheet" href="{{url('assets/front')}}/css/style-ar.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&family=Roboto:wght@500&display=swap" rel="stylesheet">

@endif

@if(App()->getLocale() == 'ar')
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
    <style>
        body, h1, h2, h3, h4, h5, h6, a, li, label, input, span, button th, td, p ,tr{
            font-family: 'Cairo', sans-serif !important;
        }
        .edit-margin-cancel-button {
            margin: 7px;
        }
    </style>
@endif
