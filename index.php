<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP</title>
</head>
<body >
<form class="container" style="margin-top: 100px;" method="POST" action="include.php">
  <!--first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="fname" class="form-control" name="fname" style="border: 1px solid black;"/>
        <label class="form-label" for="form3Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="lname" class="form-control" name="lname" style="border: 1px solid black;"/>
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>

  <!--Email and telephone-->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="email" id="email" class="form-control" name="email" style="border: 1px solid black;"/>
        <label class="form-label" for="form3Example1">E-mail</label>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="tel" id="pnumber" class="form-control" name="pnumber" style="border: 1px solid black;"/>
        <label class="form-label" for="form3Example2">Telephone</label>
      </div>
    </div>
  </div>

  <!-- Password input -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="password" id="password" class="form-control" name="password" style="border: 1px solid black;"/>
        <label class="form-label" for="form3Example1">Password</label>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="password" id="cpassword" class="form-control" name="cpassword" style="border: 1px solid black;"/>
        <label class="form-label" for="form3Example2">Confirm password</label>
      </div>
    </div>
  </div>

  <!-- USER and FPO -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline" >
        <select class="form-select" aria-label="Default select example" style="border: 1px solid black;" id="user" name="user">
            <option selected>Select user role</option>
            <option value="student" name="user" id="student">Student</option>
            <option value="employee" name="user" id="employee">Employee</option>
            <option value="employer" name="user" id="employer">Employer</option>
          </select>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <select class="form-select" aria-label="Default select example" style="border: 1px solid black;" id="fpo" name="fpo">
            <option selected>Select user FPO</option>
            <option value="one" name="fpo" id="one">One</option>
            <option value="two" name="fpo" id="two">Two</option>
            <option value="three" name="fpo" id="three">Three</option>
          </select>
      </div>
    </div> 
  </div>


  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4" style="width: 600px;margin-left: 300px;">SAVE</button>

</form>
    
</body>
</html>