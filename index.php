<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jan Shakti Yojna</title>

    <link rel="icon" type="image/x-icon" href="logo.jpg">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<div id="lets_translate"></div>
<script src="http://translate.google.com/translate_a/element.js?cb=translatefunction"></script>

<script>
function translatefunction()
{
new google.translate.TranslateElement("lets_translate");
}
</script>
<div>
        <nav class="navbar navbar-expand-lg shadow p-3 mb-5" style="background-color: #5c8a8a;">
            <a href="#" class="navbar-brand">
                <img src="logo.jpg" alt="Logo" id="icon_img" >
               
            </a>

            
            <a href="#" class="nav-item ">
                Jan Shakti Yojna
            </a>
            <button class="navbar-toggler custom-toggler"type="button"data-toggle="collapse"data-target="#navbarNavDropdown"aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-success"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item name">
                        <a href="#" class="nav-link">Jan Shakti Yojna</a>
                      </li> -->
                  <li class="nav-item active">
                    <a class="nav-link" href="#"> <i class="fa-solid fa-house-chimney"></i>
                    Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">About Us</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="#" class="nav-link">Services</a>
                  </li> -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="serviceDropdown" role="button" data-toggle="dropdown">Services</a>
                    <div class="dropdown-menu" aria-labelledby="serviceDropdown">
                    <a target="_blank" class="dropdown-item" href="https://uidai.gov.in">Aadhar Card</a>
                    <a target="_blank"class="dropdown-item" href="https://nsdl.co.in/">PAN Card</a>
                    <a target="_blank"class="dropdown-item" href="https://eci.gov.in/">Voter Card</a>
                    <a target="_blank"class="dropdown-item" href="https://www.passportindia.gov.in/">Passport</a>
                    <a target="_blank"class="dropdown-item" href="https://bis.pmjay.gov.in/BIS/selfprintCard">Ayushman Card</a>
                    <a target="_blank"class="dropdown-item" href="https://parivahan.gov.in/parivahan//en/content/driving-licence-0">Driving Lincese</a>
                    <a target="_blank"class="dropdown-item" href="https://pgportal.gov.in/">Complaint</a>
                  </div>
                  </li>
                </ul>

                <ul class="navbar-nav mr-5">
                    <!-- <li class="nav-item ">
                        <div class="nav-search ">
                          <input type="text" id="search-input" placeholder="Search...">
                          <button id="search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </li> -->
                    <li class="nav-item ">
                      <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="signup.php" data-bs-toggle="modal" data-bs-target="#registrationModal">Register</a>
                    </li>
                  </ul>
        </nav>
   <div>

    <!-- Modal for login starts-->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #45acba;">
            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: whitesmoke" >Welcome Back...</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="login_new.php" method="post">
              <table class="table table-borderless">
                <tbody>
                    <tr>
                      <td>Username: </td>
                      <td>
                        <input type="username" id="" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Enter your Username." name="username">
                      </td>
                    </tr>
                    <tr>
                      <td>Password: </td>
                      <td>
                        <input type="password" id="" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Enter Password" name="password">
                      </td>
                    </tr>
                  </tbody>
              </table>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Login</button>
            </div>
            </form>
           
        </div>
        </div>
    </div> 
    <!-- Modal for login ends-->

    <!-- Modal for registration starts-->
    <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #45acba;">
            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: whitesmoke;">Register Now</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="signup.php" method="post">
            <div class="modal-body">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>Name: </td>
                            <td>
                              <input type="text" id="name" name="name" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Enter Full Name">
                            </td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td>
                              <input type="email" id="email" name="email" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Enter Email">
                            </td>
                        </tr>
                        <tr>
                            <td>Phone No: </td>
                            <td>
                              <input type="number" id="number" name="phone"class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Enter Phone No.">
                            </td>
                        </tr>
                        <tr>
                            <td>Gender: </td>
                            <td>
                                <select class="form-select" name="gender" aria-label="">
                                    <option selected>Choose Gender</option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                    <option value="o">Other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Age: </td>
                            <td>
                                <input type="number" id="age" name="age" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Enter Your Age">
                            </td>
                        </tr>
                        <tr>
                          <td>Password: </td>
                          <td>
                            <input type="password" id="password" name="password" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Enter Password">
                          </td>
                        </tr>
                        <tr>
                            <td>Cofirm Password: </td>
                            <td>
                              <input type="password" id="password" name="confirm" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Confirm Password">
                            </td>
                        </tr>
                      </tbody>
                </table>
            </div>
            </from>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Register</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal for registration ends-->
    
<div class="container my-3">
<!-- <div class="content"> -->
    <div class="row">
        <div class="col-8">
          
            <div id="carouselControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img1.jpg" class="d-block w-100" alt="Image 1">
                        <!-- <div class="carousel-caption">
                        </div> -->
                    </div>
                    
                    <div class="carousel-item ">
                        <img src="img2.jpg" class="d-block w-100" alt="Image 2">
                        <!-- <div class="carousel-caption">
                         </div> -->
                    </div>
                    
                    <div class="carousel-item ">
                        <img src="img3.jpg" class="d-block w-100" alt="Image 3">
                        <!-- <div class="carousel-caption">
                        </div> -->
                    </div>
                    
                    <div class="carousel-item ">
                        <img src="img4.jpg" class="d-block w-100" alt="Image 4">
                        <!-- <div class="carousel-caption">
                        </div> -->
                    </div>
                    
                    <div class="carousel-item ">
                        <img src="img5.jpg" class="d-block w-100" alt="Image 5">
                        <!-- <div class="carousel-caption">
                        </div> -->
                    </div>
                    
                    <div class="carousel-item ">
                        <img src="img6.jpg" class="d-block w-100" alt="Image 6">
                        <!-- <div class="carousel-caption">
                        </div> -->
                    </div>
                    
                    <div class="carousel-item ">
                        <img src="img7.jpg" class="d-block w-100" alt="Image 7">
                        <!-- <div class="carousel-caption">
                        </div> -->
                    </div>

                    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>
            </div>
        </div> 
        <div class="col-4">
            <div class="scrollable-div">
                <h4 class="fst-italic">Quick Links</h4>
                <ul class="list-unstyled">
                  <li> 
                    <a target="_blank"class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://pmaymis.gov.in/">
                    <span class="material-symbols-outlined" style="font-size: 37px;">feed</span>
                      <div class="col-lg-8">
                        <h6 class="mb-0">Pradhan Mantri Awas Yojana</h6>
                        <!-- <small class="text-body-secondary">January 15, 2023</small> -->
                      </div>
                    </a>
                  </li>
                  <li>
                    <a target="_blank"class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="http://www.pmkvyofficial.org/">
                        <span class="material-symbols-outlined" style="font-size: 37px;">feed</span>
                      <div class="col-lg-8">
                        <h6 class="mb-0">Pradhan Mantri Kaushal Vikas Yojana (PMKVY) </h6>
                        <!-- <small class="text-body-secondary">January 14, 2023</small> -->
                      </div>
                    </a>
                  </li>
                  <li>
                    <a target="_blank"class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://pmfby.gov.in/">
                        <span class="material-symbols-outlined" style="font-size: 37px;">feed</span>
                      <div class="col-lg-8">
                        <h6 class="mb-0">Pradhan Mantri Fasal Bima Yojana (PMFBY)</h6>
                        <!-- <small class="text-body-secondary">January 13, 2023</small> -->
                      </div>
                    </a>
                  </li>
                  <li>
                    <a target="_blank"class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://www.mudra.org.in/">
                        <span class="material-symbols-outlined" style="font-size: 37px;">feed</span>
                      <div class="col-lg-8">
                        <h6 class="mb-0">Pradhan Mantri Mudra Yojana (PMMY)</h6>
                        <!-- <small class="text-body-secondary">January 15, 2023</small> -->
                      </div>
                    </a>
                  </li>
                  <li>
                    <a target="_blank" class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://www.pmindia.gov.in/hi/government_tr_rec/%E0%A4%AC%E0%A5%87%E0%A4%9F%E0%A5%80-%E0%A4%AC%E0%A4%9A%E0%A4%BE%E0%A4%93-%E0%A4%AC%E0%A5%87%E0%A4%9F%E0%A5%80-%E0%A4%AA%E0%A4%A2%E0%A4%BC%E0%A4%BE%E0%A4%93-%E0%A4%AC%E0%A4%BE%E0%A4%B2/">
                        <span class="material-symbols-outlined" style="font-size: 37px;">feed</span>
                      <div class="col-lg-8">
                        <h6 class="mb-0">Beti Bachao Beti Padhao Scheme</h6>
                        <!-- <small class="text-body-secondary">January 15, 2023</small> -->
                      </div>
                    </a>
                  </li>
                  <li>
                    <a target="_blank" class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://financialservices.gov.in/insurance-divisions/Government-Sponsored-Socially-Oriented-Insurance-Schemes/Pradhan-Mantri-Suraksha-Bima-Yojana(PMSBY)">
                        <span class="material-symbols-outlined" style="font-size: 37px;">feed</span>
                      <div class="col-lg-8">
                        <h6 class="mb-0">Pradhan Mantri Suraksha Bima Yojana (PMSBY)</h6>
                        <!-- <small class="text-body-secondary">January 15, 2023</small> -->
                      </div>
                    </a>
                  </li>
                  <li>
                    <a target="_blank" class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://pmmodischeme.in/pradhan-mantri-solar-panel-yojana/">
                        <span class="material-symbols-outlined" style="font-size: 37px;">feed</span>
                      <div class="col-lg-8">
                        <h6 class="mb-0">Pradhan Mantri Free Solar Panel Yojana</h6>
                        <!-- <small class="text-body-secondary">January 15, 2023</small> -->
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
        </div>   
    </div>
</div>
<div>
    <marquee behavior="scroll" direction="left" style="color: red; font-weight: bold;">The registration for National Scholarship Protal are closed. </marquee>
</div>

<br>
<br>
<br>
<!-- Scholarship Section Starts -->
<div class="container">
    <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="d-inline-block mb-2 text-primary-emphasis">Scholarship</h3>
              <p class="card-text mb-auto">Unlock Your Potential with a Life-Changing Scholarship: Our scholarship program offers a golden opportunity for talented individuals to pursue their dreams without financial constraints, empowering them to reach their full potential</p>
              <a href="scholarship_form_filter.html" class="icon-link gap-1 icon-link-hover stretched-link">
                <strong>Apply</strong>
                <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
              </a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="./scholarship.jpg" alt="scholarship.jpg" style="height: 200px; width: 250px;">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="d-inline-block mb-2 text-success-emphasis">Scheme</h3>
              <p class="mb-auto">Explore a range of transformative government schemes aimed at uplifting the lives of Indian citizens. From healthcare initiatives to skill development programs, our website provides comprehensive information on the various schemes that empower individuals and communities.</p>
              <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                <strong>Apply</strong>
                <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
              </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="./scheme.jpg" alt="scheme.jpg" style="height: 200px; width: 250px;">
            </div>
          </div>
        </div>
    </div>
</div>
<!-- Scholarship Section Ends -->



<!-- <div class="container cen mt-2">
    <div class="row cet">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Scholarship</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis commodi totam pariatur facilis earum dicta hic molestias magni, nemo in!</p>
                    <button type="button">Apply</button>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Scheme</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis commodi totam pariatur facilis earum dicta hic molestias magni, nemo in!</p>
                    <button type="button">Apply</button>
                </div>
            </div>
        </div>
    </div>
</div> -->
    <br>
    <br>
    <br>
    <div style="height: 50px; background-color: #e0e0eb;" class="mx-auto p-2 text-center">
        <h3 clas="mb-2"><strong> Services</strong></h3>
    </div>
    <br>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col imageGallary">
                <a target="_blank" href="https://www.onlineservices.nsdl.com/paam/endUserRegisterContact.html" class="nav-link "><img src="pan.jpg" class="shadow bg-body-tertiary rounded" alt="PAN" style="height: 200px; width: 180px;"><p style="color: rgb(50, 49, 49);"><strong>PAN</strong></p></a>
            </div>
            <div class="col imageGallary"class="nav-link">
                <a target="_blank" href="https://uidai.gov.in" ><img src="aadhar.webp" class="shadow bg-body-tertiary rounded" alt="AADHAR" style="height: 200px; width: 180px;"><p style="color: rgb(50, 49, 49);"><strong>AADHAR</strong></p></a>
            </div>
            <div class="col  imageGallary">
                <a target="_blank" href="https://bis.pmjay.gov.in/BIS/selfprintCard" class="nav-link"><img src="ayushman.jpg" class="shadow bg-body-tertiary rounded" alt="AYUSHMAN" style="height: 200px; width: 180px;"><p style="color: rgb(50, 49, 49);"><strong>AYUSHMAN</strong></p></a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col imageGallary">
                <a target="_blank" href="https://parivahan.gov.in/parivahan//en/content/driving-licence-0" class="nav-link"><img src="driving.jpg" class="shadow bg-body-tertiary rounded" alt="service 6" style="height: 200px; width: 180px;"><p style="color: rgb(50, 49, 49);"><strong>DRIVING LICENCE </strong></p></a>
            </div>
            <div class="col imageGallary">
                <a target="_blank" href="https://passportindia.gov.in/AppOnlineProject/welcomeLink" class="nav-link"><img src="passport.jpg" class="shadow bg-body-tertiary rounded" alt="PASSPORT" style="height: 200px; width: 180px;"><p style="color: rgb(50, 49, 49);"><strong>PASSPORT</strong></p></a>
            </div>
            <div class="col imageGallary">
                <a target="_blank" href="https://eci.gov.in/" class="nav-link"><img src="voter.jpg" class="shadow bg-body-tertiary rounded" alt="VOTER" style="height: 200px; width: 180px;"><p style="color: rgb(50, 49, 49);"><strong>VOTER</strong></p></a>
            </div>
        </div>
    </div>



    <!-- <div class="container mt-3">
        <br>
        <div class="row cet mt-4">
            <div class="col-sm-2 imageGallary">
                <a href="#" class="nav-link"><img src="pan.jpeg" alt="PAN" style="height: 200px; width: 180px;"></a>
            </div>
            <div class="col-sm-2 imageGallary"class="nav-link">
                <a href="https://uidai.gov.in" ><img src="aadhar.webp" alt="AADHAR" style="height: 200px; width: 180px;"></a>
            </div>
            <div class="col-sm-2 imageGallary">
                <a href="#" class="nav-link"><img src="ayus.jpeg" alt="AYUSHMAN" style="height: 200px; width: 180px;"></a>
            </div>
            <div class="col-sm-2 imageGallary">
                <a href="#" class="nav-link"><img src="image6.jpeg" alt="service 6" style="height: 200px; width: 180px;"></a>
            </div>
            <div class="col-sm-2 imageGallary">
                <a href="#" class="nav-link"><img src="pas.jpeg" alt="PASSPORT" style="height: 200px; width: 180px;"></a>
            </div>
            <div class="col-sm-2 imageGallary">
                <a href="#" class="nav-link"><img src="voter.jpeg" alt="VOTER" style="height: 200px; width: 180px;"></a>
            </div> -->
            
            <!-- <div class="col-md-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pan Card</h4>
                        <a href="#" class="nav-link"><img src="pan.jpeg" alt="PAN"></a>
                    </div>
                </div>

            </div> -->

            <!-- <div class="container crd mt-3">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="card dr">
                            <a href="#"><img src="pan.jpeg" class="card-img-top" alt="Image1"></a>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <h4 class="card-title">Pan Card</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card dr">
                            <a href="#"><img src="image4.jpeg" class="card-img-top" alt="Image2"></a>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <h4 class="card-title">Passport</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card dr">
                            <a href="#"><img src="voter.jpeg" class="card-img-top" alt="Image3"></a></a>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <h4 class="card-title">Title</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 dr">
                        <div class="card">
                            <a href="https://uidai.gov.in/"><img src="aadhar.webp" class="card-img-top" alt="Image4"<a href="https://uidai.gov.in/"></a></a>>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <h4 class="card-title">Title</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card dr">
                            <a href="#"><img src="ayus.jpeg" class="card-img-top" alt="Image5"></a>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <h4 class="card-title">Title</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card dr">
                            <a href="#"><img src="pas.jpeg" class="card-img-top" alt="Image6"></a>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <h4 class="card-title">Title</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->




        <!-- </div> -->
    <!-- </div> -->
    
    <br>
    <br>
    <br>
    <div style="background-color: #d6d6c2;">
        <div class="container">
            <hr>
            <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading fw-normal lh-1">Discover Our Story: <span class="text-body-secondary">Unveiling the Essence of Our Journey.</span></h2>
                  <p class="lead">Welcome to our About section, where we invite you to delve into the heart of our story. We are a passionate team driven by a common purpose, dedicated to making a positive impact in the world. With unwavering commitment, we strive to deliver excellence in every endeavor, fueled by our shared values of innovation, integrity, and community. Join us as we embark on this remarkable journey together, creating meaningful experiences and shaping a brighter future for all.Our website aims to provide users with a comprehensive platform that consolidates various schemes, scholarships, and essential document links into one convenient location. </p>
                </div>
                <div class="col-md-5">
                  
                </div>
            </div>
        </div>
    </div>
    <br>
    
    


    <br>
    <br>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h4>Jan Shakti Yojna</h4>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Help & FAQ's</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4>Related Links</h4>
            <ul class="list-unstyled">
              <li><a target="_blank" href="https://scholarships.gov.in/">National Scholarship Portal(NSP)</a></li>
              <li><a target="_blank"  href="https://www.india.gov.in/">National Portal of India(NPI)</a></li>
              <li><a target="_blank" href="https://scholarship.odisha.gov.in/">State Scholarship Portal(Odisha)</a></li>
              <li><a target="_blank" href="https://rd.odisha.gov.in/scheme">Odisha Scheme</a></li>
             
            </ul>
          </div>
          <div class="col-md-3">
                <h4>Contact Us</h4>
                <a href="#" ><i class="fa-regular fa-envelope"></i> webslayers7@gmail.com</a>
                <!-- <p> :agrawal.subhashree@gmail.com</a></p>   -->
                <!-- <div class="social-icons"> -->
              <!-- <a href="#"><i class="fab fa-facebook fa-lg" style="color: #3b5998"></i></a>
              <a href="#"><i class="fa-brands fa-twitter fa-lg" style="color: #00acee"></i></a>
              <a href="#"><i class="fa-brands fa-youtube fa-lg" style="color: #CD201F"></i></a>
              <a href="#"><i class="fa-brands fa-square-instagram fa-lg" style="color: #d62976;"></i></a> -->

                <div class="social-buttons">

                    <a href="#" class="social-button social-button--instagram" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-button social-button--youtube" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="social-button social-button--facebook" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-button social-button--linkedin" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                    </a>

                </div>
          </div>
          <div class="col-md-3">
            <h4>Any Suggestions?</h4>
            <p></p>
            <form>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your email">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Your message"></textarea>
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
          </div>
        </div>
        <div class="row bottom-section">
          <div class="col-md-6">
            <p>&copy; 2023 Jan Shakti Yojna. All rights reserved. | Web Slayers</p>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>