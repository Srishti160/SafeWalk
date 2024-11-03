<?php
$uniquifier = "safe-walk"; // Dynamic class name if needed
?>

<head>
  <!-- Preconnect for Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css/style.css">


  <!-- Include Orbitron, Roboto, and Lato Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;900&family=Roboto:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    /* Apply Orbitron to the SafeWalk text */
    .orbitron-<?php echo $uniquifier; ?> {
      font-family: "Orbitron", sans-serif;
      font-weight: 900; /* Bold weight for SafeWalk */
    }
    

  </style>
<body>
  <!-- Spinner Start -->
  <div
    id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div
      class="spinner-border text-primary"
      style="width: 3rem; height: 3rem"
      role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->


  <!-- Navbar & Hero Start -->
  <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#" class="navbar-brand p-0">
          <h1 class="text-primary mb-0">
            <img src="img\main_logo.png"> <span class="orbitron-<?php echo $uniquifier; ?>">SafeWalk</span> <!-- Orbitron Font applied here -->
          </h1>
          <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mx-0 mx-lg-auto">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="service.php" class="nav-item nav-link">Services</a>
            <a href="blog.php" class="nav-item nav-link">Blog</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <span class="dropdown-toggle">Pages</span>
              </a>
              <div class="dropdown-menu">
                <a href="feature.php" class="dropdown-item">Our Features</a>
                <a href="team.php" class="dropdown-item">Our team</a>
                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                <a href="FAQ.php" class="dropdown-item">FAQs</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar & Hero End -->
   