@extends('template')

@section('main')
<div class="contact-bg2">
	 <div class="container">
		 <div class="booking">
			 <h3>Formulir Pemesanan</h3>
			 <div class="col-md-8 booking-form">
				 {!! Form::open(['url' => 'booking', 'class' => 'form-horizontal']) !!}
				 <h5>NAME</h5>
         @if ($errors->has('nama'))
                  <span class="help-block">{{ $errors->first('nama') }}</span>
          @endif
				 {!! Form::text('nama', null, ['class' => 'form-control']) !!}

				 <h5>NOMOR HANDPHONE</h5>
         @if ($errors->has('hp'))
                  <span class="help-block">{{ $errors->first('hp') }}</span>
          @endif
				 {!! Form::text('hp', null, ['class' => 'form-control']) !!}

         <h5>NOMOR TELEPON RUMAH</h5>
         @if ($errors->has('tlp'))
                  <span class="help-block">{{ $errors->first('tlp') }}</span>
          @endif
				 {!! Form::text('tlp', null, ['class' => 'form-control']) !!}

         <h5>ALAMAT</h5>
         @if ($errors->has('alamat'))
                  <span class="help-block">{{ $errors->first('alamat') }}</span>
          @endif
				 {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
				 <h5>TANGGAL</h5>
				 <input name="tgl_sewa" type="text" value="{{ $tgl_sewa_date }}" class="time" readonly="">
				 <h5 class="mem">WAKTU</h5>
				 <input name="waktu" type="text" value="{{ $waktu }}" class="time" readonly="">
         <h5 class="mem">GEDUNG</h5>
				 <input type="text" value="{{ $building->nama }}" class="time" readonly="">
         <input name="building_id" type="hidden" value="{{ $building->id }}" class="time" readonly="">

         <h5 class="mem">HARGA SEWA</h5>
         <?php
            if($waktu == "Pagi"){
              $harga = $building->harga_pagi;
            }
            else{
              $harga = $building->harga_sore;
            }
         ?>
				 <input name="harga" type="text" value="{{ $harga }}" class="time" readonly="">

				 <input type="submit" value="Submit">
				 <input type="reset" value="Reset">
				 {!! Form::close() !!}
			 </div>
			 <div class="col-md-4 booking-news">
				 <h4>PERHATIAN</h4>
				 <div class="LatestNews">

           <blockquote class="blockquote">
          <p class="mb-0">
            <br>
            Setelah melakukan input data pemesanan, silahkan hubungi nomor telepon <mark>085741214441</mark> untuk konfirmasi pemesanan.
            <br>
            Pemesanan akan secara otomatis dibatalkan jika dalam waktu <mark>4 jam</mark> setelah input data pemesanan tidak melakukan konfirmasi ke nomor tersebut.
          </p>
          </blockquote>
				 </div>

				<div class="clearfix"> </div>

			 </div>
		 </div>
	 </div>
@endsection

@section('script')

@endsection
