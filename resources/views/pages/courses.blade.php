@extends('pages/include/app')


@section('content')
<section id="hero_in" class="courses">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Online courses</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<select name="orderby" class="selectbox">
							<option value="category">Category</option>
		
							</select>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->

		<div class="container margin_60_35">
            @foreach ($courses as $course)
            <div class="box_list wow">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure class="block-reveal">
                                <div class="block-horizzontal"></div>
                                <a href="course-detail.html"><img src="storage/cover_images/{{$course->cover_image}}" class="img-fluid" alt=""></a>
                            </figure>
                        </div>
                        <div class="col-lg-7">
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
                </div>
            @endforeach
			
		</div>
		<!-- /container -->
		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-help2"></i>
							<h4>Need Help? Contact us</h4>
							<p>Feel Free To contact us</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-wallet"></i>
							<h4>Payments and Refunds</h4>
							<p>Refunds can be made in certain cases</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#0" class="boxed_list">
							<i class="pe-7s-note2"></i>
							<h4>Quality Standards</h4>
							<p>GSHA Team is amazing at Teaching</p>
						</a>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
        <!-- /bg_color_1 -->
@endsection