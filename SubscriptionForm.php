<?php
session_start();
include("server.php");
//$id=25;

//variable for payments

$status="";
$sub_id="";
$plan_id="";
$count=0;
$query="";
// $id=$_SESSION['Plan_id'];
$id = 149;
//$query="SELECT * FROM payments ";
$sql = "SELECT * FROM subscription where id = '$id'";
if(isset($_POST['Search'])){

    $status=filter_input(INPUT_POST , 'status' , FILTER_SANITIZE_STRING);
    // echo $status;
    $sub_id= ($_POST['Subscription_id']);
    // echo $sub_id;
    $plan_id= ($_POST['Plan_id']);
    // echo $plan_id;
    $count = $_POST['Count'];
    if($plan_id !="") {
    $sql .= " AND plan_id='$plan_id'";
    }
    if($status !="") {
        $sql .= " AND sta='$status'";
    }
    if($sub_id !="") {
        $sql .= " AND sub_id='$sub_id'";
    }

}
$subscription = mysqli_query($con, $sql);

//Plan

$ct="0";
  $pid="";
  $sql = "SELECT * FROM plan WHERE  id='$id'";
  if(isset($_POST['search'])){
     $pid =  ($_POST['plan_id']);
    $ct= ($_POST['count']);
    if($pid !="") {
        $sql .= " AND plan_id='$pid'";
      }
    } 
    $plan = mysqli_query($con,$sql);

?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SubscriptionForm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Route Section!</title>
</head>
<body>
    <div class="wrapper">
        <div class="wrap1">
            
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
                      <h2>Merchant Name</h2>
                      <h5>Merchant ID</h5>
                     </div>
                    </div>
                </div>
                <div>
                    <div class="second">
                     <h3>Loged In as</h3>
                     <div class="email">
                      <i class="fas fa-user-circle"></i>
                      <h5 style="display: inline;">Email id</h5>
                     </div>
                  <button class="button">Log Out</button>
                    </div>
                </div>
            </div>
            <hr>

        </div>

        <div class="sub-wrap">
            <div class="wrap2">
                <!-- SIDEBAR -->
                <div class="side">
                    <nav class="sidebar">
                    
                         <div class="menu-bar">
                             <div class="menu">
                                 <ul class="menu-links">
                                     <li class="nav-links">
                                         <a href="#">
                                            <i class="fa fa-home icon" aria-hidden="true"></i>
                                            <span class="text nav-text text ">
                                                Home
                                            </span>
                                         </a>
                                     </li>
                                     <li class="nav-links">
                                         <a href="#">
                                            <i class="fa fa-reply-all icon" aria-hidden="true"></i>
                                            <span class="text nav-text text ">
                                            Transactions
                                            </span>
                                         </a>
                                     </li>
                                     <li class="nav-links">
                                         <a href="#">
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
                                         <a href="#">
                                            <i class="fa fa-link icon" aria-hidden="true"></i>
                                            <span class="text nav-text text ">
                                                Payment Links
                                            </span>
                                         </a>
                                     </li>
                                     <li class="nav-links">
                                         <a href="#">
                                            <i class="fa fa-envelope-open icon" aria-hidden="true"></i>
                                            <span class="text nav-text text ">
                                                Payment Pages
                                            </span>
                                         </a>
                                     </li>
                                     <li class="nav-links">
                                         <a href="#">
                                            <i class="fa fa-tasks icon" aria-hidden="true"></i>
                                            <span class="text nav-text text ">
                                                Payment Buttons
                                            </span>
                                         </a>
                                     </li>
                                     <li class="nav-links">
                                         <a href="#">
                                            <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                                            <span class="text nav-text text ">
                                                Route
                                            </span>
                                         </a>
                                     </li>
                                     <li class="nav-links">
                                         <a href="SubscriptionForm.html"><i class="fa fa-bell icon" aria-hidden="true"></i>
                                            <span class="text nav-text text ">
                                                Subscriptions
                                            </span>
                                         </a>
                                     </li>
                                     <li class="nav-links">
                                         <a href="#">
                                            <i class="fa fa-qrcode icon" aria-hidden="true"></i>
                                            <span class="text nav-text text ">
                                                QR Codes
                                            </span>
                                         </a>
                                     </li>
                                     <li class="nav-links">
                                         <a href="#">
                                            <i class="fa fa-upload icon" aria-hidden="true"></i>
                                            <span class="text nav-text text ">
                                                Smart Collect
                                            </span>
                                         </a>
                                     </li>
                                     <li class="nav-links">
                                         <a href="#">
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
                                         <a href="#">
                                            <i class="fa fa-sticky-note icon" aria-hidden="true"></i>
                                            <span class="text nav-text text ">
                                                Reports
                                            </span>
                                         </a>
                                     </li>
                                     <li class="nav-links">
                                         <a href="#">
                                            <i class="fa fa-home icon" aria-hidden="true"></i>
                                            <span class="text nav-text text ">
                                                My Account
                                            </span>
                                         </a>
                                     </li>
                                     <li class="nav-links">
                                         <a href="#">
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
                <div>
            </div>

            <div class="wrap3">
                <div class="main">
       
                    <div class="nav">
            
            
                        <div class="item">
                            <p>Subscriptions</p>
                        </div>
                        <div class="item">
                            <p>Plans</p>
                        </div> 
                        <div class="item">
                            <p>Settings</p>
                        </div>
                        <div class="input-box">
                            <button class="add" id="change">+ Create Subscription</button>
                        </div>
            
                    </div>
                <hr>
            
                
                    <div class="form-1">
                    <form method= "POST">
                        <div class="one">
            
                            <div class="one_a">
            
                                <div class="input-box">
                                    <label class="details">Customer Email</label> <br>
                                    <input name = "Customer_Email" type="text" >
                                </div>
                                <!-- &#160; &#160; -->
                                <div class="input-box">
                                    <label class="details">Cards Expiring in</label><br>
                                    <input name="Card_Expiring" type="email" >
                                </div>
                                <div class="input-box">
                                    <label class="details">Status</label><br>
                                    <select  id="status" name="status">
                                        <option value="" selected>All</option>
                                        <option value="Created">Created</option>
                                        <option value="Authenticated">Authenticated</option>
                                        <option value="Active">Active</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Halted">Halted</option>
                                        <option value="Cancelled">Cancelled</option>
                                        <option value="Completed">Completed</option>
                                        <option value="Expired">Expired</option>
                                        <option value="Paused">Paused</option>
                                      </select>
                                      
                                </div>
                                <!-- <div class="input-box">
                                    <button class="btn">Search</button>
                                </div> -->
            
                            </div>
            
                            <div class="one_b">
                                <div class="input-box">
                                    <label class="details">Subscription Id</label><br>
                                    <input name="Subscription_id" type="text" >
                                </div>
                                <div class="input-box">
                                    <label class="details">Plan Id</label><br>
                                    <input name="Plan_id" type="text" >
                                </div>
                                <div class="input-box">
                                    <label class="details">Count</label><br>
                                    <input name="Count" type="Number" >
                                </div>
                                <div class="input-box"><br>
                                    <button name="Search" class="btn" type="submit">Search</button>
                                </div>
                            </div>
                            
            
                        </div>
</form>
            
            
                        <div class="two"> 
        
                            <table>
                                <thead >
                                    <tr class="sub-nav">
                                        <th class="item"><p>Subscription Id</p></th>
                                        <th class="item"><p>Plan Id</p></th>
                                        <th class="item"><p>Subscription Link</p></th>
                                        <th class="item"><p>Customer Id</p></th>
                                        <th class="item"><p>Next Due on</p></th>
                                        <th class="item"><p>Created At</p></th>
                                        <th class="item"><p>Status</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(mysqli_num_rows($subscription)>0){
                    //$i=1;
                        if((int)($count)!=0){
                            $num=$count;
                        while($row=mysqli_fetch_assoc($subscription) and $num>0){

                    ?>
                <tr class="sub-nav2">
                    <td class="item2"><?php echo $row["sub_id"]?></td>
                    <td class="item2"><?php echo $row["plan_id"]?></td>
                    <td class="item2"><?php echo $row["link"]?></td>
                    <td class="item2"><?php echo $row["customer_id"]?></td>
                    <td class="item2"><?php echo $row["due_on"]?></td>
                    <td class="item2"><?php echo $row["createe"]?></td>
                    <td class="item2"><?php echo $row["sta"]?></td>  
                </tr>

            <?php $num--;}}else{
                while($row=mysqli_fetch_assoc($subscription)){?>
                <tr class="sub-nav2">
                    <td class="item2"><?php echo $row["sub_id"]?></td>
                    <td class="item2"><?php echo $row["plan_id"]?></td>
                    <td class="item2"><?php echo $row["link"]?></td>
                    <td class="item2"><?php echo $row["customer_id"]?></td>
                    <td class="item2"><?php echo $row["due_on"]?></td>
                    <td class="item2"><?php echo $row["createe"]?></td>
                    <td class="item2"><?php echo $row["sta"]?></td>  
                </tr>
           <?php }} ?>
    <?php }
    else {?>            
                <tr>
                    <td>
                        <h4 class="empty-table-message" style="text-align: center;background-color:#d3dbd5;padding: 130px;">No  Found!</h4>
                    </td>
                </tr>
    <?php }?> 
                                </tbody>
                            </table>
                            <hr>
                            
                            
                        </div>
                        
                    </div>
            
                    
            
            
                    <div class="form-2">
                        <form method = "post">
                        
                        <div class="one">
            
                            <div class="one_a">
            
                                <div class="input-box">
                                    <label class="details">Plan Id</label><br>
                                    <input name="plan_id" type="text" >
                                </div>
                                <!-- &#160; &#160; -->
                                <div class="input-box">
                                    <label class="details">Count</label><br>
                                    <input name="count" type="text" >
                                </div>

                                <div class="input-box"><br>
                                    <button name="search" type="submit" class="btn">Search</button>
                                </div>
            
                            </div>
            
    </form>
                        </div>
            
            
                        <div class="two"> 

                            <table>
                                <thead >
                                    <tr class="sub-nav">
                                        <th class="item"><p>Plan Id</p></th>
                                        <th class="item"><p>Source Id</p></th>
                                        <th class="item"><p>Plan Name</p></th>
                                        <th class="item"><p>Amount/Name</p></th>
                                        <th class="item"><p>Billing Cycle</p></th>
                                        <th class="item"><p>Created At</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(mysqli_num_rows($plan)>0){
                    //$i=1;
                        if(intval($ct)!=0){
                            $num=$ct;
                        while($row=mysqli_fetch_assoc($plan) and $num>0){

                    ?>
                <tr class="sub-nav2">
                    <td class="item2"><?php echo $row["plan_id"]?></td>
                    <td class="item2"><?php echo $row["source_id"]?></td>
                    <td class="item2"><?php echo $row["plan_name"]?></td>
                    <td class="item2"><?php echo $row["amt_name"]?></td>
                    <td class="item2"><?php echo $row["bill_cycle"]?></td>
                    <td class="item2"><?php echo $row["createe"]?></td>  
                </tr>

            <?php $num--;}}else{
                while($row=mysqli_fetch_assoc($plan)){?>
                <tr class="sub-nav2">
                    <td class="item2"><?php echo $row["plan_id"]?></td>
                    <td class="item2"><?php echo $row["source_id"]?></td>
                    <td class="item2"><?php echo $row["plan_name"]?></td>
                    <td class="item2"><?php echo $row["amt_name"]?></td>
                    <td class="item2"><?php echo $row["bill_cycle"]?></td>
                    <td class="item2"><?php echo $row["createe"]?></td>  
                </tr>
           <?php }} ?>
    <?php }
    else {?>            
                <tr>
                    <td>
                        <h4 class="empty-table-message" style="text-align: center;background-color:#d3dbd5;padding: 130px;">No Refunds Found!</h4>
                    </td>
                </tr>
    <?php }?>
                                </tbody>
                            </table>
                            <hr>
                            
                     
                        </div>
                        
                    </div>            
        
            
                </div>
            </div>

        </div>




    </div>
    

    <script src="SubscriptionForm.js"></script>   
</body>
</html> 