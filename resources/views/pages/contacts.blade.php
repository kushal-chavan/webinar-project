@extends('pages/include/app')
@section('content')
		<section id="hero_in" class="contacts">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Contact Us</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		<div class="contact_info">
			<div class="container">
				<ul class="clearfix">
					<li>
						<i class="pe-7s-map-marker"></i>
						<h4>Address</h4>
						<span>#317, Annapurna Blcok Aditya Enclave Ameerpet Hyderabad-500016, india</span>
					</li>
					<li>
						<i class="pe-7s-mail-open-file"></i>
						<h4>Email address</h4>
						<span>info@gshatech.com</span>

					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4>Contacts info</h4>
						<span>+91 9885054740<br><small>24/7 available</small></span>
					</li>
				</ul>
			</div>
		</div>
		<!--/contact_info-->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="row justify-content-between">
					<div class="col-lg-5">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.739253659921!2d78.43677081537082!3d17.
							424296606324717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb972d3b398717%3A0x18a32df
							3e2223b95!2sAditya%20Enclave%2C%20Green%20Valley%2C%20Banjara%20Hills%2C%20Hyderabad%2C%20Tela
							ngana%20500034!5e0!3m2!1sen!2sin!4v1567350131887!5m2!1sen!2sin"
							 width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						<!-- /map -->
					</div>
					<div class="col-lg-6">
						<h4>Send a message</h4>
						<p>Feel free to contact us</p>
						<form method="post" action="{{ action('PagesController@postcontact') }}" autocomplete="off">
							@csrf
							<div class="row">
								<div class="col-md-12">
									<span class="input">
										<input class="input_field" type="text" name="name">
										<label class="input_label">
											<span class="input__label-content">Your Name</span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="email"  name="email">
										<label class="input_label">
											<span class="input__label-content">Your email</span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" name="phone">
										<label class="input_label">
											<span class="input__label-content">Your telephone</span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<span class="input">
									<textarea class="input_field" name="message" style="height:150px;"></textarea>
									<label class="input_label">
										<span class="input__label-content">Your message</span>
									</label>
							</span>
							<input type="submit" name="submit" value="Submit" class="btn_1 rounded">
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
@endsection