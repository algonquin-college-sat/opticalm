<!DOCTYPE html>


<html lang="en">
<?php include 'header.php';?>
    <div class="form-group" style="font-size:x-large ; font-family: Arial, Helvetica, sans-serif;">


      <form action="index1.php" class="row g-3" method="POST">
        <div class="col-md-6">
          <label for="fname" class="form-label">First Name*</label>
          <input type="text" class="form-control 1" id="fname" name="fname" placeholder="First Name" required>
        </div>
        <div class="col-md-6">
          <label for="date" class="form-label">Date of birth</label>
          <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="col-md-6">
          <label for="lname" class="form-label">Last Name*</label>
          <input type="text" class="form-control" id="lname" name="lname"  placeholder="Last Name" required>
        </div>
        <div class="col-md-6">
          <label for="inputEmail">Email Address*</label>
          <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="email@domain.com" required>
        </div>
        <div class="col-md-6">
          <label for="inputphone" class="form-label">Phone Number</label>
          <input type="text" class="form-control" id="inputphone" name="inputphone" placeholder="E.g., +1 300405000">
        </div>
        <div class="col-md-6">
          <label for="inputAddress" class="form-label">Street Address</label>
          <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="E.g., 42 Wallaby Way">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity" name="inputCity" placeholder="E.g., Toronto">
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">State/Province</label>
          <input type="text" class="form-control" id="inputState" name="inputState" placeholder="E.g., Ontario">

        </div>
        
        <div class="col-md-6">
          <label for="inputCountry" class="form-label">Country</label>
          <input type="text" class="form-control" id="inputCountry" name="inputCountry" placeholder="E.g., Canada">
        </div>
        <div class="col-md-6">
          <label for="inputZip" class="form-label">Zip/Postal Code</label>
          <input type="text" class="form-control" id="inputZip" name="inputZip" placeholder="E.g., 2000">
        </div>
        <div class="col-md-6">
          <label for="inputGender" class="form-label">Gender</label>
          <select id="inputGender" class="form-control" name="inputGender" placeholder="Select Gender">
            <option selected >Male</option>
            <option>Female</option>
          </select>
        </div>
    </div>
    <br></br>
      <div class="form-group">
        <div class="col-md-12">
            <a href="#" class="btn btn-primary">Back</a>
            <button  class="btn btn-primary" type="submit" >Start Test</button>
        </div>
      </div>
    </form>



    <?php include 'footer.php'; ?>
</html
