<?php include('scripte.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lbrary</title>
    <link rel="stylesheet" href="../assets/styles/loginStyle.css">
     <!-- BEGIN parsley css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
  <!-- END parsley css-->
</head>
<body> 
    <section class="vh-100" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6">
          <div class="card" style="border-radius: 1rem;">
            <div class="">
              <div class=" align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="../index.php" method="post" data-parsley-validate>
                    <!-- <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Logo</span>
                    </div> -->

                    <h5 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">Sign up your new account</h5>

                    <div class="form-outline mb-4 d-flex">
                      <input type="text" id="txtName" name="txtName" class="form-control form-control-lg" placeholder="Name"  data-parsley-group="block-2"/>
                      <input type="text" id="txtLastName" name="txtLastName" class="form-control form-control-lg" placeholder="Last Name" required/>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="date" id="dateId" name ="dateId" class="form-control form-control-lg" required/>
                    </div>

                    <div class="form-outline mb-4 d-flex">
                      <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="Email address" required data-parsley-type="email"/>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="password" name="passxord" class="form-control form-control-lg" placeholder="Password" required data-parsley-length="[8, 40]"  required/>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="CnfPassword" name="CnfPassword" class="form-control form-control-lg" placeholder="confirme Password" required data-parsley-equalto="#password"/>
                    </div>

                    <div class="pt-1 mb-4">
                      <input class="btn btn-dark btn-lg btn-block" type="submit" name="signUp" value="sign up">
                    </div>

                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">You have an account? <a href="../index.php"
                        style="color: #2233f0;">Sign in</a></p>
                    <!-- <a href="!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a> -->

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- END jquery js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- END parsley js-->
</body>
</html>