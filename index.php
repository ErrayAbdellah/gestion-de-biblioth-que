<?php include('views/scripte.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/loginStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lbrary</title>
    
</head>
<body style="background-color: #DDC8B1;"> 
    <section class="vh-100" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6">
          <div class="card" style="border-radius: 1rem;">
            <div class="">

              <div class=" align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form  method="post">

                    <h5 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">Sign into your account</h5>

                    <div class=" mb-4">
                      <input type="email" id="SignIn_Email" name="SignIn_Email" class="form-control form-control-lg" placeholder="Email address" required/>
                    </div>

                    <div class=" mb-4">
                      <input type="password" id="SignIn_password" name="SignIn_password" class="form-control form-control-lg" placeholder="Password" required/>
                    </div>

                    <div class="pt-1 mb-4">
                    <input type="submit" class="btn btn-dark btn-lg btn-block"  name="signIn" value="Login">
                    </div>

                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="views/SignUp.php"
                        style="color: #2233f0;">Register here</a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
</body>
</html>