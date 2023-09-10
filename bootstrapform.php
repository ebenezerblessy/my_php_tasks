<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<? php
 <div class="container">
  <h2>My Bootstrap Form</h2>
  <form class="form inline" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dob">DOB</label>
      <div class="col-sm-10">          
        <input type="dob" class="form-control" id="number" placeholder="Enter date of birth" name="dob">
      </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Fathers name</label>
      <div class="col-sm-10">          
        <input type="fathers name" class="form-control" id="fname" placeholder="Enter father's name" name="fname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Gender</label>
      <input type="radio" name="gender">
      <label for="gender">male</label><br><br>  
      <input type="radio" name="gender">
      <label for="radio">female</label><br><br>
      <div class="form-group">
      <label class="control-label col-sm-2" for="country">country</label>
      <div class="col-sm-10">          
        <input type="country" class="form-control" id="country" placeholder="Enter country" name="country">
      </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="state">State</label>
      <div class="col-sm-10">          
        <input type="state" class="form-control" id="state" placeholder="Enter state" name="state">
      </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Email Id</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter email id" name="email">
      </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Mobile number</label>
      <div class="col-sm-10">          
        <input type="mobile number" class="form-control" id="number" placeholder="Enter mobile number" name="mobile">
      </div>
      </div>
             
      <div class="col-sm-offset-2 col-sm-10">
      <label class="control-label col-sm-2" for="Hobbies">Hobbies</label>
        <div class="checkbox">
          <label><input type="checkbox" name="Hobbies"> gardening</label>
          <label><input type="checkbox" name="Hobbies"> painting</label>
          <label><input type="checkbox" name="Hobbies"> drawing</label>
          <label><input type="checkbox" name="Hobbies"> video games</label>
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="qualification">Educational qualification</label>
      <div class="col-sm-10">          
        <input type="qualification" class="form-control" id="qualification" placeholder="Enter Educational qualification" name="state">
      </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>

</div>
?>
</body>
</html>
