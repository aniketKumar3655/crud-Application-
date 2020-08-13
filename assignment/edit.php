<?php
$a=mysqli_connect("localhost","root","","student");
$id=$_REQUEST['id'];
$query = "SELECT * from fedata where id='".$id."'"; 
$result = mysqli_query($a, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php
$status = "";
if(isset($_POST['submit']))
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$pincode =$_REQUEST['pincode'];
$dob =$_REQUEST['dob'];
$mobile =$_REQUEST['mobile'];
$email =$_REQUEST['email'];
$update="update fedata set name='".$name."', pincode='".$pincode."' , dob='".$dob."' , mobile='".$mobile."' , email='".$email."' where id='".$id."'";
mysqli_query($a, $update) or die(mysqli_error());
$status = " Updated Successfully. </br></br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>



<div class="row">
          <div class="col-12 col-lg-8 m-auto">
   <div class="multisteps-form__content">
    <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
					<h4 id="heading">Update Student Information  </h4>
					<form name="form" method="post" action=""> 
					<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
					<label class="fieldlabels">  Name</label>
                      <input class="multisteps-form__input form-control" type="text"  value="<?php echo $row['name'];?>" name="name" placeholder="Enter Full Name"/>
                    </div>
                    
                  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
					<label class="fieldlabels"> Email </label>
                      <input class="multisteps-form__input form-control"  value="<?php echo $row['email'];?>" type="text" name="email" placeholder="Enter Full Name"/>
                    </div>
                    <div class="col-12 col-sm-6">
					<label class="fieldlabels"> Mobile </label>
                      <input class="multisteps-form__input form-control" value="<?php echo $row['mobile'];?>"  type="text" name="mobile" placeholder="Enter Full Name"/>
                    </div>
                  </div>
				   <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
					<label class="fieldlabels"> Date of Birth </label>
                      <input class="multisteps-form__input form-control"  value="<?php echo $row['dob'];?>" type="date" name="dob" placeholder="Enter Full Name"/>
                    </div>
                    <div class="col-12 col-sm-6">
					<label class="fieldlabels"> Pincode </label>
                      <input class="multisteps-form__input form-control"  value="<?php echo $row['pincode'];?>" type="text" name="pincode" placeholder="Enter Full Name"/>
                    </div>
                  </div>
				  <br><br>
<p><input name="submit" type="submit"  class="btn btn-primary" value="Submit" /></p>
				  <p style="color:#FF0000;"><?php echo $status; ?></p>
				  </div>
				  </div>
				  </div>
				  </form>
				  <?php } ?>
				  </div>


</div>
</div>
</body>
</html>