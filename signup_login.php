<!DOCTYPE html>
<html>
    <head>
        <title>JS OBJECTS with new</title>    
        <link href="signup_login.css" rel="stylesheet">
        <link href="demo-page.css" rel="stylesheet">
    </head>
    <body>
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
<a href="javascript:void(0)" class="dropbtn">Contact</a>
    </li>
    <ul>
<li id="log"><div id="head">
       <div id="log">
       </div>
       <div id="log1">
          <form method="post" action="my_order.php">
              <table>
                  <tr>
                      <td>Username:</td>
                      <td>Password:</td>
                  </tr>
                  <tr>
                      <td><input type="text" name="username"></td>
                      <td><input type="password" name="password"></td>
                      <td><input type="submit" id="login" name="login" value="LOGIN"></td>    
                  </tr>
              </table>
            </form> 
       </div>
    </div>
</li>
</ul>
</ul>
</div>
</div>
        </div>

        
        <div id="form1">
        <div id="container">
            <form method="post" action="signup_login.php">
                <table>
           <div>
                <h2 id="wel">WELCOME TO THE WORLD OF CAKES!!</h2>
               <tr>
                   <td>First Name:<input type="text" name="firstname"><br/><br/></td>
                   <td>Last Name: <input type="text" name="lastname"><br/><br/></td>
               </tr>
           </div>
            <div id="yo">
                <div id="clearfix">        
                    <tr>
                        <td>Phone Number: <input type="varchar" name="phnnum"><br/><br/></td>
                        <td>Username: <input type="text" name="username"><br/><br/></td>
            
                    </tr>
                </div>
                <div id="outside-div">
                    <tr>
                        
                        <td>Password <input type="password" name="password"><br/><br/></td>
                        <td>Confirm Password <input type="password" name="conf_password"><br/><br/></td>
            
                    </tr>
                </div>
            </div>
               
         </table>  
                    <input type="submit" name="submit" class="button" value="CREATE AN ACCOUNT">
               <!--onclick="check()">-->
        
                    </form>  
            
                </div>
        </div>
    <script>
            function check(){
           var firstname=document.getElementById("firstname").value;
                var lastname=document.getElementById("lastname").value;
                var phnnum=document.getElementById("phnnum").value;
                var username=document.getElementById("username").value;
                var password=document.getElementById("password").value;
                var conf_password=document.getElementById("conf_password").value;
                    if(firstname=="")
                            alert("Please fill firstname");
                    if(/\d/g.test(firstname)==true){
                        alert("First name should not have digits!");
                    }
                    if(/\W/g.test(firstname)==true){
                        alert("First name should not have special characters!");
                    }
                    if(lastname=="")
                            alert("Please fill lastname");
                    if(/\d/g.test(lastname)==true){
                        alert("Last name should not have digits!");
                    }
                    if(/\W/g.test(lastname)==true){
                        alert("Last name should not have specail characters!");
                    }
                    if(phnnum=="")
                            alert("Please fill Mobile num");
                    if(/\d{10}/g.test(phnnum)==false){
                        alert("Phone number should be 10 digits!");
                    }
                    if(/\s/g.test(phnnum)==true){
                        alert("Phone number should have no space");
                    }
                    if(/[a-z]/g.test(phnnum)==true){
                        alert("Phone number should not have characters!");
                    }
                    if(username=="")
                        alert("Please fill username");
                    if(password=="")
                            alert("Please fill password");
                    if(conf_password=="")
                            alert("Please fill confirm password");
                    if(password!=conf_password)
                            alert("Password not matched!!");
            }
        function check1(){
        var username=document.getElementById("username").value;
                var password=document.getElementById("password").value;
                if(username=="")
                        alert("Please fill username");
                    if(password=="")
                            alert("Please fill password");
        }
        </script>

    </body>
</html>

<?php
$conn =mysql_connect("localhost","root","");
$db =mysql_select_db('cakemeaway',$conn);
if(isset($_POST['submit']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname']; 
    $phnnum=$_POST['phnnum'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conf_password=$_POST['conf_password'];

    if($firstname==''){
        echo "<script>alert('Please enter firstname')</script>";
    }
    if($lastname==''){
        echo "<script>alert('Please enter lastname')</script>";
    }
    if($phnnum==''){
        echo "<script>alert('Please enter phn number')</script>";
    }
    if($username==''){
        echo "<script>alert('Please enter username')</script>";
    }
    if($password==''){
        echo "<script>alert('Please enter password')</script>";
    }
    if($conf_password==''){
        echo "<script>alert('Please enter confirm passowrd')</script>";
    }
    else
    {
        $query="insert into signup(firstname,lastname,phnnum,username,password,conf_password) values ('$firstname','$lastname','$phnnum','$username','$password','$conf_password')";
        
        if(mysql_query($query))
        {
            echo "<script>alert('WELCOME TO THE WORLD OF CAKES!!')</script>";
        }
    }
    

}



if(isset($_POST['login']))
{
    $user=$_POST['username'];
    $password=$_POST['password'];
    if($user==''){
        echo "<script>alert('Please enter username')</script>";
    }
    if($password==''){
        echo "<script>alert('Please enter password')</script>";
    }
    else
    {
        $query='select * from signup where username="'.$user.'" and passowrd="'.$password.'"';
        
        if(mysql_query($query))
        {
            echo "<script>alert('You are successfully logged in')</script>";
        $_SESSION['user']=$user; 
        header('location:my_order.php');

        }
    }
}

?>
