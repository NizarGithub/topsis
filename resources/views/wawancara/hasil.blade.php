@extends('template.backend')
<!-- awal section content -->
@section('content')
          
          <article id="content" class="10u 12u(narrower)">
              <header class="image-wrapper first 12u(narrower)">
                <h2 class="image">Hasil Wawancara (Akhir)</h2>  
                  <a href="{!! route('wawancara.sbs.alternatif',$id_lowongan) !!}" class='image pull-right button small 4(narrower)' id="noprint">Step By Step</a>
                <a href="{!! route('lowongan.show',$id_lowongan) !!}" class="image pull-right button small 4(narrower)" id="noprint">Kembali</a>
                <a class="image pull-right button small 4(narrower)" href="#" onclick="window.print()" id="noprint"><i class="icon-g-print"></i>Cetak</a>

              </header>

          <?php 
          $timezone = date_default_timezone_get();
          $peringkat =1; ?>
              <table class='table default 12u 12u(mobile)'>
                <thead>
                  <tr>
                    <td>Peringkat</td>
                    <td>No Peserta</td>
                    <td>Nama</td>
                    <td>Tanggal Lahir</td>
                    <td>Nilai</td>
                  </tr>
                </thead><tbody>
              @foreach ($lulus as $l) 
                <tr>
                  <td>
                    {!! $peringkat !!}
                  </td>
                  <td>
                    {!! $l->lamaran->nomor_pelamar !!}
                  </td>
                  <td>
                    {!! $l->lamaran->pelamar->nama !!}
                  </td>
                  <td>
                    {!! $l->lamaran->pelamar->tanggal_lahir !!}
                  </td>
                  <td>
                    {!! $l->nilai_topsis !!}
                  </td>
                </tr>
                <?php $peringkat++; ?>
              @endforeach
              </tbody>
            </table>

          <div class="controls" style="float:right;" id="tertanda">
                <br><br>
                   Palembang,  {!! date('d-m-Y',strtotime($timezone)) !!}
                   <p>Kepala Wilayah,</p>
                   <br><br><br>
                   <p>Okven Ronaldo, ST</p>
          </div>
@stop



