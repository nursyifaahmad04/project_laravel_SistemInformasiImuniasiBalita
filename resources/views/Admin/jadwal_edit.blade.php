@extends('layout/Admin.template')
@section('konten')
<section class="content">
<div class="mdl-grid mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone mdl-cell--top" >

<div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
    <div class="mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
            <h5 class="mdl-card__title-text text-color--white">Edit Jadwal Imunisasi Balita</h5>
        </div>
        <div class="mdl-card__supporting-text">
        @foreach ($balita as $data)
            <form class="form form--basic" action="/jadwal/update" method="post">
            @csrf
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone form__article">
                        <div class="mdl-textfield mdl-js-textfield full-size">
                            <input type="hidden" name="id" value="{{$data->id_jadwal}}">
                            <h3 class="mdl-card__title-text text-color--white">Nama Balita</h3>
                            <input class="mdl-textfield__input" type="text" id="id_balita" name="id_balita" value="{{$data->id_balita}}">
                            <label class="mdl-textfield__label" for="nm_balita"></label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield full-size">
                        <h3 class="mdl-card__title-text text-color--white">Nama Orangtua</h3>
                            <input class="mdl-textfield__input" type="text" id="nm_orangtua" name="nm_orangtua" value="{{$data->nm_orangtua}}">
                            <label class="mdl-textfield__label" for="nm_orangtua"></label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield full-size">
                        <h3 class="mdl-card__title-text text-color--white">Tanggal Imunisasi</h3>
                            <input class="mdl-textfield__input" type="date" id="tanggal" name="tanggal" value="{{$data->tanggal}}">
                            <label class="mdl-textfield__label" for="tanggal"></label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield full-size">
                        <h3 class="mdl-card__title-text text-color--white">Jam Imunisasi</h3>
                            <input class="mdl-textfield__input" type="time" id="jam" name="jam" value="{{$data->jam}}">
                            <label class="mdl-textfield__label" for="jam"></label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield full-size">
                        <h3 class="mdl-card__title-text text-color--white">Tahun Imunisasi</h3>
                            <input class="mdl-textfield__input" type="text" id="tahun" name="tahun" value="{{$data->tahun}}">
                            <label class="mdl-textfield__label" for="tahun"></label>
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
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
</section>
@endsection