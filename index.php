
<?php include 'header.php';?>

    <!-- Hero section -->

    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container d-sm-flex align-items-center justify-content-between px-2 py-5">
            <div>

                <?php
                if(isset($_SESSION['userid'])) {
                        
                    echo '<h1>Welcome <span class="text-warning">'. ucwords($_SESSION['userID']).  '</span></h1>';
                    echo '<p class="lead my-4">Do you have any lists to update and share with the rest of the anime fans of the world? </p>';
                    echo '<a href="dashboard.php" class="btn btn-danger btn-lg">Update lists</a>';
                }
                
                else 
                {

                    echo '<h1>Welcome to<span class="text-warning"> Mock Filler Episodes </span></h1>';
                    echo '<p class="lead my-4">We focus on providing the most up to date filler lists for anime fans around the world. </p>';
                    echo '<a href="shows.php" class="btn btn-danger btn-lg">See the lists</a>';
                }
                
                ?>
                  
            </div>

            <img src="img/hellsing-transparent.png" class="img-fluid w-50 d-none d-sm-block">
        </div>
    </section>

    <!-- Search Section -->

    <section class="bg-danger text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h2 class="text-center text-white my-4">No more fillers! - Begin your search</h2>

                <div class="input-group shows-input justify-content-center">

                    <!-- Search for shows in the Database -->
                    <form class="d-flex flex-column flex-md-row " action="search.php" method="POST">
                        <input class="form-control mt-2 me-2 py-2 pe-5 rounded-pill" type="search" name="search" placeholder="Search lists" autocomplete="off">
                        <button class="btn btn-dark mt-2 px-5 rounded-pill" type="submit" name="submit-search">Search</button>
                    </form> 

                </div>
            </div>
        </div>
    </section>

    <!-- Contributors Section -->
    <section id="contributors" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="img/chibi.png" class="img-fluid " alt="" />
            </div>
            <div class="col-md p-5">

                <?php
                if(isset($_SESSION['userid'])) {
                    
                    echo '
                    
                    <h2>Admin Slack Channel</h2>
                    <p class="lead">
                        Visit the private admins Slack channel to better track and coordinate your work with others.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
                        reiciendis eius autem eveniet mollitia, at asperiores suscipit
                        quae similique laboriosam iste minus placeat odit velit quos,
                        nulla architecto amet voluptates?
                    </p>
                    <a href="#" class="btn btn-dark mt-3">
                        Go!
                    </a>';
                }
                
                else {

                    echo '
                    
                    <h2>Become a contributor</h2>
                    <p class="lead">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Similique deleniti possimus magnam corporis ratione facere!
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
                        reiciendis eius autem eveniet mollitia, at asperiores suscipit
                        quae similique laboriosam iste minus placeat odit velit quos,
                        nulla architecto amet voluptates?
                    </p>
                    <a href="register.php" class="btn btn-dark mt-3">
                        Contribute
                    </a>';
            
                }
                
                ?>
                
            </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="p-5 bg-dark text-light">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">
            <h2>Frequently Asked Questions</h2>
            <p class="lead">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Similique deleniti possimus magnam corporis ratione facere!
            </p>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
              reiciendis eius autem eveniet mollitia, at asperiores suscipit
              quae similique laboriosam iste minus placeat odit velit quos,
              nulla architecto amet voluptates?
            </p>
            <a href="#" class="btn btn-light mt-3">
              <i class="bi bi-chevron-right"></i> Read More
            </a>
          </div>
          <div class="col-md">
            <img src="img/119212-hero-academia-my-bakugo-katsuki.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>

    <?php include 'footer.php';?>