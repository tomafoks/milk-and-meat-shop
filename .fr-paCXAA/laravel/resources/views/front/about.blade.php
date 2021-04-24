@extends('front/layout/layout')

@section('breadcrumb')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
	<div class="container">
		<ul>
			<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">На главную</a><span>|</span></li>
			<li>О нас</li>
		</ul>
	</div>
</div>
<!-- //products-breadcrumb -->
@endsection

@section('content')


<div class="w3l_banner_nav_right">
	<!-- about -->
	<div class="privacy about">
		<h3>О нас</h3>
		<p class="animi">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
			praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
			excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
			officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
			rerum facilis est et expedita distinctio.</p>
		<div class="agile_about_grids">
			<div class="col-md-6 agile_about_grid_right">
				<img src="images/31.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-6 agile_about_grid_left">
				<ol>
					<li>laborum et dolorum fuga</li>
					<li>corrupti quos dolores et quas</li>
					<li>est et expedita distinctio</li>
					<li>deleniti atque corrupti quos</li>
					<li>excepturi sint occaecati cupiditate</li>
					<li>accusamus et iusto odio</li>
				</ol>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //about -->
</div>
<div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- team -->
<div class="team">
	<div class="container">
		<h3>Meet Our Amazing Team</h3>
		<div class="agileits_team_grids">
			<div class="col-md-3 agileits_team_grid">
				<img src="images/32.jpg" alt=" " class="img-responsive" />
				<h4>Martin Paul</h4>
				<p>Manager</p>
				<ul class="agileits_social_icons agileits_social_icons_team">
					<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="col-md-3 agileits_team_grid">
				<img src="images/33.jpg" alt=" " class="img-responsive" />
				<h4>Michael Rick</h4>
				<p>Supervisor</p>
				<ul class="agileits_social_icons agileits_social_icons_team">
					<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="col-md-3 agileits_team_grid">
				<img src="images/34.jpg" alt=" " class="img-responsive" />
				<h4>Thomas Carl</h4>
				<p>Supervisor</p>
				<ul class="agileits_social_icons agileits_social_icons_team">
					<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="col-md-3 agileits_team_grid">
				<img src="images/35.jpg" alt=" " class="img-responsive" />
				<h4>Laura Lee</h4>
				<p>CEO</p>
				<ul class="agileits_social_icons agileits_social_icons_team">
					<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //team -->
<!-- testimonials -->
<div class="testimonials">
	<div class="container">
		<h3>Testimonials</h3>
		<div class="w3_testimonials_grids">
			<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
				<div class="wmuSliderWrapper">
					<article style="position: absolute; width: 100%; opacity: 0;">
						<div class="banner-wrap">
							<div class="col-md-6 w3_testimonials_grid">
								<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
									voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
									repellat.</p>
								<h4>Andrew Smith <span>Customer</span></h4>
							</div>
							<div class="col-md-6 w3_testimonials_grid">
								<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
									voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
									repellat.</p>
								<h4>Thomson Richard <span>Customer</span></h4>
							</div>
							<div class="clearfix"> </div>
						</div>
					</article>
					<article style="position: absolute; width: 100%; opacity: 0;">
						<div class="banner-wrap">
							<div class="col-md-6 w3_testimonials_grid">
								<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
									voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
									repellat.</p>
								<h4>Crisp Kale <span>Customer</span></h4>
							</div>
							<div class="col-md-6 w3_testimonials_grid">
								<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
									voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
									repellat.</p>
								<h4>John Paul <span>Customer</span></h4>
							</div>
							<div class="clearfix"> </div>
						</div>
					</article>
					<article style="position: absolute; width: 100%; opacity: 0;">
						<div class="banner-wrap">
							<div class="col-md-6 w3_testimonials_grid">
								<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
									voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
									repellat.</p>
								<h4>Rosy Carl <span>Customer</span></h4>
							</div>
							<div class="col-md-6 w3_testimonials_grid">
								<p><i class="fa fa-quote-right" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
									voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
									repellat.</p>
								<h4>Rockson Doe <span>Customer</span></h4>
							</div>
							<div class="clearfix"> </div>
						</div>
					</article>
				</div>
			</div>
			<script src="js/jquery.wmuSlider.js"></script>
			<script>
				$('.example1').wmuSlider();
			</script>
		</div>
	</div>
</div>
<!-- //testimonials -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 w3_footer_grid">
			<h3>information</h3>
			<ul class="w3_footer_grid_list">
				<li><a href="events.html">Events</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="products.html">Best Deals</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="short-codes.html">Short Codes</a></li>
			</ul>
		</div>
		<div class="col-md-3 w3_footer_grid">
			<h3>policy info</h3>
			<ul class="w3_footer_grid_list">
				<li><a href="faqs.html">FAQ</a></li>
				<li><a href="privacy.html">privacy policy</a></li>
				<li><a href="privacy.html">terms of use</a></li>
			</ul>
		</div>
		<div class="col-md-3 w3_footer_grid">
			<h3>what in stores</h3>
			<ul class="w3_footer_grid_list">
				<li><a href="pet.html">Pet Food</a></li>
				<li><a href="frozen.html">Frozen Snacks</a></li>
				<li><a href="kitchen.html">Kitchen</a></li>
				<li><a href="products.html">Branded Foods</a></li>
				<li><a href="household.html">Households</a></li>
			</ul>
		</div>
		<div class="col-md-3 w3_footer_grid">
			<h3>twitter posts</h3>
			<ul class="w3_footer_grid_list1">
				<li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="#">http://sd.ds/13jklf#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
				<li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="#">http://fd.uf/56hfg#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<div class="agile_footer_grids">
			<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
				<div class="w3_footer_grid_bottom">
					<h4>100% secure payments</h4>
					<img src="images/card.png" alt=" " class="img-responsive" />
				</div>
			</div>
			<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
				<div class="w3_footer_grid_bottom">
					<h5>connect with us</h5>
					<ul class="agileits_social_icons">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="wthree_footer_copy">
			<p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
</div>

@endsection