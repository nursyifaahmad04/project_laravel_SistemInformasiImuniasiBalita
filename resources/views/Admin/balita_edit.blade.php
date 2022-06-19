@extends('layout/Admin.template')
@section('konten')
<section class="content">
<div class="mdl-grid mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

<div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
    <div class="mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
            <h5 class="mdl-card__title-text text-color--white">Edit Data Imunisasi Balita</h5>
        </div>
        <div class="mdl-card__supporting-text">
        @foreach ($balita as $data)
            <form class="form form--basic" action="/balita/update" method="post">
            @csrf
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone form__article">
                        <div class="mdl-textfield mdl-js-textfield full-size">
                            <input type="hidden" name="id" value="{{$data->id_balita}}">
                            <input class="mdl-textfield__input" type="text" id="nm_balita" name="nm_balita" value="{{$data->nm_balita}}">
                            <label class="mdl-textfield__label" for="nm_balita"></label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield full-size">
                            <input class="mdl-textfield__input" type="text" id="nm_orangtua" name="nm_orangtua" value="{{$data->nm_orangtua}}">
                            <label class="mdl-textfield__label" for="nm_orangtua"></label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield full-size">
                            <input class="mdl-textfield__input" type="text" id="nohp_orangtua" name="nohp_orangtua" value="{{$data->nohp_orangtua}}">
                            <label class="mdl-textfield__label" for="nohp_orangtua"></label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield full-size">
                            <input class="mdl-textfield__input" type="text" id="foto" name="foto" value="{{$data->foto}}">
                            <label class="mdl-textfield__label" for="foto"></label>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone form__article">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                            <input class="mdl-textfield__input" type="text" id="jenis_kelamin" name="jenis_kelamin" value="{{$data->jenis_kelamin}}">
                            <label class="mdl-textfield__label" for="jenis_kelamin"></label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                            <input class="mdl-textfield__input" type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                            <label class="mdl-textfield__label" for="tanggal_lahir"></label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                            <input class="mdl-textfield__input" type="text" id="alamat" name="alamat" value="{{$data->alamat}}">
                            <label class="mdl-textfield__label" for="alamat"></label>
                        </div>
                        <li class="mdl-list__item">
                                <button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                                    Reset Data
                                </button>
                                &nbsp;&nbsp;
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-green">
                                    Update Data
                                </button>
                            </li>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
</section>
@endsection