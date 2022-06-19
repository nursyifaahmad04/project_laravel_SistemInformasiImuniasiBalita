
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="{{asset('/lite-master')}}/dist/images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Imunisasi Balita</title>

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
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div class="mdl-layout-spacer"></div>
            <!-- Search-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                    <i class="material-icons">search</i>
                </label>

                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search"/>
                    <label class="mdl-textfield__label" for="search">Enter your query...</label>
                </div>
            </div>

            <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon notification" id="notification"
                 data-badge="23">
                notifications_none
            </div>
            <!-- Notifications dropdown-->
            <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp notifications-dropdown"
                for="notification">
                <li class="mdl-list__item">
                    You have 23 new notifications!
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">plus_one</i>
                        </span>
                        <span>You have 3 new orders.</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">just now</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--secondary">
                            <i class="material-icons">error_outline</i>
                        </span>
                      <span>Database error</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">1 min</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">new_releases</i>
                        </span>
                      <span>The Death Star is built!</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">2 hours</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">mail_outline</i>
                        </span>
                      <span>You have 4 new mails.</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">5 days</span>
                    </span>
                </li>
                <li class="mdl-list__item list__item--border-top">
                    <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">ALL NOTIFICATIONS</button>
                </li>
            </ul>
  
            <button id="more"
                    class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
            </button>

            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp settings-dropdown"
                for="more">
                <li class="mdl-menu__item">
                    Settings
                </li>
                <a class="mdl-menu__item" href="https://github.com/CreativeIT/getmdl-dashboard/issues">
                    Support
                </a>
                <li class="mdl-menu__item" href="{{ route('logout') }}">
                    Logout
                </li>
            </ul>
        </div>
    </header>

@include('layout/Admin.navbar')
<main class="mdl-layout__content">

        <div class="mdl-grid mdl-grid--no-spacing dashboard">

            <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">
        
            <div class="mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
                    <div class="">
            @yield('konten')
            </div>
                    </div>
            </div>
        </div>

    </main>
</div>

    <!-- inject:js -->
    <script src="{{asset('/lite-master')}}/dist/js/d3.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/getmdl-select.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/material.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/nv.d3.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/layout/layout.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/scroll/scroll.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/widgets/charts/discreteBarChart.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/widgets/charts/linePlusBarChart.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/widgets/charts/stackedBarChart.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/widgets/employer-form/employer-form.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/widgets/line-chart/line-charts-nvd3.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/widgets/map/maps.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/widgets/table/table.min.js"></script>
    <script src="{{asset('/lite-master')}}/dist/js/widgets/todo/todo.min.js"></script>
    <!-- endinject -->

</body>
</html>
