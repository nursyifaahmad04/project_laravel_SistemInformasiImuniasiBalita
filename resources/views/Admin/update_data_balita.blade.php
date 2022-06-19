@extends('layout/Admin.template')
@section('konten')
<section class="content">

            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--6-col-phone">
                <div class="mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h1 class="mdl-card__title-text">Edit Data Balita Imunisasi</h1>
                    </div>
                    <div class="mdl-card__supporting-text no-padding">
                        <table class="mdl-data-table mdl-js-data-table bordered-table">
                            <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">No</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Nama Balita</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Nama Orang Tua</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Telepon</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Jenis Kelamin</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Tanggal Lahir</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Alamat</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Foto</th>
                                <th class="mdl-data-table__cell--non-numeric" style="text-align:center">Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                            <?php $no = 1; ?>
                                 @foreach ($balita as $data)
                                    <td class="mdl-data-table__cell--non-numeric">{{$no++}}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $data->nm_balita }}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $data->nm_orangtua }}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $data->nohp_orangtua }}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $data->jenis_kelamin }}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $data->tanggal_lahir }}</td>
                                    <td class="mdl-data-table__cell--non-numeric">{{ $data->alamat }}</td>
                                    <td class="mdl-data-table__cell--non-numeric"><img src="{{url('foto/'.$data->foto)}}" width="100px"></td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect button--colored-teal" 
                                        onclick="window.location.href='/balita/edit/{{ $data->id_balita }}'" >
                                         <i class="material-icons" ">edit</i>
                                        </button>
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