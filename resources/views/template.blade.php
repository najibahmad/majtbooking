<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/umum/css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('/umum/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('/js/jquery.min.js') }}"></script>


  </head>
  <body>
    @include('navbar')

    @yield('main')
    <!--
    <div class="fotter">
    	 <div class="container">
    		 <h3>143 City Located Hotels World Wide</h3>
    		 <h4>"Hospitality, Quality & Good Locations. We only provide you with the best hotels" - John Deo</h4>
    		 <i class="man"></i>
    	 </div>
    </div>
  -->
    <!---->
    <div class="fotter-info">
    	  <div class="container">
    	      <div class="col-md-5 details">
    			 <div class="hotel-info">
    				 <h4>ABOUT THIS HOTEL</h4>
    				 <p>Suspendisse erat mi, tincidunt sit amet massa quis, commodo fermentum diam. Sed nec dui nec nunc tempor interdum.</p>
    				 <p>Ut vulputate augue urna, ut porta dolor imperdiet a. Vestibulum nec leo eu magna aliquam ornare.</p>
    			 </div>
    			 <div class="news">
    				 <h4>LATEST NEWS</h4>
    				 <h5>Grand Hotel Joins DeluxelHotels</h5>
    				 <a href="#">15 AUG</a>
    				 <h5>Happy Chirstmas To Everyone</h5>
    				 <a href="#">15 AUG</a>
    				 <h5>Best Places To Visit 2014</h5>
    				 <a href="#">15 AUG</a>
    				 <h5>Various Offers</h5>
    				 <a href="#">15 AUG</a>
    			 </div>
    				<div class="clearfix"></div>
    		 </div>
    		 <div class="col-md-7 details">
    			 <div class="join">
    				 <h4>JOIN DELUXEHOTELS</h4>
    				 <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus vestibulum blandit egestas.
    				 Nam id lectus vel orci luctus consectetur eget id elit. In tortor odio, pellentesque eu arcu sit amet, lacinia euismod nisi. Aliquam sodales tristique mauris ac fermentum.
    				 Donec vel varius ipsum. Pellentesque vitae mollis massa. </p>
    				 <p>There is no costs or whatsoever so sign up today!</p>
    				 <a href="#">READ MORE</a>
    			 </div>
    			 <div class="member">
    			 <h4>MEMBERS AREA</h4>
    			 <form>
    			 <p>Username</p>
    			 <input type="text" placeholder="" required/>
    			 <p>Password</p>
    			 <input type="password" placeholder="" required/>
    			 <input type="submit" value="LOGIN"/>
    			 </form>
    			 </div>
    			 <div class="clearfix"></div>
    		 </div>
    		 <div class="clearfix"></div>
    	  </div>
    	 <h6>Template by <a href="http://w3layouts.com/">W3layouts</h6>
    </div>



    @yield('script')


</body></html>
