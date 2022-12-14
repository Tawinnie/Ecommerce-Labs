<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Registration Form</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create Your Account</h2>

              <form action="../actions/process_registration.php" method="POST">

                <div class="form-outline mb-4">
                  <input type="text" name="customer_name" id="fullname" class="form-control form-control-lg" />
                  <label class="form-label" for="fullname">Your Full Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="customer_email" id="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email">Email address</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="customer_country" id="country" class="form-control form-control-lg" />
                  <label class="form-label" for="country">Country</label>
                </div>
                
                <div class="form-outline mb-4">
                  <input type="text" name="customer_city" id="city" class="form-control form-control-lg" />
                  <label class="form-label" for="city">Your City</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="customer_contact" id="country" class="form-control form-control-lg" />
                  <label class="form-label" for="contact">Your Phone Number</label>
                </div>


                <div class="form-outline mb-4">
                  <input type="password" name="customer_pass" id="pass" class="form-control form-control-lg" />
                  <label class="form-label" for="pass">Password</label>
                </div>


                <div class="d-flex justify-content-center">
                  <button type="submit" name="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="#!"
                    class="fw-bold text-body"><u>Sign in here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>