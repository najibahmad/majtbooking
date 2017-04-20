@extends('template')

@section('main')

<div class="online_reservation">
		   <div class="b_room">
			  <div class="booking_room">
				  <div class="reservation">

            {!! Form::open(['url' => 'search', 'class' => 'form-horizontal']) !!}
					  <ul>
						 <li  class="span1_of_1 left">
							 <h5>Tanggal Acara</h5>
							 <div class="book_date">

								 <input class="date" id="datepicker" name="tgl_sewa" type="text" value="2/08/2013" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}">

							 </div>
						 </li>

						 <li class="span1_of_1">
							 <h5>Gedung</h5>
							 <!----------start section_room----------->
							 <div class="section_room">
							      <select id="building_id" name="building_id" onchange="change_country(this.value)" class="frm-field required">
                    <option value="0">Semua</option>
                    <option value="1">Convention Hall</option>
										<option value="2">Library Hall</option>
										<option value="3">Ruang Utama</option>
										<option value="4">Hall Gedung II</option>
							      </select>
							 </div>
						 </li>
             <li class="span1_of_1">
							 <h5>Waktu</h5>
							 <!----------start section_room----------->
							 <div class="section_room">
							      <select id="waktu" name="waktu" onchange="change_country(this.value)" class="frm-field required">
                    <option value="0">Semua</option>
										<option value="pagi">Pagi</option>
										<option value="sore">Sore</option>
							      </select>
							 </div>
						 </li>
						 <li class="span1_of_3">
								<div class="date_btn">

										<input type="submit" value="Cek Jadwal" />

								</div>
						 </li>
						 <div class="clearfix"></div>
					 </ul>
           {!! Form::close() !!}
				 </div>
			  </div>
				<div class="clearfix"></div>
		  </div>
	  </div>
</div>
<!---->
<br>
<div class="package text-center">
	 <div class="container">
		 <h3>Fasilitas</h3>
		 <p>Sed euismod sem id consequat rutrum. Ut convallis lorem a orci mollis, eu vulputate libero aliquet. Praesent egestas nisi sed purus tincidunt faucibus. Aliquam lobortis orci lacus, sed faucibus augue dapibus vitae. Ut vitae mi sapien. Phasellus a eros justo.
		 Curabitur odio massa, tincidunt nec nibh sit amet</p>
		<!-- requried-jsfiles-for owl -->

			<!-- //requried-jsfiles-for owl -->
		  <div id="owl-demo" class="owl-carousel">
			  <div class="item text-center image-grid">
					<ul>
					 <li><img src="umum/images/1.jpg" alt=""></li>
					 <li><img src="umum/images/2.jpg" alt=""></li>
					 <li><img src="umum/images/3.jpg" alt=""></li>
					 </ul>
			  </div>
			  <div class="item text-center image-grid">
					<ul>
					<li> <img src="umum/images/3.jpg" alt=""></li>
					 <li><img src="umum/images/4.jpg" alt=""></li>
					 <li><img src="umum/images/5.jpg" alt=""></li>
					 </ul>
			  </div>
			  <div class="item text-center image-grid">
					<ul>
					<li> <img src="umum/images/6.jpg" alt=""></li>
					 <li><img src="umum/images/2.jpg" alt=""></li>
					 <li><img src="umum/images/8.jpg" alt=""></li>
					 </ul>
			  </div>
		  </div>
	 </div>
</div>
<!---->
<!---->
<div class="rooms text-center">
	 <div class="container">
		 <h3>Our Room Types</h3>
		 <div class="room-grids">
			 <div class="col-md-4 room-sec">
				 <img src="umum/images/pic1.jpg" alt=""/>
				 <h4>Standard Double Room</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.</p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="col-md-4 room-sec">
				 <img src="umum/images/pic2.jpg" alt=""/>
				 <h4>Supperior Double Room</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.</p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="col-md-4 room-sec">
				 <img src="umum/images/pic3.jpg" alt=""/>
				 <h4>Family Room</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.</p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="clearfix"></div>
			 <div class="col-md-4 room-sec">
				 <img src="umum/images/pic4.jpg" alt=""/>
				 <h4>Standard Single Room</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.</p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="col-md-4 room-sec">
				 <img src="umum/images/pic5.jpg" alt=""/>
				 <h4>Supperior Single Room</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.</p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="col-md-4 room-sec">
				 <img src="umum/images/pic6.jpg" alt=""/>
				 <h4>VIP Room</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.</p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
@stop

@section('script')

<link rel="stylesheet" href="{{ asset('/umum/css/jquery-ui.css') }}" />
<script src="{{ asset('/umum/js/jquery-ui.js') }}"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="{{ asset('/umum/css/JFGrid.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('/umum/css/JFFormStyle-1.css') }}" />
<script type="text/javascript" src="{{ asset('/umum/js/JFCore.js') }}"></script>
<script type="text/javascript" src="{{ asset('/umum/js/JFForms.js') }}"></script>
<!-- Set here the key for your domain in order to hide the watermark on the web server -->
<script type="text/javascript">
	(function() {
		JC.init({
			domainKey: ''
		});
	})();
</script>

<link href="{{ asset('/umum/css/owl.carousel.css') }}" rel="stylesheet">
          <script src="{{ asset('/umum/js/owl.carousel.js') }}"></script>
              <script>
          $(document).ready(function() {
            $("#owl-demo").owlCarousel({
              items : 1,
              lazyLoad : true,
              autoPlay : true,
              navigation : true,
              navigationText :  false,
              pagination : false,
            });
          });
          </script>

@stop
