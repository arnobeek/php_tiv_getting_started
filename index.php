<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP TRIAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2 style="margin-left: 120px;">Create new user</h2>
    <form class="container" style="margin-top: 50px;" method="POST" action="include.php">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div data-mdb-input-init class="form-outline" >
              <input type="text" id="fname" name="fname" class="form-control" style="border: 1px solid black;"/>
              <label class="form-label" for="form3Example1">First name</label>
            </div>
          </div>
          <div class="col">
            <div data-mdb-input-init class="form-outline">
              <input type="text" id="lname" name="lname" class="form-control" style="border: 1px solid black;"/>
              <label class="form-label" for="form3Example2">Last name</label>
            </div>
          </div>
        </div>
      
        <!-- 2 column grid layout with text inputs for the email and phone number -->
        <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline" >
                <input type="email" id="email" name="email" class="form-control" style="border: 1px solid black;"/>
                <label class="form-label" for="form3Example1">E-mail</label>
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <input type="tel" id="pnumber" name="pnumber" class="form-control" style="border: 1px solid black;"/>
                <label class="form-label" for="form3Example2">Phone Number</label>
              </div>
            </div>
          </div>
      
        <!-- 2 column grid layout with text inputs for the passord and confirm password -->
        <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline" >
                <input type="password" id="password" name="password" class="form-control" style="border: 1px solid black;"/>
                <label class="form-label" for="form3Example1">Password</label>
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <input type="password" id="cpassword" name="cpassword" class="form-control" style="border: 1px solid black;"/>
                <label class="form-label" for="form3Example2">Confirm Password</label>
              </div>
            </div>
          </div>

          <!-- 2 column grid layout with dropdown for the User Role and User FPO-->
        <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline" >
                <select class="form-select" aria-label="Default select example" style="border: 1px solid black;" id="user" name="user">
                    <option selected>Select user role</option>
                    <option value="s" name="user" id="student">Student</option>
                    <option value="e" name="user" id="employee">Employee</option>
                    <option value="E" name="user" id="employer">Employer</option>
                  </select>
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <select class="form-select" aria-label="Default select example" style="border: 1px solid black;" id="fpo" name="fpo">
                    <option selected>Select user FPO</option>
                    <option value="o" name="fpo" id="one">One</option>
                    <option value="t" name="fpo" id="two">Two</option>
                    <option value="w" name="fpo" id="three">Three</option>
                  </select>
              </div>
            </div>
          </div>
      
        <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4" style="background-color: rgb(4, 93, 209); margin-left: 70px; width: 90%">SAVE</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>