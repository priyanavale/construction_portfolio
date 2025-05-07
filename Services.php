<!DOCTYPE html>
<html lang="en"> <!-- Added lang="en" for language declaration -->
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JANHVI BUILDICON</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="stylesheet" type="text/css" href="Services.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
<main>  
<header class="menu">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-12 shadow bg-dark">
        <div class="row">
          <div class="col-8 col-sm-4 col-md-5 col-lg-5 col-xl-5 header_area1">
            <div class="row">
              <div class="col-3">
                <img src="janavi_logo.jpeg" class="img-fluid rounded-pill mt-2" alt="Logo"> <!-- Added alt attribute -->
              </div>
              <div class="col-9">
                <h6 class="p-3 mt-3 ms-0 text-white">Building with vision, quality, and pride.</h6> 
              </div>
            </div>
          </div>
          <div class="col-4 col-sm-8 col-md-7 col-lg-7 col-xl-7">
            <nav class="navbar navbar-expand-lg bg-dark mt-3 fw-bold">
              <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse navoverlap" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 change">
                  <li class="nav-item ms-5 hover_change1">
                    <a class="nav-link active text-success" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item ms-sm-2 ms-md-4 hover_change1">
                    <a class="nav-link text-white" href="Services.php">Services</a>
                  </li>
                  <li class="nav-item ms-sm-2 ms-md-3 hover_change1">
                    <a class="nav-link text-white" href="About.php">About</a>
                  </li>
                  <li class="nav-item ms-sm-2 ms-md-3 hover_change1">
                    <a class="nav-link text-white" href="project.php">Project</a>
                  </li>
                  <li class="nav-item ms-sm-2 ms-md-3 hover_change1">
                    <a class="nav-link text-white" href="Team.php">Team</a>
                  </li>
                  <li class="nav-item ms-sm-2 ms-md-3 hover_change1">
                    <a class="nav-link text-white" href="Career.php">Career</a>
                  </li>
                  <li class="nav-item ms-sm-2 ms-md-2 ms-lg-4 hover_change1">
                    <a class="nav-link text-white" href="Contact.php">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>  
        </div>  
      </div>
    </div>  
  </div>  
</header>

<!-- Services Section -->
<section class="section1">


  <div class="container-fluid">
    <div class="row"> 
      <div class="col-12">
        <?php  

// include('connection.php');
// $q="SELECT * FROM `service_data`";
// $fire=mysqli_query($conn,$q);
// $i=1;
// while ($row=mysqli_fetch_assoc($fire)) {
    








?>
        <h1 class="text-warning text-center mt-5 display-3 fw-bold">Our Services</h1>
        <p class="text-center p-5">Our services cover every phase of construction, from initial planning to final completion, including interior design and maintenance. We ensure quality and attention to detail throughout, delivering precision and excellence in every aspect of your project.</p> 
      </div>
    </div>
  </div>  
<?php
// }
?>

</section>

<section class="bg-secondary-subtle">
  <div class="container">
    <div class="row">
      <!-- Residential Construction -->
      <div class="col-12 col-md-4">
        <div class="card mt-5">
          <div class="card-header rounded">
            <img src="residential-construction.jpeg" class="img-fluid h-25" alt="Residential Construction"> <!-- Added alt attribute -->
          </div>
          <div class="card-body">
            <h3 class="text-center text-danger">Residential Construction</h3>
            <p class="text-justify">Building Your Dream Home with janhvi.Com: From Blueprint to Reality. janhvi.Com offers a comprehensive home construction service that begins with your dream...</p>
          </div>
        </div>
      </div>

      <!-- Commercial Construction -->
      <div class="col-12 col-md-4">
        <div class="card mt-5">
          <div class="card-header rounded">
            <img src="commercial-construction.jpeg" class="img-fluid h-25" alt="Commercial Construction"> <!-- Added alt attribute -->
          </div>
          <div class="card-body">
            <h3 class="text-center text-danger">Commercial Construction</h3>
            <p class="text-justify">Transforming Business Environments with janhvi.Com: Tailored Commercial Spaces for Success. janhvi.Com understands that the design and construction of commercial spaces...</p>
          </div>
        </div>
      </div>

      <!-- Maintenance -->
      <div class="col-12 col-md-4">
        <div class="card mt-5">
          <div class="card-header rounded">
            <img src="maintainence-service.jpeg" class="img-fluid h-25" alt="Maintenance Service"> <!-- Added alt attribute -->
          </div>
          <div class="card-body">
            <h3 class="text-center text-danger">Maintenance</h3>
            <p class="text-justify">janhvi.Com: Comprehensive Property Maintenance for Longevity and Performance. Maintaining a property is key to preserving its value and functionality...</p>
          </div>
        </div>
      </div>

      <!-- Interior Design & Planning -->
      <div class="col-12 col-md-4">
        <div class="card mt-5">
          <div class="card-header rounded">
            <img src="interior-design-service.jpeg" class="img-fluid h-25" alt="Interior Design & Planning"> <!-- Added alt attribute -->
          </div>
          <div class="card-body">
            <h3 class="text-center text-danger">Interior Design & Planning</h3>
            <p class="text-justify">Personalized Interior Design and Renovation with janhvi.Com: Creating Spaces That Inspire. janhvi.Com offers comprehensive interior design and renovation...</p>
          </div>
        </div>
      </div>

      <!-- Renovations -->
      <div class="col-12 col-md-4">
        <div class="card mt-5">
          <div class="card-header rounded">
            <img src="renovation-service.jpeg" class="img-fluid h-25" alt="Renovation Service"> <!-- Added alt attribute -->
          </div>
          <div class="card-body">
            <h3 class="text-center text-danger">Renovations</h3>
            <p class="text-justify p-1">Transforming Spaces with janhvi.Com: Expert Renovations that Enhance Value and Functionality. Whether you're modernizing your home, updating your office, or completely transforming...</p>
          </div>
        </div>
      </div>

      <!-- Architectural Plans -->
      <div class="col-12 col-md-4">
        <div class="card mt-5">
          <div class="card-header rounded">
            <img src="architectural-plan.jpeg" class="img-fluid h-25" alt="Architectural Plan"> <!-- Added alt attribute -->
          </div>
          <div class="card-body">
            <h3 class="text-center text-danger">Architectural Plans</h3>
            <p class="text-justify p-1">Innovative Design and Engineering Precision with janhvi.Com: Bridging Creativity and Technical Excellence. At janhvi.Com, we provide a full range of architecture and engineering services...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section>
  <div class="container mt-5 ">
    <div class="row">
      <div class="col-12 img_area1 rounded">
        <div class="row">  
          <div class="col-6">
            <h1 class="fw-bold p-4 text-white">Ready To Get Started With Your Next Project?</h1>  
            <p class="p-4 text-white">Your dream project is just a step away. Reach out now to begin your construction journey with our skilled professionals. We’re here to make your vision come to life.</p>
            <div class="row">
              <div class="col-9">
                <button class="text-center bg-success text-white ms-5 rounded-pill p-3">Get a Free Construction Estimate</button>
              </div>  
            </div>
          </div> 
          <div class="col-6">
            <img src="cta-man-service-details.jpeg" class="img-fluid mt-0" alt="CTA Image"> <!-- Added alt attribute -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer Section -->
<footer>
  <div class="container-fluid mt-5 bg-dark">
    <div class="row">
      <div class="col-12 col-md-4 mt-5">
        <h1 class="text-warning p-5">Janhvi Buildicon</h1>
        <p class="text-white ms-5">At janhvi.Com, we bring together functionality and aesthetics to provide homeowners with customised and efficient home Construction. Our team specialize in construction of houses, and help you create a personalised home to suit your lifestyle.</p>
        <h5 class="text-info ms-5">Get in Touch</h5>
        <div class="row">
          <div class="col-3">
            <i class="fa-solid fa-phone text-white fs-2 ms-5 mt-3"></i>  
          </div>  
          <div class="col-9">
            <p class="text-white mt-3 fs-5">9822700474</p>
          </div>  
        </div>
        <div class="row">
          <div class="col-3">
            <i class="fa-solid fa-envelope text-white fs-2 ms-5 mt-3"></i>  
          </div>  
          <div class="col-9">
            <p class="text-white mt-3 fs-5">janhavi_buildcon@rediffmail.com</p>
          </div>  
        </div>
      </div>

      <div class="col-12 col-md-4 mt-5">
        <h5 class="text-center text-warning p-5">Home</h5>
        <p class="text-white text-center">About Us</p>  
        <p class="text-white text-center">Why Us</p>
        <p class="text-white text-center">Our Projects</p>
        <p class="text-white text-center">Contact Us</p>
      </div>

      <div class="col-12 col-md-4 mt-5">
        <h5 class="text-center text-warning p-5">Services</h5>
        <p class="text-white text-center">Residential Construction</p>
        <p class="text-white text-center">Commercial Construction</p>
        <p class="text-white text-center">Maintenance</p>
        <p class="text-white text-center">Interiors</p>
        <p class="text-white text-center">Renovations</p>
        <p class="text-white text-center">Architectural Plans</p>
        <p class="text-white text-center">Engineering Services</p>
        <p class="text-white text-center">Contractor Services</p>
      </div>
    </div> 
  </div>
</footer>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
