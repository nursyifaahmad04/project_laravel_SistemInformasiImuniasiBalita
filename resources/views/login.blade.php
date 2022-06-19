
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="{{asset('/lite-master')}}/dist/image/png" href="{{asset('/lite-master')}}/dist/images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Administrator</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/lite-master')}}/dist/css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="{{asset('/lite-master')}}/dist/css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="{{asset('/lite-master')}}/dist/css/application.min.css">
    <!-- endinject -->

</head>
<body>

<div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <main class="mdl-layout__content">
        <div class="mdl-card mdl-card__login mdl-shadow--2dp">
                <div class="mdl-card__supporting-text color--dark-gray">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="mdl-card__title-text text-color--smooth-gray">Sistem Informasi Imunisasi Balita</span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="login-name text-color--white">Login Administrator</span>
                            <span class="login-secondary-text text-color--smoke">Masukan Username dan Password</span>
                        </div>
                    <form action="{{ route('login') }}" method="post">
                    @csrf
                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" name="email" class="form-control">
                                <label class="mdl-textfield__label" for="">Username</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="password" name="password" class="form-control">
                                <label class="mdl-textfield__label" for="">Password</label>
                            </div>
                            <a href="forgot-password.html" class="login-link">Lupa Password?</a>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                            <div class="mdl-layout-spacer"></div>
                            <a href="/">
                                <buttons class="mdl-button mdl-js-button mdl-button--raised color--green">
                                    KEMBALI
                                </buttons>
                            </a>
                            &nbsp;&nbsp;
                                <button type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                                    SIGN IN
                                </button>
                            
                        </div>
                    </div>
                </div>
            </div>
    </form>
    </main>
</div>

<!-- inject:js -->
<script src="{{asset('lite-master')}}/dist/js/d3.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/getmdl-select.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/material.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/nv.d3.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/layout/layout.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/scroll/scroll.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/widgets/charts/discreteBarChart.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/widgets/charts/stackedBarChart.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/widgets/employer-form/employer-form.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/widgets/map/maps.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/widgets/table/table.min.js"></script>
<script src="{{asset('lite-master')}}/dist/js/widgets/todo/todo.min.js"></script>
<!-- endinject -->

</body>
</html>