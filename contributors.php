<?php include 'header.php';?>

<section class="text-dark text-center my-5">
        
        <h2 class="pt-5">Login</h2>

        <div class="container">
            <div class="input-group justify-content-center">
                <form action="includes/login.inc.php" class="d-flex flex-column w-50" method="POST">
                    <div class="my-2">
                        <label for="userID" class="form-label">Username</label>
                        <input type="text" class="form-control" name="userID"  id="userID" maxlength="20" autocomplete="off">
                    </div>

                    <div class="my-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password"  id="password" maxlength="20" autocomplete="off">
                    </div>

                    <div class="my-3">
                        <input type="submit" name="submit" value="Login" class="btn btn-primary w-100"> 
                    </div>
                    
                </form>
            </div>
        </div>

        <p class="text-muted">Do you want to become a contibutor?</p>
        <a href="register.php" style="text-decoration: none ; font-size: 20px;">Register Here</a>
       
    </section>

<?php include 'footer.php';?>