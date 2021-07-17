<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="TURBOSTAFF SERVICES is a sole proprietorship business that provides a full range of messenger services in Metro Manila and some provinces of Luzon, Visayas and Mindanao that focuses on providing professional,classified, high-quality service, customer satisfaction and reliable partner for all your needs. We offer economical service without compromising the quality of our service.">
	<meta property="og:title" content="TurboStaff Services Website">
	<meta property="og:image" content="{{ asset('img/icon.PNG') }}">
	<meta property="og:image:alt" content="Turbostaff Services Logo">
	<meta property="og:description" content="TURBOSTAFF SERVICES is a sole proprietorship business that provides a full range of messenger services in Metro Manila and some provinces of Luzon, Visayas and Mindanao that focuses on providing professional,classified, high-quality service, customer satisfaction and reliable partner for all your needs. We offer economical service without compromising the quality of our service.">
	<meta property="og:url" content="https://turbostaffservices.co">
	<meta property="og:site_name" content="TurboStaff Services">
	<meta property="og:type" content="website">
	<link rel="canonical" href="https://turbostaffservices.co">

	<!-- Tab Icon -->
	<link rel="icon" href="{{ asset('img/logo2.png') }}">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

	<title>TurboStaff Services</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-1 sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="{{ asset('img/logo2.png') }}" alt="TurboStaff logo"></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ms-auto">
					<a class="nav-link" aria-current="page" href="#who-we-are">WHO WE ARE</a>
					<a class="nav-link" href="#what-we-offer">WHAT WE OFFER</a>
					<a class="nav-link" href="#contact">CONTACT</a>
					<a class="nav-link contact text-accent" href="#contact-nums"><i class="fas fa-phone-alt me-2"></i>028-7980-1411</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="banner section d-flex flex-column pb-5">
		<h1 class="display-1 align-self-center mt-5 pt-5 text-primary text-center" style="text-shadow: 2px 2px 12px black;">WE PROVIDE HIGH-QUALITY SERVICE</h1>
		<a id="arrow" class="align-self-center mt-auto" href="#who-we-are"><i class="fas fa-arrow-down text-accent"></i></a>
	</div> 

	<div id="who-we-are" class="who-we-are section container-fluid bg-primary">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="container-fluid">
					<div class="row justify-content-center g-3">
						<div class="col-2 col-md-1 col-lg-2"><hr class="hr-title"></div>
						<div class="col-4 col-sm-3 col-md-2 col-lg-3 col-xl-2">
							<h6 class="text-center section-title">WHO WE ARE</h6>
						</div>
						<div class="col-2 col-md-1 col-lg-2"><hr class="hr-title"></div>
					</div>
				</div>
				<h1 class="text-center text-primary my-5">ECONOMICAL SERVICE WITHOUT COMPROMISE.</h1>
				<video width="100%" height="auto" poster="{{ asset('img/vid-poster.png') }}" controls>
					<source src="{{ asset('vid/turbo-vid.mp4') }}" type="video/mp4"/>
				</video>
				<p class="text-white mt-4">
					<strong>TURBOSTAFF SERVICES</strong> is a sole proprietorship business that provides a full range of messenger services in Metro Manila and some provinces of Luzon, Visayas, and Mindanao that focuses on providing professional, classified, high-quality service, customer satisfaction, and reliable partner for all your needs. We offer economical service without compromising the quality of our service.
				</p>
				<p class="text-white">We find ways to improve our ability to add value to our services. We search for every possible opportunity to reduce costs and increase productivity. We take great pride in being a customer-oriented organization, making sure that our customers are satisfied with the tasks we execute for them. Every client is treated not just as customers but as partners, with this approach it has led them to be the preferred vendor for their needs.</p>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container-md mission text-center">
			<div class="row justify-content-around mb-4 g-4">
				<div class="col-sm-4">
					<i class="fas fa-crosshairs text-secondary"></i>
					<h4 class="my-4 text-secondary">Mission</h4>
					<p class="text-dark">To become the most economical messenger service provider that is fast, efficient and reliable.</p>
				</div>
				<div class="col-sm-4">
					<i class="far fa-lightbulb text-secondary"></i>
					<h4 class="my-4 text-secondary">Vision</h4>
					<p class="text-dark">Our vision is to become the leading messenger service provider nationwide. To provide unrivaled courier services with the aim of providing high-quality standards that meets the changing nature of the industry.</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-sm-4">
					<i class="fas fa-medal text-secondary"></i>
					<h4 class="my-4 text-secondary">Core Values</h4>
					<p class="text-dark">We strive to provide great customer service. This includes listening to our clients' needs and taking responsibility. We are committed to becoming the best in the industry and we always strive for excellence.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="banner2">
		<div class="layer section d-flex align-items-center justify-content-center">
			<h1 class="text-primary" style="text-shadow: 2px 2px 10px black;">TURBOSTAFF IS ALWAYS TRUE TO SERVICE</h1>
		</div>
	</div>

	<div id="what-we-offer" class="what-we-offer section container-fluid bg-secondary">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-2 col-md-2 col-lg-2"><hr class="hr-title"></div>
						<div class="col-4 col-md-3 col-lg-4 col-xl-3 col-xxl-2">
							<h6 class="text-center section-title text-secondary">WHAT WE OFFER</h6>
						</div>
						<div class="col-2 col-md-2 col-lg-2"><hr class="hr-title"></div>
					</div>
				</div>
				<h1 class="text-center text-primary my-5">WE AIM TO EXCEED CLIENT'S EXPECTATIONS.</h1>
				<p class="text-center text-secondary">No matter what business you have, our team can do everything for you.</p>
			</div>
		</div>
		<div class="row offers mt-5 justify-content-center gy-5">
			<div class="col-sm-5 text-center px-5">
				<img src="{{ asset('img/sc1.png') }}" class="img-fluid" alt="Payment / Transactions">
				<h4 class="my-4 text-secondary">Transactions</h4>
				<p class="text-secondary">We transact for notary and permit submissions to FDA,BOQ, OMB and other Government Agencies.</p>
			</div>
			<div class="col-sm-5 text-center px-5">
				<img src="{{ asset('img/sc2.png') }}" class="img-fluid" alt="Printer">
				<h4 class="my-4 text-secondary">Printing</h4>
				<p class="text-secondary">For your documents, we print and photocopy for your site needs.</p>
			</div>
			<div class="col-sm-5 text-center px-5">
				<img src="{{ asset('img/briefcase.png') }}" class="img-fluid" alt="Briefcase">
				<h4 class="my-4 text-secondary">Insurance</h4>
				<p class="text-secondary">We guarantee optimum protection for your valuable items.</p>
			</div>
			<div class="col-sm-5 text-center px-5">
				<img src="{{ asset('img/fast-delivery.jpg') }}" class="img-fluid" alt="Fast Delivery Nationwide!">
				<h4 class="my-4 text-secondary">Nationwide</h4>
				<p class="text-secondary">We deliver to all major sites and hospitals in the Philippines.</p>
			</div>
		</div>
	</div>

	<img class="group" src="{{ asset('img/group-photo.jpg') }}" alt="Turbostaff employees group photo">

	<div id="contact" class="contact-us section container-fluid">
		<div class="row justify-content-center mb-4">
			<div class="col-lg-7">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-2 col-md-2 col-lg-2"><hr class="hr-title"></div>
						<div class="col-3 col-md-2 col-lg-4 col-xl-3 col-xxl-2">
							<h6 class="text-center section-title text-secondary">CONTACT US</h6>
						</div>
						<div class="col-2 col-md-2 col-lg-2"><hr class="hr-title"></div>
					</div>
				</div>
				<h1 class="text-center text-accent my-5">READY TO SEE WHAT TURBOSTAFF CAN DO?</h1>
				<p class="text-center text-secondary">Let us show you what our team of professionals can do for you and your business.</p>
			</div>
		</div>
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-md-6 p-5">
					<h2 id="contact-nums" class="text-secondary">Contact Us</h2>
					<p class="text-secondary">Your opinions are important to us. Whether it is a simple question or a valuable suggestion, we are here 24/7. You can call us by phone or email us directly.</p>
					<hr>
					<i class="fas fa-phone-alt"></i>
					<p class="d-inline ms-2">0917-962-2205</p><br>
					<i class="fas fa-phone-alt" style="color:white"></i>
					<p class="d-inline ms-2">0995-661-8000</p><br>
					<i class="fas fa-phone-alt" style="color:white"></i>
					<p class="d-inline ms-2">028-7980-1411</p><br>
					<i class="fas fa-envelope"></i>
					<p class="d-inline ms-2">turbostaff.ph@gmail.com</p><br>
					<i class="fas fa-envelope" style="color:white"></i>
					<p class="d-inline ms-2">book@turbostaffservices.com</p><br>
				</div>
				<div class="col-md-6 email p-4">
					<div class="alert alert-success"><button type="button" class="btn-close float-end"></button>Email sent successfully!</div>
					<div class="alert alert-danger"><button type="button" class="btn-close float-end"></button>An error occured while processing your request. Please try again later.</div>
					<h5 class="mb-3">EMAIL US</h5>
					<form>
						<div class="mb-3">
							<label for="name" class="form-label">Name<span style="color:red">*</span></label>
							<input type="text" class="form-control" name="name" id="name" required>
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Email<span style="color:red">*</span></label>
							<input type="email" class="form-control" name="email" id="email" required>
						</div>
						<div class="mb-3">
							<label for="message" class="form-label">Your Message<span style="color:red">*</span></label>
							<textarea class="form-control" name="message" id="message" rows="3" required></textarea>
						</div>
						<div class="d-grid"><button type="submit" class="btn btn-primary rounded-pill fw-bolder">SUBMIT</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- FontAwesome -->
	<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
	<script src="https://kit.fontawesome.com/34a54bc82b.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>