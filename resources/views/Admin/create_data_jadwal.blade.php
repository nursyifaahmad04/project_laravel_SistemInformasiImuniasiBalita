@extends('layout/Admin.template')
@section('konten')
<section class="content">
<div class="mdl-grid mdl-cell mdl-cell--7-col-desktop mdl-cell--7-col-tablet mdl-cell--4-col-phone mdl-cell--top">

<div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
    <div class="mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
            <h5 class="mdl-card__title-text text-color--white">Masukkan Data Imunisasi Jadwal</h5>
        </div>
        <div class="mdl-card__supporting-text">
            <form class="form form--basic" action="/jadwal" method="post">
            @csrf
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone form__article">
                        <div class="mdl-textfield mdl-js-textfield full-size">
                        <h5 class="mdl-card__title-text text-color--white">Pilih Nama Balita</h5>
                            <select class="mdl-textfield mdl-js-textfield full-size" id="position-option" name="id_balita">
                                 @foreach ($balita as $position)
                                  <option value="{{ $position->id_balita }}">{{ $position->nm_balita }}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield full-size">
                        <h5 class="mdl-card__title-text text-color--white">Pilih Nama Orangtua</h5>
                            <select class="mdl-textfield mdl-js-textfield full-size" id="position-option" name="nm_orangtua">
                                 @foreach ($balita as $position)
                                  <option value="{{ $position->id_balita }}">{{ $position->nm_orangtua }}</option>
                                 @endforeach
                            </select>
                        </div>
                           
                        <div class="mdl-textfield mdl-js-textfield full-size">
                        <h5 class="mdl-card__title-text text-color--white">Masukkan Tanggal Jadwal</h5>
                            <input class="mdl-textfield__input" type="date" id="tanggal" name="tanggal">
                            <label class="mdl-textfield__label" for="tanggal"></label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield full-size">
                        <h5 class="mdl-card__title-text text-color--white">Masukkan Jam</h5>
                            <input class="mdl-textfield__input" type="time" id="jam" name="jam">
                            <label class="mdl-textfield__label" for="jam"></label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield full-size">
                        <h5 class="mdl-card__title-text text-color--white">Masukkan Tahun</h5>
                            <input class="mdl-textfield__input" type="text" id="tahun" name="tahun">
                            <label class="mdl-textfield__label" for="tahun"></label>
                        </div>
                        <li class="mdl-list__item">
                                <button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                                    Reset Data
                                </button>
                                &nbsp;&nbsp;
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-green">
                                    Simpan Data
                                </button>
                            </li>
                    </div>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection