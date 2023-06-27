<?php 

  session_start();

  if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
      header("Location:./../signup.php");
  };

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Plannco Home Decoration</title>
        <!--fav icon-->
        <link href="./assets/img/fav/favicon.png" rel="icon" type="image/png" size="16x16" />
        <!--bootstrap css1 -->
        <link href="./assets/libs/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <!--jquery ui css1-->
        <link href="./assets/libs/jquery-ui-1.13.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />

        <!--fontawsome cdn-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <!--lightbox css1 js1-->
       <link href="./assets/libs/lightbox2-2.11.3/dist/css/lightbox.min.css" rel="stylesheet" type="text/css" />

        <!--custom css-->
        <link href="./css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
      <!--Start Back to Top-->
       <div class="fixed-bottom">
        <a href="#" class="btn-backtotops"><i class="fas fa-arrow-up"></i></a>
       </div>
      <!--End Back to Top-->

      <!-- Start Header Section -->
      <header>
      <!--Start Nav Section-->
      <nav class="navbar navbar-expand-xl fixed-top">
        <a href="#" class="navbar-brand text-light">
          <img src="./assets/img/fav/favicon.png" width="70px" />
          <span class="text-uppercase fw-bold h2">Plannco </span><span class="h3">Home Decoration</span>
        </a>

        <button type="button" class="navbar-toggler navbuttons" data-bs-target="#nav" data-bs-toggle="collapse">
          <div class="bg-light lines1"></div>
          <div class="bg-light lines2"></div>
          <div class="bg-light lines3"></div>
        </button>
        <div id="nav" class="navbar-collapse collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-list"><a href="#pratice" class="nav-link menuitems">Home</a></li>
            <li class="nav-list"><a href="#aboutus" class="nav-link menuitems">About Us</a></li>
            <li class="nav-list"><a href="#property" class="nav-link menuitems">Property</a></li>
            <li class="nav-list"><a href="#services" class="nav-link menuitems">Services</a></li>
            <li class="nav-list"><a href="#customer" class="nav-link menuitems">Customer</a></li>
            <li class="nav-list"><a href="#furniture" class="nav-link menuitems">Furniture</a></li>
            <li class="nav-list"><a href="#contact" class="nav-link menuitems">Contact</a></li>
            <li class="nav-list"><a href="./../logout.php" class="nav-link menuitems">Logout</a></li>
          </ul>
        </div>
      </nav>
      <!--End Nav Section-->
    

      <!--Start Banner Section-->
         <section class="text-center text-md-end banners">
           <h1 class="text-light bannerheaders">Welcome to <span class="text-uppercase fw-bold">Plannco</span> <span class="text-capitalize">home decoration Co.,Ltd</span></h1>
           <p class="text-light bannerparagraphs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, facere </p>
         </section>
      <!--End Banner Section-->
    </header>
      <!--End Header Section-->

      <!--Start About Us Section-->
        <section id="aboutus" class="text-light aboutuss py-5">
          <div class="container">
            <div class="row">

              <div class="col-md-6">
                 <img src="./assets/img/users/staffgirl1.png" width="350px" alt="staffgirl1" />
              </div>

              <div class="col-md-6">
                <div class="row">

                  <div class="col-sm-12">

                    <div>
                      <h3 class="text-uppercase text-center">who we are !!!</h3>

                      <div class="lines"></div>
                      <div class="lines"></div>
                      <div class="lines"></div>
                    </div>
                    <div>
                      <h5 class="text-center fst-italic">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h5>
                    </div>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, tempore laborum debitis, tempora consequatur veniam earum corporis doloribus natus iure nam harum incidunt dolorem eligendi veritatis quam sequi magni consectetur.</p>

                   <div class="text-center">
                    <a href="#" class="btn btn-danger rounded-0">Read More</a>
                   </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </section>
      <!--End About Us Section-->

      <!--Start Property Section-->
        <section id="property" class="text-center py-5 properties">
         <div class="container-fluid">
          <!--Start Title-->
            <div class="row">
              <div class="col">
                <h2 class="text-uppercase titles">Properties</h2>
              </div>
            </div>
          <!--End Title-->

         <ul class="list-inline fw-bold text-uppercase">
          <li class="list-inline-item propertylists activeitems" data-filter="all">All <span class="mx-md-5 mx-3">/</span></li>
          <li class="list-inline-item propertylists" data-filter="house">House <span class="mx-md-5 mx-3">/</span></li>
          <li class="list-inline-item propertylists" data-filter="decoration">Decoration <span class="mx-md-5 mx-3">/</span></li>
          <li class="list-inline-item propertylists" data-filter="furniture">Furniture <span class="mx-md-5 mx-3">/</span></li>
          <li class="list-inline-item propertylists" data-filter="office">Office</li>
         </ul>

          <div class="container-fluid">

           <div class="d-flex flex-wrap justify-content-center">

            <div class="filters furniture"><a href="./assets/img/gallery/image1.jpg" data-lightbox="property" data-title="image1"><img src="./assets/img/gallery/image1.jpg" width="200px"  ></a></div>

            <div class="filters furniture"><a href="./assets/img/gallery/image2.jpg" data-lightbox="property" data-title="image2"><img src="./assets/img/gallery/image2.jpg" width="200px"/></a></div>

            <div class="filters house"><a href="./assets/img/gallery/image3.jpg" data-lightbox="property" data-title="image3"><img src="./assets/img/gallery/image3.jpg" width="200px"/></a></div>

            <div class="filters house"><a href="./assets/img/gallery/image4.jpg"  data-lightbox="property" data-title="image4"><img src="./assets/img/gallery/image4.jpg" width="200px"/></a></div>

            <div class="filters house"><a href="./assets/img/gallery/image5.jpg" data-lightbox="property" data-title="image5"><img src="./assets/img/gallery/image5.jpg" width="200px" data-lightbox="property"/></a></div>

            <div class="filters office"><a href="./assets/img/gallery/image6.jpg" data-lightbox="property" data-title="image6"><img src="./assets/img/gallery/image6.jpg" width="200px"/></a></div>

            <div class="filters office"><a href="./assets/img/gallery/image7.jpg"  data-lightbox="property" data-title="image7"><img src="./assets/img/gallery/image7.jpg" width="200px" data-lightbox="property"/></a></div>

            <div class="filters office"><a href="./assets/img/gallery/image8.jpg" data-lightbox="property" data-title="image8"><img src="./assets/img/gallery/image8.jpg" width="200px"/></a></div>

            <div class="filters office"><a href="./assets/img/gallery/image9.jpg" data-lightbox="property" data-title="image9"><img src="./assets/img/gallery/image9.jpg" width="200px"/></a></div>

            <div class="filters decoration"><a href="./assets/img/gallery/image1.jpg" data-lightbox="property" data-title="image10"><img src="./assets/img/gallery/image1.jpg" width="200px"/></a></div>

            <div class="filters decoration"><a href="./assets/img/gallery/image2.jpg"  data-lightbox="property" data-title="image11"><img src="./assets/img/gallery/image2.jpg" width="200px"/></a></div>

            <div class="filters decoration"><a href="./assets/img/gallery/image3.jpg" data-lightbox="property" data-title="image12"><img src="./assets/img/gallery/image3.jpg" width="200px"/></a></div>

            <div class="filters decoration"><a href="./assets/img/gallery/image4.jpg" data-lightbox="property" data-title="image13"><img src="./assets/img/gallery/image4.jpg" width="200px"/></a></div>

            <div class="filters furniture"><a href="./assets/img/gallery/image5.jpg" data-lightbox="property" data-title="image14"><img src="./assets/img/gallery/image5.jpg" width="200px"/></a></div>

            <div class="filters furniture"><a href="./assets/img/gallery/image6.jpg" data-lightbox="property" data-title="image15"><img src="./assets/img/gallery/image6.jpg" width="200px"/></a></div>

           </div>

          </div>

         </div>
        </section>
      <!--End Property Section-->

      <!--Start Adv Section-->
       <section class="p-5 missions">
        <span class="floral"></span>
        <div class="container">
          <div class="row align-items-center">

            <div class="col-lg-5 mx-auto mb-5 advimages">
              <img src="./assets/img/etc/building4.png" alt="building4" />
            </div>

            <div class="col-lg-7 text-light text-center text-lg-end advtexts">
              <h1>What is Plannco $ how we started our business in myanmar</h1>
              <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore repudiandae reprehenderit saepe dolore nesciunt magni hic, eum itaque commodi quos? Ex dolorum sint aspernatur praesentium hic obcaecati pariatur dolor dignissimos</p>
            </div>

          </div>
        </div>
       </section>
      <!--End Adv Section-->

      <!--Start Services Section-->
       <section id="services" class="py-4 services">
        <div class="container-fluid">
         <!--Start Title-->
          <div class="row text-center">
            <div class="col-12 text-light">
              <h3 class="titles">Our Services</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium aut eius et in fugit doloribus </p>
            </div>
          </div>
         <!--End Title-->

         <div class="row p-3">

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 servicecards">
              <img src="./assets/img/gallery/image1.jpg" alt="image1" />
              <h5 class="text-white text-uppercase fw-bold py-2 servicetexts">Living Room</h5>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 servicecards">
              <img src="./assets/img/gallery/image2.jpg" alt="image2" />
              <h5 class="text-white text-uppercase fw-bold py-2 servicetexts">Dining Room</h5>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 servicecards">
              <img src="./assets/img/gallery/image3.jpg" alt="image3" />
              <h5 class="text-white text-uppercase fw-bold py-2 servicetexts">Meeting Room</h5>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 servicecards">
              <img src="./assets/img/gallery/image4.jpg" alt="image4" />
              <h5 class="text-white text-uppercase fw-bold py-2 servicetexts">Bed Room</h5>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 servicecards">
              <img src="./assets/img/gallery/image5.jpg" alt="image5" />
              <h5 class="text-white text-uppercase fw-bold py-2 servicetexts">Pantry Room</h5>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0 servicecards">
              <img src="./assets/img/gallery/image6.jpg" alt="image6" />
              <h5 class="text-white text-uppercase fw-bold py-2 servicetexts">Mini Room</h5>
            </div>
          </div>

         </div>

        </div>
       </section>
      <!--End Services Section-->


    <!--Start Client Section-->
     <section class="p-5">
      <div class="container-fluid">
        <!--Start Title-->
        <div class="row">
          <div class="col-md-12 text-center">
           <h5 class="titles">Satisfied Clients</h5>
           <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptatem </p>
          </div>
         </div>
        <!--End Title-->

        <div class="row">
         <div class="col-md-12">
          <ul class="clientlists">
            <li><img src="./assets/img/clients/client1.png" alt="client1" /></li>
            <li><img src="./assets/img/clients/client2.png" alt="client1"/></li>
            <li><img src="./assets/img/clients/client3.png" alt="client1"/></li>
            <li><img src="./assets/img/clients/client4.png" alt="client1"/></li>
            <li><img src="./assets/img/clients/client5.png" alt="client1"/></li>
          </ul>
         </div>
        </div>
     
      </div>
     </section>
    <!--End Client Section-->

    <!--Start Customer Section-->
    <section id="customer" class="py-3 customers">
      <div class="container-fluid">
        <!--Start Title-->
        <div class="row text-center">
          <div class="col">
            <h3 class="titles text-light">What Customer Say?</h3>
          </div>
        </div>
      
      <!--End Title-->

      <div class="row">

        <div class="col-md-6 mx-auto">

         <div id="customercarousels" class="carousel slide" data-bs-ride="carousel">
          
          <ol class="carousel-indicators">             <!--index number array nat calll-->
            <li data-bs-target="#customercarousels" class="active" data-bs-slide-to="0"></li>
            <li data-bs-target="#customercarousels" data-bs-slide-to="1"></li>
            <li data-bs-target="#customercarousels" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">

            <!--Start User1-->
            <div class="carousel-item text-center active">
              <img src="./assets/img/users/user1.jpg" class="rounded-circle my-5" width="150px" alt="user1" />

              <blockquote class="text-light">
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod minima veniam totam, reiciendis id nemo commodi</p>
              </blockquote>

              <h5 class="text-light fw-bold mb-3">Ms.July</h5>
           
              <ul class="list-inline mb-5">
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
              </ul>
            </div>
               <!--End User1-->

               <!--Start User2-->
            <div class="carousel-item text-center">
              <img src="./assets/img/users/user2.jpg" class="rounded-circle my-5" width="150px" alt="user1" />

              <blockquote class="text-light">
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod minima veniam totam, reiciendis id nemo commodi</p>
              </blockquote>

              <h5 class="text-light fw-bold mb-3">Mr.AnTon</h5>
           
              <ul class="list-inline mb-5">
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
              </ul>
            </div>
               <!--End User2-->

               <!--Start User3-->
            <div class="carousel-item text-center">
              <img src="./assets/img/users/user3.jpg" class="rounded-circle my-5" width="150px" alt="user1" />

              <blockquote class="text-light">
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod minima veniam totam, reiciendis id nemo commodi</p>
              </blockquote>

              <h5 class="text-light fw-bold mb-3">Ms.Yoon</h5>
           
              <ul class="list-inline mb-5">
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
              </ul>
            </div>
               <!--End User3-->
            
          </div>

         </div>

        </div>

      </div>

      </div>
    </section>
    <!--End Customer Section-->

    <!--Start Request Quotation-->
    <section>
      <div class="container">
        <div class="qutoes">

          <div class="infos">
           <img src="./assets/img/icon/phoneicon.png" class="me-3 phoneicons" alt="phoneicon" />
            <div class="text-light">
              <h3 class="fw-bolx text-uppercase">Request A Free Quote</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing</p>
            </div>
          </div>

          <div>
            <a href="tel:09422042225" class="btn btn-calls">Call Now<i class="fas fa-phone"></i></a>
          </div>

        </div>
      </div>
    </section>
     <!--End Request Quotation-->

     <!--Start Furniture Section-->
    <section id="furniture" class="bg-light text-center py-3">
      <div class="container">
        <!--Start Title-->
        <div class="row">
          <div class="col">
            <h3 class="titles">Furniture Services</h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas nulla cumque distinctio.</p>
          </div>
        </div>
        <!--End Title-->

        <div class="row furicons">

          <div class="col-md-4 col-sm-12 mb-4">
            <img src="./assets/img/icon/services1.png" width="70px" alt="services1" />
            <h4>Fast Service</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea numquam </p>
          </div>

          <div class="col-md-4 col-sm-12 mb-4">
            <img src="./assets/img/icon/services2.png" width="70px" alt="services2" />
            <h4>Secure Payments</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea numquam </p>
          </div>

          <div class="col-md-4 col-sm-12 mb-4">
            <img src="./assets/img/icon/services3.png" width="70px" alt="services3" />
            <h4>Expert Team</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea numquam </p>
          </div>

          <div class="col-md-4 col-sm-12 mb-4">
            <img src="./assets/img/icon/services4.png" width="70px" alt="services4" />
             <h4>affortable Service</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea numquam </p>
          </div>

          <div class="col-md-4 col-sm-12 mb-4">
            <img src="./assets/img/icon/services5.png" width="70px" alt="services5" />
            <h4>90 Days Warranty</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea numquam </p>
          </div>

          <div class="col-md-4 col-sm-12 mb-4">
            <img src="./assets/img/icon/services6.png" width="70px" alt="services6" />
            <h4>Award Winning</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea numquam </p>
          </div>

        </div>

      </div>
    </section>
     <!--End Furniture Section-->

     <!--Start Contact Section-->
    <section id="contact" class="p-5 contacts">
      <div class="container-fluid">
       
          <div class="col-lg-5 text-light">
            <h5 class="display-5 mb-3">Get New Letter</h5>
            <form class="" action="" method="">

              <div class="form-group py-4">                
                <input type="text" name="name" id="name" class="form-control inputs p-3" placeholder="Enter Your Name" autocomplete="off" />
                <label for="name" class="labels">Name</label>
              </div>

              <div class="form-group py-4">
                <input type="emaial" name="email" id="email" class="form-control inputs p-3" placeholder="Enter Your Email" autocomplete="off" />
                <label for="email" class="labels">Email</label>
              </div>

              <div class="my-4">
                <div class="form-check form-switch">
                  <input type="checkbox" name="accept" id="accept" class="form-check-input" />
                <label for="accept">I Agree to get push notify</label>
                </div>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn text-uppercase text-light fw-bold  rounded-0 submit-btns">Subscribe</button>
              </div>


            </form>
          </div>

      </div>
    </section>
     <!--End Contact Section-->

     <!--Start Footer Section-->
      <footer class="bg-dark">
        <div class="container-fluid px-5">
          <div class="row text-light py-4">

            <div class="col-md-3 col-sm-6 mb-4">
              <h5 class="mb-3"><img src="./assets/img/fav/favicon.png" width="70px" alt="footericons" />Plannco</h5>
              <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere et quaerat similique quia. Pariatur, accusantium quod? Culpa voluptate quisquam enim consectetur, obcaecati porro voluptas. </p>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
              <h5 class="mb-3">Visit Us</h5>
              <ul class="list-unstyled">
                <li><a href="index.html" class="footerlinks">Home</a></li>
                <li><a href="#aboutus" class="footerlinks">About Us</a></li>
                <li><a href="#property" class="footerlinks">Porperties</a></li>
                <li><a href="#services" class="footerlinks">Agents</a></li>
                <li><a href="#customer" class="footerlinks">Cusotmers</a></li>
                <li><a href="#furniture" class="footerlinks">Pricing</a></li>
                <li><a href="#contact" class="footerlinks">Contact</a></li>
              </ul>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
              <h5 class="mb-3">Need Help</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="footerlinks">Customer Service</a></li>
                <li><a href="#" class="footerlinks">Online Chat</a></li>
                <li><a href="#" class="footerlinks">Support</a></li>
                <li><a href="#" class="footerlinks">info@plannco.com</a></li>
              </ul>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
              <h5 class="mb-3">Contact Us</h5>
              <ul class="list-unstyled small">
                <li>l-9/19(A),60 street, Between Theik Pan Street And ,Aung San St, Mandalay</li>
                <li>Phone: +95 9422042225 / +95 9 422042242</li>
              </ul>
            </div>
            
          </div>
          

          <div class="text-light border-top pt-4 d-md-flex justify-content-between text-center">
            <p class="text-light">&copy; <span id="year"></span> Copyright , Inc,All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li><a href="#" class="nav-link"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#" class="nav-link"><i class="fab fa-instagram mx-3"></i></a></li>
              <li><a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
          </div>

        </div>
      </footer>
     <!--End Footer Section-->


     

     

     


    
    <!--bootstrap css1 js 1-->
    <script src="./assets/libs/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        
    <!--jquery js1-->
    <script src="./assets/libs/jquery-3.6.0/jquery-3.6.0.min.js" type="text/javascript"></script>
     
    <!--jqueryui css1 js1-->
    <script src="./assets/libs/jquery-ui-1.13.1/jquery-ui.min.js" type="text/javascript"></script>

    <!--lightbox2 css1 js1-->
    <script src="./assets/libs/lightbox2-2.11.3/dist/js/lightbox.min.js" type="text/javascript"></script>

    
    <!--javascript-->
    <script src="./js/app.js" type="text/javascript"></script>
    </body>
</html>