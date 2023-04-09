<?php include 'header.php'?>


<section class="text-dark text-center my-5">
        
        <h2 class="pt-5">Register</h2>

        <div class="container">
            <div class="input-group justify-content-center">
                <form action="includes/register.inc.php" class="d-flex flex-column w-50" method="POST">
                    
                    <div class="my-2">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="fullname"  id="fullname" maxlength="20" autocomplete="off">
                    </div>

                    <div class="my-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email"  id="email" autocomplete="off">
                    </div>

                    <div class="my-2">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username"  id="username"  autocomplete="off">
                    </div>

                    <div class="my-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password"  id="password">
                    </div>

                    <div class="my-2">
                        <label for="r_password" class="form-label">Repeat Password</label>
                        <input type="password" class="form-control" name="r_password"  id="r_password">
                    </div>

                    <div class="my-3">
                        <input type="submit" name="submit" value="Sign Up" class="btn btn-primary w-100"> 
                    </div>
                    
                </form>

            </div>
        </div>
 
    </section>


<?php include 'footer.php'?>