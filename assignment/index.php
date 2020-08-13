<?php
$a=mysqli_connect("localhost","root","","student");
$status = "";
if(isset($_POST['submit'])){
    $name =$_REQUEST['name'];
    $email = $_REQUEST['email'];
	 $mobile = $_REQUEST['mobile'];
$dob = $_REQUEST['dob'];
$pincode = $_REQUEST['pincode'];
    $query="insert into fedata(`name`,`email`,`mobile`,`dob`,`pincode`)values ('$name','$email','$mobile','$dob','$pincode')";
    mysqli_query($a,$query);
    $status = "Student Record Inserted Successfully.";
}
?>

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
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>




</div>
</div>

 <div class="row">
          <div class="col-12 col-lg-8 m-auto">
   <div class="multisteps-form__content">
    <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
					<h4 id="heading">Student Information  </h4>
					<form name="form" method="post" action=""> 
					<label class="fieldlabels">  Name</label>
                      <input class="multisteps-form__input form-control" type="text" name="name" placeholder="Enter Full Name"/>
                    </div>
                    
                  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
					<label class="fieldlabels"> Email </label>
                      <input class="multisteps-form__input form-control" type="text" name="email" placeholder="Enter Full Name"/>
                    </div>
                    <div class="col-12 col-sm-6">
					<label class="fieldlabels"> Mobile </label>
                      <input class="multisteps-form__input form-control" type="text" name="mobile" placeholder="Enter Full Name"/>
                    </div>
                  </div>
				   <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
					<label class="fieldlabels"> Date of Birth </label>
                      <input class="multisteps-form__input form-control" type="date" name="dob" placeholder="Enter Full Name"/>
                    </div>
                    <div class="col-12 col-sm-6">
					<label class="fieldlabels"> Pincode </label>
                      <input class="multisteps-form__input form-control" type="text" name="pincode" placeholder="Enter Full Name"/>
                    </div>
                  </div>
				  <br><br>
<p><input name="submit" type="submit"  class="btn btn-primary" value="Submit" /></p>
				  <p style="color:#FF0000;"><?php echo $status; ?></p>
				  </div>
				  </div>
				  </div>
				  </form>
				  </div>
</body>
</html>
<h2>Student Records</h2>

   <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th >Sr. No.</th>
				    <th >Name </th>
                  <th >Email</th>
				   <th >Mobile </th>
				    <th >Dath of Birth</th>
					 <th >Pincode</th>
					  <th >Edit</th>
					   <th >Delete</th>
                </tr>
				
                </thead>
				
				<div class="col-md-4">
			
				
			</div>
                <tbody>
                  <?php 
					$count=0;	
			
$q="Select * from fedata";
$result = mysqli_query($a,$q);
	while($row =mysqli_fetch_array($result)):
	$count++;
?>
                <tr>
					<td><?php echo $count; ?></td>   
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>	
			   <td><?php echo $row['mobile'];?></td>	
			      <td><?php echo $row['dob'];?></td>	
					  <td><?php echo $row['pincode'];?></td> 
					 <td>
										  
                      <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" alt="Edit user" title="" data-original-title="Edit user"><i class="fa fa-edit"></i></a>
					  </td>
					  <td>
                      <a href="delete.php?id=<?php echo $row['id']; ?>" onClick="return cnfrmation();" class="btn btn-danger btn-sm" data-toggle="tooltip" alt="Delete user" title=""  data-original-title="Delete user"><i class="fa fa-trash"></i></a>
					 </td>
                </tr>
  <?php endwhile;?>
  
                </tbody>
              </table>