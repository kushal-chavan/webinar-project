@extends('pages/include/app')
@section('content')

		<div id="full-slider-wrapper">
			<div id="layerslider" style="width:100%;height:750px;">
				<!-- first slide -->
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
					<img src="web/img/s3.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">GSHATECH <strong>Excellence</strong> in teaching</h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						Online Training | SAP Training | Certificate
					</p>
					<a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='{{url('/courses')}}'>Read more</a>
				</div>
				<!-- second slide -->
				<div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
					<img src="web/img/s1.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><strong>Focus</strong> on improvement </h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						Online Training | SAP Training | Certificate
					</p>
					<a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='{{url('/courses')}}'>Read more</a>
				</div>
				<!-- third slide -->
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
					<img src="web/img/s2.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top:47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><strong>Friendly</strong> student community</h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						Online Training | SAP Training | Certificate
					</p>
					<a class="ls-l btn_1 rounded" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='{{url('/courses')}}'>Explore</a>
				</div>
			</div>
		</div>
		<!-- End layerslider -->

		<div class="features clearfix">
			<div class="container">
				<ul>
					<li><i class="pe-7s-study"></i>
						<h4>+200 courses</h4><span>Explore a variety of fresh topics</span>
					</li>
					<li><i class="pe-7s-cup"></i>
						<h4>Expert teachers</h4><span>Find the right instructor for you</span>
					</li>
					<li><i class="pe-7s-target"></i>
						<h4>Focus on target</h4><span>Increase your personal expertise</span>
					</li>
				</ul>
			</div>
		</div>
		<!-- /features -->

		<div class="container-fluid margin_120_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>GshaTech Popular Courses</h2>
				<p>We focus on your success</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				@foreach ($courses as $course)
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="#0">
								<div class="preview">
								</div><img src="storage/cover_images/{{$course->cover_image}}" class="img-fluid" alt="{{$course->name}}"></a>
							</figure>
						<div class="wrapper">
							<small>{{$course->category}}</small>
							<h3>{{$course->name}}</h3>
							<p>{{$course->description}}</p>
							
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> {{$course->time}}</li>
							<li>
							<form method="POST" action={{ action('EnrollController@enroll', [$course->id]) }}>
									@csrf
									<button class="enroll_btn" type="submit">Enroll Now</button>
								</form>
							</li>
						</ul>
					</div>
				</div>
				@endforeach
			</div>
			<!-- /carousel -->
			<div class="container">
				<p class="btn_home_align"><a href="{{url('/courses')}}" class="btn_1 rounded">View all courses</a></p>
			</div>
			<!-- /container -->
			<hr>
		</div>
		<!-- /container -->

		<div class="container margin_30_95">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Categories</h2>
				<p>Checkout our courses.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="web/img/sap.png" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>15 Programmes</small>
								<h3>SAP Training</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="web/img/ms.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Microsoft</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="web/img/db.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Database</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="web/img/ai.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Artificial Intelligence</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="web/img/aws.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Servers Management</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="web/img/py.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Programing Languages</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

		{{-- <div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>News and Events</h2>
					<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="http://via.placeholder.com/500x333/ccc/fff/news_home_1.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Mark Twain</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Pri oportere scribentur eu</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="http://via.placeholder.com/500x333/ccc/fff/news_home_2.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Jhon Doe</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Duo eius postea suscipit ad</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="http://via.placeholder.com/500x333/ccc/fff/news_home_3.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Luca Robinson</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Elitr mandamus cu has</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="http://via.placeholder.com/500x333/ccc/fff/news_home_4.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Paula Rodrigez</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Id est adhuc ignota delenit</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
				</div>
				<!-- /row -->
				<p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 --> --}}

		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>24 x 7 Support Team</h3>
							<p>
									All our training courses are designed to meet your training needs. Our training classes are delivered by
									SAP Certified Consultants in their various domains. We offer 24/7 support to all our clients.
							</p>
							<a href="{{url('/about')}}" class="btn_1 rounded">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection