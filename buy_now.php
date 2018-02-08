<!DOCTYPE html>
<html>
<head>
    <title>JS OBJECTS with new</title>    
<!--    <link href="signup_login.css" rel="stylesheet">-->
    <link href="demo-page.css" rel="stylesheet">
    <link href="buy_now.css" rel="stylesheet">
</head>
<body id="new">
<div class="div1">
<div class="div-sub">
<div class="div-sub-sub">
<ul>
<li class="dropdown">
    <a href="demo-page.html">Home</a>
</li>
<li class="dropdown">
<a href="#in" class="dropbtn">About</a>
</li>
<li class="dropdown">
<a href="javascript:void(0)" class="dropbtn">Weddings</a>
    <div class="dropdown-content">
        <a href="luxury_cakes.html">Luxury Collections</a>
      <a href="anniversary_cake.html">Anniversary cakes</a>
    <a href="engagement_cake.html">Engagement cakes</a>
    </div>
</li>
<li class="dropdown">
<a href="javascript:void(0)" class="dropbtn">3D Cakes</a>
    <div class="dropdown-content">
      <a href="kids_bdae.html">Kids birthday</a>
      <a href="baby_shower_cake.html">Baby shower cakes</a>
        <a href="celebration_cake.html">Celebration cakes</a>
    </div>
</li>
<li class="dropdown">
<a href="regular_cakes.html" class="dropbtn">Regular Cakes</a>
</li>
<li class="dropdown">
<a href="javascript:void(0)" class="dropbtn">Custom cakes</a>
    <div class="dropdown-content">
      <a href="photo_cakes.html">Photo cakes</a>
      <a href="custom_cupcakes.html">Custom cupcakes</a>
    </div>
</li>
<li class="dropdown">
<a href="#inner" class="dropbtn">Contact</a>
    </li>
    <ul>
<li id="log"><a href="signup_login.php">Log in/Sign up</a></li>
</ul>
</ul>
</div>
</div>

    <h2 style="text-align:center">In Love with Cakes?? You are at right place!!</h2>
    <h3 style="text-align:center">Have an account? You need one!!<a href="signup_login.php">Signup</a></h3>
    <div>
            <div id="form1">
                <div id="container">
                    <form method="post" action="buy_now.php">
                    <table>
                       <div>
                            <h2 id="wel">Order Details</h2>
                            <tr>
                               <td>Username<input type="text" name="username"><br/><br/></td>
                                <td>Cake Name<input type="text" name="cake_id"><br/><br/></td>
                            </tr>
                       </div>
                        <div id="yo">
                            <div id="clearfix">        
                                <tr>
                                    <td>Phone Number<input type="int" name="phnnum"><br/><br/></td>
                                    <td>No of kg<input type="int" name="kg"><br/><br/></td>
                                </tr>
                            </div>
                            <div id="outside-div">
                                <tr>
                                   <td>Address<textarea type="text" name="address"></textarea>
                                    <td>Message <textarea type="text" name="message"></textarea>
                                </tr>
                                <tr>
                                    <td>Order date<input type="date" name="order_date"><br/><br/></td>
                                    <td>Price <input type="int" name="price"><br/><br/></td>
                                </tr>
                            </div>
                        </div>
                     </table>
                        <input type="submit" name="submit" class="button" value="BUY NOW">  
            
                    </form>    
                </div>
            </div>
    </div>
</div>
    
</body>
</html>

<?php

$conn =mysql_connect("localhost","root","");
$db =mysql_select_db('cakemeaway',$conn);
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $cake_id=$_POST['cake_id'];
    $phnnum=$_POST['phnnum'];
    $kg=$_POST['kg']; 
    $address=$_POST['address'];
    $message=$_POST['message'];
    $order_date=$_POST['order_date'];
    $price=$_POST['price'];

    if($username==''){
        echo "<script>alert('Please enter username')</script>";
    }
    if($cake_id==''){
        echo "<script>alert('Please enter cake name')</script>";
    }
    if($kg==''){
        echo "<script>alert('Please enter kg')</script>";
    }
    if($phnnum==''){
        echo "<script>alert('Please enter phn number')</script>";
    }
    if($order_date==''){
        echo "<script>alert('Please enter order date')</script>";
    }
    if($address==''){
        echo "<script>alert('Please enter address')</script>";
    }
    if($message==''){
        echo "<script>alert('Please enter message')</script>";
    }
    if($price==''){
        echo "<script>alert('Please enter price')</script>";
    }
    else
    {
        $query="insert into buy_now(username,cake_id,kg,phnnum,order_date,address,message,price) values ('$username','$cake_id','$kg','$phnnum','$order_date','$address','$message','$price')";
        
        if(mysql_query($query))
        {
            echo "<script>alert('Your order is successfull!!')</script>";
        }
    }
}

?>
