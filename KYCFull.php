<?php
session_start();
include("../../signup/function.php");
require("../../signup/server.php");

$id = $_SESSION['userid'];
$query=mysqli_query($con,"select * from signup where id='$id' ");
$row=mysqli_fetch_array($query);
$type = $row['btype'];
$cno = $row['cno'];
$name =$accno =$reaccno =$branch= $ifsc ="";
$pan = "";
$panname = "";
$add = "";
$blabel = "";
$pin = "";
$city = "";
$state = "";
$Bus_type = "";
  $Category = "";
  $BDesc = "";
  $PaymentMehod="";
  $WebsiteURL = "";
  $AppLink = "";

if(isset($_POST['submit4'])){
	//bank det
	$name= $_POST['name'];
	$accno= $_POST['accno'];
	$reaccno= $_POST['reaccno'];
	$branch= $_POST['branch'];
	$ifsc= $_POST['ifsc'];
	//b overview
	$Bus_type = get_safe_real($_POST['Bus_type']);
	$Category = get_safe_real($_POST['Category']);
	$BDesc = get_safe_real($_POST['BDesc']);
	$PaymentMethod=get_safe_real($_POST['PaymentMethod']);
	$WebsiteURL = get_safe_real($_POST['WebsiteURL']);
	$AppLink = get_safe_real($_POST['AppLink']);
	// bus details
	$pan=get_safe_real($_POST['pan']);
	$panname=get_safe_real($_POST['panname']);
	$add=get_safe_real($_POST['add']);
	$blabel=get_safe_real($_POST['blabel']);
	$pin=get_safe_real($_POST['pin']);
	$city=get_safe_real($_POST['city']);
	$state=get_safe_real($_POST['state']);
	
    mysqli_query($con,"insert into b_details(PAN,Name,BLabel,Address,Pin,City,state,id) values('$pan','$panname','$blabel','$add','$pin','$city','$state','$id')");

	$qry = mysqli_query($con,"insert into business_overview(Bus_type,Category,BDesc,id,PaymentMethod,WebsiteURL,AppLink) values('$Bus_type','$Category','$BDesc','$id','$PaymentMethod','$WebsiteURL','$AppLink')");
	
	// $id = $_SESSION['userid'];
if ($_POST['reaccno'] != $_POST['accno']) {
		echo "Account number should match! Try Again";
	}
	else{
		mysqli_query($con,"insert into bank_det(id,name,accno,reaccno,branch,ifsc) values('$id','$name','$accno','$reaccno','$branch','$ifsc')");
	}

	// header('location:kyc.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyc</title>
    <link href="kyc.css" rel="stylesheet">
</head>
<body>

    <!--Main Navbar-->
    <nav class="navbar">
		<div class="brand-title">B-PAY</div>
		<a href="#" class="toggle-button">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</a>
		<div class="navbar-links">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Payments</a></li>
				<li><a href="#">Deals</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="#">My Account</a></li>
			</ul>
		</div>
	</nav>

    <!--Forms-->
    <div class="main">
        
        <div class="nav">
            <div>
				<p class="title">KYC Form</p>
                <p id="color">Complete and submit the form to accept the payments.</p>
			</div>
			<div class="item" id="item">
				<p>Contact Info</p>
			</div>
			<div class="item">
				<p>Business Overview</p>
			</div>
			<div class="item">
				<p>Business Details</p>
			</div>
            <div class="item">
				<p>Bank Details</p>
			</div>
            <div class="item">
				<p>Upload</p>
			</div>
        </div>

	<form action="" method="post">
        <div class="form1">
			<p>
				<label for="t1">Contact Name</label>
				<input type="text" value="<?php echo $_SESSION['ADMIN_USER']?>" id="t1" placeholder="Your Name" size="15" >
			</p>
			<p>
				<label for="number">Contact Number</label>
				<input type="tel" id="number" value="<?php echo $cno?>" name="phone" size="10" placeholder="Contact Number"
					 maxlength="12" >
			</p>
            <p>
				<label for="t1">Contact Email</label>
				<input type="email" value="<?php echo $_SESSION['email']?>" id="mail" placeholder="Contact Email"  >
			</p>
            <div>
                <button type="button" class="next1">Save & Next</button>
            </div>
		</div>



        <div class="form2" id="form2">
		<p>
				<label for="t2">Business Type</label>
				<input type="text" name="Bus_type" id="t2" placeholder="Type"  value="<?php echo $type;  ?> "size="20" maxlength="20" >
			</p>
			<p>
				<label for="t3">Business Category</label>
				<input type="text" name="Category" id="t3" placeholder="Category" size="20" maxlength="20"  >
			</p>
			<p>
				<label style="float:left; width:205px;" for="textarea">Description</label>
				<textarea id="textarea" name="BDesc" size="50"
					placeholder="Enter the Description"></textarea>
			</p>
			<p>
				<label>Payment Method</label>
				<input class="radio" type="radio" name="PaymentMethod" id="r1" onclick="show1()" value=1>
				<label id="l" for="r1">With Website/app</label>
				<input class="radio" type="radio" name="PaymentMethod" id="r2" onclick="show2()" value=2>
				<label id="l" for="r2">Without Website/app</label>
			</p>
			<div id="f1" class="f1">
				<label class="url">Website URL</label>
				<input type="url" name="WebsiteURL" placeholder="Enter URL"  ><br>
				<label class="url">App Link </label>
				<input type="url" name="AppLink" placeholder="Enter Link"  >
			</div>
			<div id="f2" class="f2">
				<ul>
					<li>Receive quick payments from your customers using B-Pay features.</li>
					<li>You can change your payment method anytime in future.</li>
				</ul>
			</div>
            <div>
                <button type="button" name ="boverview" class="next2">Save & Next</button>
            </div>
		</div>
		

        <div class="form3">
		<p>
				<label for="t4">PAN Number </label>
				<input type="text" id="t4"  name ="pan" size="10" placeholder="Enter your PAN Number" maxlength="10" >
			</p>
			<p>
				<label for="t5">PAN Holder's Name</label>
				<input type="text" size="15" name ="panname"  id="t5" placeholder="Holder's Name" >
			</p>
			<p>
				<label for="t6">Billing Label </label>
				<input id="t6" type="text"name ="blabel"  >
			</p>
			<p>
				<label for="t7">Address </label>
				<input type="text" id="t7" size="30" name ="add"  placeholder="Enter your Street Address" >
			</p>
			<p>
				<label for="n">Pincode </label>
				<input type="text" id="pincode" size="10"  name = "pin" maxlength="10" >
               <!-- <input type="button"  class="btn" value="Get Details" onclick="get_details()">verify</input>      -->
</p>
			<p>
				<label for="t8">City</label>
				<input size="15" id="city" type="text" name ="city" placeholder="Enter your City" maxlength="15"  >
			</p>
			<p>
				<label for="t9">State</label>
				<input size="15" id="state" type="text" name ="state" placeholder="Enter your State" maxlength="15"  >
			</p>
            <div>
                <button class="next3" type="button" name="pincode" >Save & Next</button>
            </div>
		</div>


		<!-- <form action="" method="post"> -->
        <div class="form4">
			<p>
				<label for="t4">Beneficiary Name </label>
				<input name="name" type="text" id="t4" size="10" placeholder="Enter your Beneficiary Name" ><br>
			</p>
			<p>
				<label for="t5">Account Number</label>
				<input name="accno" type="text" size="17" id="t5" placeholder="Enter your Account Number"  maxlength="17"  ><br>
			</p>
			<p>
				<label for="t6">Re-Enter Account Number </label>
				<input name="reaccno" id="t6" type="text" placeholder="Re-Enter Account Number" maxlength="17" ><br>
			</p>
			<p>
				<label for="t7">Branch </label>
				<input name="branch" type="text" id="t7" size="30" placeholder="Enter your Branch Name" ><br>
			</p>
			<p>
				<label for="t8">IFSC Code</label>
				<input name="ifsc" size="15" id="t8" type="text" maxlength="15" >
			</p>
            <div>
                <button name="submit4" type="submit" class="next4">Save & Next</button>
            </div>
		</div>
	<!-- </form> -->
	</form>


<div class="form5">

<?php
	//  if ($_POST['reaccno'] != $_POST['accno']) {
	// 	echo "Account number should match! Try Again";
	//}
	?>
     <p>
		
	<label for="file">Profile Photo</label>
	<input type="file" id="file">
                <!-- <div class="last">
                    <input type="file" id="file">
                    <label for="file">
                        <i><img src="./upload_file.png"></i>
                        <p>Drop your file here or<br> <span>Click here to upload.</span></p>
                    </label> 
                </div> -->
</p>
<p>

				<label>Adhar Card</label> 
				<label for="file2" style="width:230px; color: #87878f;">Front Side Image</label>
				<label  for="file3" style="color: #87878f;">Rear Side Image</label>
				<br>
				<input style="margin-left: 200px; width:222px;"type="file" id="file2">
				<input type="file" id="file3">
                <!-- <div class="last2" >
					
                    <input type="file" id="file1">
					
                    <label for="file1">
                        <i><img src="./upload_file.png"></i>
                        <p>Drop your file here or<br> <span>Click here to upload.</span></p>
                    </label>
               
					<input type="file" id="file2">
					<label for="file2" style="margin-left: 25px;">
                        <i><img src="./upload_file.png"></i>
                        <p>Drop your file here or<br> <span>Click here to upload.</span></p>
                    </label>

                </div> -->

</p>

<p>
	<label for="file3">Pasport</label>
	<input type="file" id="file3">
                <!-- <div class="last">
                    <input type="file" id="file3">
                    <label for="file3">
                        <i><img src="./upload_file.png"></i>
                        <p>Drop your file here or<br> <span>Click here to upload.</span></p>
                    </label>
                </div> -->
</p>

<p>
	<label for="file4">Business Registeration</label>
	<input type="file" id="file4">
                <!-- <div class="last">
                    <input type="file" id="file4">
                    <label for="file4">
                        <i><img src="./upload_file.png"></i>
                        <p>Drop your file here or<br> <span>Click here to upload.</span></p>
                    </label>
                </div> -->
</p>

<p>
	<label for="file5">Company PAN</label>
	<input type="file" id="file5">
                <!-- <div class="last">
                    <input type="file" id="file5">
                    <label for="file5">
                        <i><img src="./upload_file.png"></i>
                        <p>Drop your file here or<br> <span>Click here to upload.</span></p>
                    </label>
                </div> -->
</p>

<div>
	<button >Submit</button>
</div>

</div>

    </div>

    <script src="kyc.js"></script>
</body>
</html>