<?php
    session_start();
    require("../../signup/server.php");

    require("../../signup/function.php");
    $company = "";
    $email = "";
    $number = "";
    $gst = "";
    $id = "";
    $custid = "";
    
    function getName() {
        $n=12;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = 'DONBTN';
    
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
    
        return $randomString;
    }
    if(isset($_GET['custid'])){
        $custid = get_safe_real($_GET['custid']);
        $r = mysqli_fetch_assoc(mysqli_query($con,"select * from add_cust where custid='$custid'"));
        $id=$r['id'];
        $company = $r['Comindname'];
        $email = $r['email'];
        $number = $r['cont'];
        $gst = $r['gst'];
    }
    
    if(isset($_POST['submit'])){
        $id=$_SESSION['userid'];
        $company = get_safe_real($_POST['company']);
        $email = get_safe_real($_POST['email']);
        $number = get_safe_real($_POST['number']);
        $gst = get_safe_real($_POST['gst']);
         
        if($custid==''){
            $custid = getName();  
            $qry = mysqli_query($con,"insert into add_cust(Comindname,email,cont,gst,custid,id) values('$company','$email','$number','$gst','$custid','$id')");
        }
        else
        $qry = mysqli_query($con,"update  add_cust set Comindname ='$company' ,email='$email', cont='$number', gst='$gst' where custid = '$custid'");
        header('location:Customers.php');
    }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="Customers.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Customers</title>
</head>
<body>
    <div class="create" id="#create"  style="display:none;">
        <form method="post">    
        <div class="form">
             <h1>Add Customer</h1>
             <br>
             <br>
             <label for="description">Company/Individual Name</label>
            <input type="text" id="description" name="company" value = "<?php echo $company ?>">
            <label for="close">Email</label>
            <input type="text" name="email" id="close" value = "<?php echo $email ?>">
            <label for="customer">Contact Number</label>
            <input type="text" name="number" id="customer" value = "<?php echo $number ?>">
            <label for="name">GSTIN</label>
            <input type="text" name="gst" id="name" value = "<?php echo $gst ?>">
            <br>
            <!-- onclick="cancel()" -->
            <input type = "submit" name="submit" class="btn-2" value="Save" onclick="cancel()">
            <br>
        </div>
        
        </form>
        </div>
        </div>
    
    
    <nav class="navbar">
        <div class="title"> B-PAY</div>
        

        <div class="navbar">
            <ul >
                <li>
                    <div class="click" style="background: #f8ba57;">
                     <a href="#">   
                         <i class="fa fa-user" aria-hidden="true"></i>
                       My Account 
                     </a>  
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div  class="account invi">
        <div class="first">
            <div class="middle">
                <i class="fa fa-building" style="font-size: xxx-large;" aria-hidden="true"></i>
                <div class="merchant">
                <h2><?php echo $_SESSION['ADMIN_USER'] ?></h2>
         <h5><?php echo $_SESSION['userid'] ?></h5>
       
        </div>
       </div>
   </div>
   <div>
       <div class="second">
        <h3>Loged In as</h3>
        <div class="email">
         <i class="fas fa-user-circle"></i>
         <h5 style="display: inline;"><?php echo  $_SESSION["email"]?></h5>
                </div>
                <a href="../logout.php" style=" text-decoration: none"><button class="button">Log Out</button></a>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="side">
    <nav class="sidebar">
    
         <div class="menu-bar">
             <div class="menu">
                 <ul class="menu-links">
                     <li class="nav-links">
                         <a href="../dashboard.php">
                            <i class="fa fa-home icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Home
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="../transaction/transaction.php">
                            <i class="fa fa-reply-all icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                            Transactions
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="../settlements/settlements.php">
                            <i class="fa fa-bars icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Settlements
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="#">
                            <i class="fa fa-window-restore icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Invoices
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="../Payment_Link/Payment_Link-1.php">
                            <i class="fa fa-link icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Payment Links
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="../payment_page/payment_page.php">
                            <i class="fa fa-envelope-open icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Payment Pages
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="../payment_button/index.php">
                            <i class="fa fa-tasks icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Payment Buttons
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="../route_pages/RoutePage.php">
                            <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Route
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="#"><i class="fa fa-bell icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Subscriptions
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="../qrcode/QR.php">
                            <i class="fa fa-qrcode icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                QR Codes
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="../smartcollect/collect.php">
                            <i class="fa fa-upload icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Smart Collect
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="./Customers.php">
                            <i class="fa fa-users icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Customers
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="#">
                            <i class="fa fa-shopping-bag icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Offers
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="#">
                            <i class="fa fa-shopping-cart icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Checkout Rewards
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="../report/repo.php">
                            <i class="fa fa-sticky-note icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Reports
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="../Account/account.php">
                            <i class="fa fa-home icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                My Account
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="../Settings/settings.php">
                            <i class="fa fa-cogs icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                Settings
                            </span>
                         </a>
                     </li>
                     <li class="nav-links">
                         <a href="#">
                            <i class="fa fa-download icon" aria-hidden="true"></i>
                            <span class="text nav-text text ">
                                App Store
                            </span>
                         </a>
                     </li>
                 </ul>
             </div>
            </nav>
            
        </div>
        <div class="container">
            <nav class="navi">
                <span>Customers</span>
                <button class="btn" id="change" onclick="create()">+ Create Customer</button>
           </nav>
           <table>
               <thead>
                   <tr>
                       <th>Customer Id</th>
                       <th>Customer Name</th>
                       <th>Email Id</th>
                       <th>Contact</th>
                       <th>Actions</th>
                   </tr>
               </thead>
               <tbody>
               <?php
                    $sql = "select * from add_cust";
                    $res = mysqli_query($con,$sql);
                    if(mysqli_num_rows($res)>0){
                    while($row = mysqli_fetch_assoc($res)){
                ?>
                    <tr>
                       <!-- <td>
                           <h4>There are no Customers yet!!</h4>
                       </td> -->
                       
                       <td><?php echo $row['custid']?></td>
                       <td><?php echo $row['Comindname']?></td>
                       <td><?php echo $row['email']?></td>
                       <td><?php echo $row['cont']?></td>
                       <td><a href="?custid=<?php echo $row['custid']?>"><button class="ed"  onclick="create()">Edit</button></a></td>
                   </tr>
                   <?php                      } 
                    }
                   ?>
  
                   
               </tbody>
           </table>
        </div>

    <script>
    <?php
     if(isset($_GET['custid'])){
    ?>
    create();
    <?php
     }?>
        $(".click").click(function(){
            $(".account").toggle();
        })
        $("body").click(function(){
            $(".account").addClass("invi");
        })
        function create() {
document.getElementById('#create').style.display = "block";
}
function cancel() {
document.getElementById('#create').style.display = "none";
}
	
    </script>
</body>
</html>