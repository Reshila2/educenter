<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Team Section Using HTML5 , CSS3 , Bootstrap 4</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:500,700&display=swap" rel="stylesheet">
</head>

<body>

	<section class="section-team">
		<div class="container">
			<!-- Start Header Section -->
			<div class="row justify-content-center text-center">
				<div class="col-md-8 col-lg-6">
					<div class="header-section">
					
							<h3 class=>Let's meet with our team members</h3>
					</div>
				</div>
			</div>
			<!-- / End Header Section -->
			<div class="row">
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="https://i.ibb.co/G2CBWvb/person1.jpg" alt="">
							<span class="icon">
								<i class="fab fa-html5"></i>
							</span>
						</div>
						<div class="person-info">
							<h3 class="full-name">John Doe</h3>
							<span class="speciality">Web Developer</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="https://i.ibb.co/nbpNr4r/person2.jpg" alt="">
							<span class="icon">
								<i class="fab fa-wordpress-simple"></i>
							</span>
						</div>
						<div class="person-info">
							<h3 class="full-name">Robert Smith</h3>
							<span class="speciality">WordPress Developer</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="https://i.ibb.co/25zdRMr/person3.jpg" alt="">
							<span class="icon">
								<i class="fab fa-angular"></i>
							</span>
						</div>
						<div class="person-info">
							<h3 class="full-name">John Doe</h3>
							<span class="speciality">Angular Developer</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
				<!-- Start Single Person -->
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="single-person">
						<div class="person-image">
							<img src="https://i.ibb.co/w0ynr2Q/person4.jpg" alt="">
							<span class="icon">
								<i class="fab fa-js"></i>
							</span>
						</div>
						<div class="person-info">
							<h3 class="full-name">John Smith</h3>
							<span class="speciality">Javascript Developer</span>
						</div>
					</div>
				</div>
				<!-- / End Single Person -->
			</div>
		</div>
	</section>
<style>
p,a,h1,h2,h3,h4 {
	margin: 0;
	padding: 0;
}

.section-team {
	font-family: "Poppins", sans-serif;
	padding: 80px 0;
}

.section-team .header-section {
	margin-bottom: 50px;
}

.section-team .header-section .small-title {
    margin-bottom: 25px;
	font-size: 16px;
    font-weight: 500;
    color: #3e64ff;
}

.section-team .header-section .title {
    font-weight: 700;
    font-size: 45px;
}

.section-team .single-person {
	margin-top: 30px;
	padding: 30px;
	background-color: #f6f9ff;
	border-radius: 5px;
}

.section-team .single-person:hover {
	background: linear-gradient(to right, #016cec, #00b5f7);
}

.section-team .single-person .person-image {
    position: relative;
    margin-bottom: 50px;
    border-radius: 50%;
    border: 4px dashed transparent;
    transition: padding .3s;
}

.section-team .single-person:hover .person-image {
	padding: 12px;
    border: 4px dashed #fff;
}

.section-team .single-person .person-image img {
	width: 100%;
    border-radius: 50%;
}

.section-team .single-person .person-image .icon {
	position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%,50%);
    display: inline-block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    background: linear-gradient(to right, #016cec, #00b5f7);
    color: #fff;
    border-radius: 50%;
    font-size: 24px;
}

.section-team .single-person:hover .person-image .icon {
	background: none;
	background-color: #fff;
	color: #016cec;
}

.section-team .single-person .person-info .full-name {
	margin-bottom: 10px;
	font-size: 28px;
    font-weight: 700;
}

.section-team .single-person .person-info .speciality {
    text-transform: uppercase;
    font-size: 14px;
    color: #016cec;
}

.section-team .single-person:hover .full-name,
.section-team .single-person:hover .speciality {
	color: #fff;
}</style>
</body>
</html>