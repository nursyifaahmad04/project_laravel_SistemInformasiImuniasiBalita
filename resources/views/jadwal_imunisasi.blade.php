@extends('layout.template')
@section('konten')
<section class="content">

            <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--6-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">Jadwal Imunisasi</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table bordered-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">No</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Nama Balita</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Nama Orangtua</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Tanggal Imunisasi</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Jam</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Tahun</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                            <?php $no = 1; ?>
                                 @foreach ($data as $balita)
                                    <td class="mdl-data-table__cell--non-numeric">{{$no++}}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $balita->nm_balita }}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $balita->nm_orangtua }}</td>
                                    <td class="mdl-data-table__cell--non-numeric">Minggu, {{ $balita->tanggal }}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $balita->jam }} WIB</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $balita->tahun }}</td>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

</section>
@endsection