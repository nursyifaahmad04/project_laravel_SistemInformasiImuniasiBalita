@extends('layout/Admin.template')
@section('konten')
<section class="content">
                <!-- Weather widget-->
                        <div class="mdl-card__title" >
                            <h2 class="mdl-card__title-text" style="text-align:center" >SELAMAT DATANG DI DASHBOARD SIIB ADMINISTRATOR, &nbsp; <strong> {{ Auth::user()->name }}</strong></h2>
                        </div>
                        <div class="mdl-card__supporting-text mdl-card--expand">
                            <p class="weather-temperature">Silahkan gunakan aplikasi Sistem Informasi Imunisasi Balita ini dengan baik dan bijak admin {{ Auth::user()->name }} </p>

                            
                        
                </div>
               


</section>
@endsection