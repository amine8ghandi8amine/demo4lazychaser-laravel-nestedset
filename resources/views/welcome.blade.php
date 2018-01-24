@extends('layouts.app')



@section('content')
<!-- ____________________Featured Section ______________________________--> 
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E S<span class="carstxt">C A R S</span>&bullet;</h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow">
			<div class="col-lg-6 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="{{ asset('garage-template/image/featurporch.jpg') }}" alt="porsche">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>LOREM IPSUM</h1>
							<p>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt </p>
			 				<h2>Price &euro;</h2>
			 				<button id="btnRM" onclick="rmtxt()">READ MORE</button>
			 				<div id="readmore">
			 						<h1>Car Name</h1>
			 						<p>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br>
			 						</p>
			 						<button id="btnRL">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 costumcol colborder2">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
						<img src="{{ asset('garage-template/image/featurporch1.jpg') }}" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>LOREM IPSUM</h1>
							<p>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt </p>
			 				<h2>Price &euro;</h2>
			 				<button id="btnRM2">READ MORE</button>
			 				<div id="readmore2">
			 						<h1>Car Name</h1>
			 						<p>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br></p>
			 						<button id="btnRL2">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- ________________________LATEST CARS SECTION _______________________-->
<div class="latestcars">
	<h1 class="text-center">&bullet; LATEST   CARS &bullet;</h1>
	<ul class="nav nav-tabs navbar-left latest-navleft">
		<li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>
		<li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR">MOST RECENT </a></li>
		<li data-filter=".POPULAR" role="presentation"><a href="#mostpopular" class="prcBtnR">MOST POPULAR </a></li>
		<li  role="presentation"><a href="#" class="alphSort">ALPHABETICAL </a></li>
		<li data-filter=".HPRICE" role="presentation"><a href="#" class="prcBtnH">HIGHEST PRICE </a></li>
		<li data-filter=".LPRICE" role="presentation"><a href="#" class="prcBtnL">LOWEST  PRICE </a></li>
		<li id="hideonmobile">
	</ul>
</div>
<br>
<br>
<!-- ________________________Latest Cars Image Thumbnail________________-->
	<div class="grid">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="{{ asset('garage-template/image/car1.jpg') }}" alt="car1">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Rolls Royce</h3>
								<p>"Lorem ipsum dolor sit amet, consectetur,<br>
	 							sed do eiusmod tempor incididunt" </p>
	 							<h4 class="price"> 1000&euro;</h4>
	 							<button>READ MORE</button><br>
	 							<div class="wishtxt">
		 							<p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
		 							<p class="paragraph2">Compare <span class="icon"><img src="{{ asset('garage-template/image/compicon.png') }}" alt="compicon"></span></p>
		 						</div>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
				<div class="txthover">
					<img src="{{ asset('garage-template/image/car2.jpg') }}" alt="car2">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Renault</h3>
								<p>"Lorem ipsum dolor sit amet, consectetur,<br>
	 							sed do eiusmod tempor incididunt" </p>
	 							<h4 class="price">900 &euro;</h4>
	 							<button>READ MORE</button><br>
	 							<div class="wishtxt">
		 							<p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
		 							<p class="paragraph2">Compare <span class="icon"><img src="{{ asset('garage-template/image/compicon.png') }}" alt="compicon"></span></p>
		 						</div>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="{{ asset('garage-template/image/car3.jpg') }}" alt="car3">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Ford Mustang</h3>
								<p>"Lorem ipsum dolor sit amet, consectetur,<br>
	 							sed do eiusmod tempor incididunt" </p>
	 							<h4 class="price">3000 &euro;</h4>
	 							<button>READ MORE</button><br>
	 							<div class="wishtxt">
		 							<p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
		 							<p class="paragraph2">Compare <span class="icon"><img src="{{ asset('garage-template/image/compicon.png') }}" alt="compicon"></span></p>
		 						</div>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="{{ asset('garage-template/image/car4.jpg') }}" alt="car4">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Rover</h3>
								<p>"Lorem ipsum dolor sit amet, consectetur,<br>
	 							sed do eiusmod tempor incididunt" </p>
	 							<h4 class="price">1000 &euro;</h4>
	 							<button>READ MORE</button><br>
	 							<div class="wishtxt">
		 							<p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
		 							<p class="paragraph2">Compare <span class="icon"><img src="{{ asset('garage-template/image/compicon.png') }}" alt="compicon"></span></p>
		 						</div>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="{{ asset('garage-template/image/car5.jpg') }}" alt="car5">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Porche</h3>
								<p>"Lorem ipsum dolor sit amet, consectetur,<br>
	 							sed do eiusmod tempor incididunt" </p>
	 							<h4 class="price">1200 &euro;</h4>
	 							<button>READ MORE</button><br>
	 							<div class="wishtxt">
		 							<p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
		 							<p class="paragraph2">Compare <span class="icon"><img src="{{ asset('garage-template/image/compicon.png') }}" alt="compicon"></span></p>
		 						</div>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="{{ asset('garage-template/image/car6.jpg') }}" alt="car6">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Porche 911</h3>
								<p>"Lorem ipsum dolor sit amet, consectetur,<br>
	 							sed do eiusmod tempor incididunt" </p>
	 							<h4 class="price">4000 &euro;</h4>
	 							<button>READ MORE</button><br>
	 							<div class="wishtxt">
		 							<p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
		 							<p class="paragraph2">Compare <span class="icon"><img src="{{ asset('garage-template/image/compicon.png') }}" alt="compicon"></span></p>
		 						</div>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="{{ asset('garage-template/image/car7.jpg') }}" alt="car7">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Chevrolet SS</h3>
								<p>"Lorem ipsum dolor sit amet, consectetur,<br>
	 							sed do eiusmod tempor incididunt" </p>
	 							<h4 class="price">3000 &euro;</h4>
	 							<button>READ MORE</button><br>
	 							<div class="wishtxt">
		 							<p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
		 							<p class="paragraph2">Compare <span class="icon"><img src="{{ asset('garage-template/image/compicaon.png') }}" alt="compicon"></span></p>
		 						</div>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="txthover">
					<img src="{{ asset('garage-template/image/car8.jpg') }}" alt="car8">
						<div class="txtcontent">
							<div class="stars">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
							<div class="simpletxt">
								<h3 class="name">Meclaren</h3>
								<p>"Lorem ipsum dolor sit amet, consectetur,<br>
	 							sed do eiusmod tempor incididunt" </p>
	 							<h4 class="price">2500 &euro;</h4>
	 							<button>READ MORE</button><br>
	 							<div class="wishtxt">
		 							<p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
		 							<p class="paragraph2">Compare <span class="icon"><img src="{{ asset('garage-template/image/compicaon.png') }}" alt="compicon"></span></p>
		 						</div>
							</div>
							<div class="stars2">
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
								<div class="glyphicon glyphicon-star"></div>
							</div>
						</div>
				</div>	 
			</div>	
		</div>
	</div>
<!-- _______________________________News Letter ____________________-->
	<div class="newslettercontent">
		<div class="leftside">
			<img src="{{ asset('garage-template/image/border.png') }}" alt="border">
			<h1>NEWSLETTER</h1>
			<p>Subscribe to the COLLECTIONCARS mailing list to <br>
				receive updates on new arrivals, special offers <br>
				and other discount information.</p>
		</div>
		<div class="rightside">
			<img class="newsimage" src="{{ asset('garage-template/image/newsletter.jpg') }}" alt="newsletter">
			<input type="text" class="form-control" id="subemail" placeholder="EMAIL">
			<button>SUBSCRIBE</button>
		</div>
	</div>
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="{{ asset('garage-template/image/collectionlogo1.png') }}" alt="logo1"><span class="dotlogo">&bullet;;</span>
		</div>
		<ul class="nav nav-tabs bottomlinks">
			<li role="presentation" ><a href="#/" role="button">ABOUT US</a></li>
			<li role="presentation"><a href="#/">CATEGORIES</a></li>
			<li role="presentation"><a href="#/">PREORDERS</a></li>
			<li role="presentation"><a href="#/">CONTACT US</a></li>
			<li role="presentation"><a href="#/">RECEIVE OUR NEWSLETTER</a></li>
		</ul>
		<p>"Lorem ipsum dolor sit amet, consectetur,  sed do eiusmod tempor incididunt <br>
			eiusmod tempor incididunt </p>
		 <img src="{{ asset('garage-template/image/line.png') }}" alt="line"> <br>
		 <div class="bottomsocial">
		 	<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
			<div class="footer">
				<div class="copyright">
				  &copy; Copy right 2016 | <a href="#">Privacy </a>| <a href="#">Policy</a>
				</div>
				<div class="atisda">
					 Designed by <a href="http://www.webdomus.net/">Web Domus Italia - Web Agency </a> 
				</div>
			</div>
	</div>
</div>


@stop