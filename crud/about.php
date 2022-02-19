<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

  <title>Crud App</title>
  <style>
      footer{
      padding: 10px;
      background-color: black;
      color: white;
      text-align: center;
      font-size: 18px;
      line-height: 30px;
      opacity: .9;
      }
    </style>
</head>

<body>

 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffc107" class="bi bi-pencil-fill" viewBox="0 0 16 16">
          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
        </svg> iNotes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Carousal -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/crud/img2.jpg" class="d-block w-100" alt="..." style="height: 350px">
      <div class="carousel-caption d-none d-md-block">
        <h3>Welcome to iNotes</h3>
        <p>Make notes taking simple</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/crud/img3.jpg" class="d-block w-100" alt="..." style="height: 350px">
      <div class="carousel-caption d-none d-md-block">
        <h3>More Facilities</h3>
        <p>Add, Delete & Update your notes</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src ="http://localhost/crud/img1.jpg" class="d-block w-100" alt="..." style="height: 350px">
      <div class="carousel-caption d-none d-md-block">
        <h3>Better Experience</h3>
        <p>Made with great effort for you</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- Cards -->
<div class="container my-5">
    <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Featured</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="index.php">Add Notes</a>
              </h3><br>
              <p class="card-text mb-auto">Add your notes here to store them securely. You can also update and delete your notes as per your convenience.</p>
              <a href="index.php">Add Now</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="http://localhost/crud/img5.jpg" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Community</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="contact.php">Contact Us</a>
              </h3><br>
              <p class="card-text mb-auto">You can join our community by filling a contact form so that we can get to know you.</p>
              <a href="contact.php">Fill Form</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" src="http://localhost/crud/img4.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
          </div>
        </div>
      </div>
    </div>

  <!-- Jumbotron -->

<div class="container col-xxl-8 px-4 py-4">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-4">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="http://localhost/crud/Thumbnail.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">iNotes - Make notes taking easy</h1>
      <p class="lead">iNotes is a fully responsive user-friendly interface. It is designed with care to facilitate you with digital notes taking facility anywhere and free of cost. It gives the interface to add, edit and delete your notes with great speed. We hope you will enjoy. </p>
    </div>
  </div>
</div>  

    <!-- About Me -->
    <div class="container px-4 py-5" id="icon-grid">
      <h2 class="pb-2 border-bottom">About Me</h2>
  
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col d-flex align-items-start">
          <svg class="bi bi-house-door text-muted flex-shrink-0 me-3" xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="#290884" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg>
          <div>
            <h4 class="fw-bold mb-0">Profile</h4>
            <p>I am Devang Mathur, 2nd year Computer Science Engineering student at Engineering College Ajmer </p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi bi-house-door text-muted flex-shrink-0 me-3" xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="#290884" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
          </svg>
          <div>
            <h4 class="fw-bold mb-0">Address</h4>
            <p>832/1, Opposite Cinemall, <br>Anand Nagar, Vaishali Nagar, Ajmer, Rajasthan, India</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi bi-house-door text-muted flex-shrink-0 me-3" xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="#290884" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
          <div>
            <h4 class="fw-bold mb-0">Knowledge & Hobbies</h4>
            <p>I love to do Web Development. Languages I know include HTML, CSS, JavaScript, PHP, MYSQL
              C, C++, Data Structures & Algorithms. 
            </p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi bi-house-door text-muted flex-shrink-0 me-3" xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="#290884" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg>
          <div>
            <h4 class="fw-bold mb-0">Contact</h4>
            <p>E-mail - devang1234mathur@gmail.com WhatsApp - 9352641068 </p>
          </div>
        </div>
      </div>
    </div>

     <!-- Footer -->
    <footer>
    <div style="margin-top:20px; ">Coded by Devang Mathur</div>
    <div>© All Rights Reserved 2021</div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

</body>
</html>
