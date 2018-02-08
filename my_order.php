<!DOCTYPE html>
<html>
<head>
    <title>JS OBJECTS with new</title>    
    <link href="my_order.css" rel="stylesheet">
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
<li id="log"><a href="signup_login.php">Log in/Sign up</a></li>
</ul>
</ul>
</div>
</div>
    </div>
<br>
<!--    <form><input type="submit" name="update" class="button">UPDATE></form>-->
    </body>
</html>


<?php 
session_start();
echo '<br><br><br>';
//echo '<script>alert("You need to have an account")</script>';
//echo 'Welcome'.$_SESSION['user'];
//echo '<br><br><a href="demo-page.html?action=logout">Logout</a>';

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "cakemeaway";

// Create connection
$conn = new mysqli($servername, $user, $password, $dbname);
    $user=$_POST['username'];
    $password=$_POST['password'];


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = 'SELECT * FROM buy_now where username="'.$user.'"';
$result = $conn->query($sql);
//$sql = 'UPDATE INTO buy_now'

$xml=new DOMDocument("1.0");

$xml->formatOutput=True;
$cakeshop=$xml->createElement("Cakeshop");
$xml->appendChild($cakeshop);
$buy_now=$xml->createElement("Buy_now");
$cakeshop->appendChild($buy_now);

while($row=mysqli_fetch_array($result))
{
$order=$xml->createElement("Order");
$buy_now->appendChild($order);
$username=$xml->createElement("username",$row['username']);
$order->appendChild($username);
$cake_id=$xml->createElement("cake_id",$row['cake_id']);
$order->appendChild($cake_id);
$kg=$xml->createElement("kg",$row['kg']);
$order->appendChild($kg);
$phnnum=$xml->createElement("phnnum",$row['phnnum']);
$order->appendChild($phnnum);
$order_date=$xml->createElement("order_date",$row['order_date']);
$order->appendChild($order_date);
$address=$xml->createElement("address",$row['address']);
$order->appendChild($address);
$message=$xml->createElement("message",$row['message']);
$order->appendChild($message);
$price=$xml->createElement("price",$row['price']);
$order->appendChild($price);

} 
//echo "<xmp>".$xml->saveXML()."</xmp>";
$xml->save("reports.xml");
function loadFile($xml, $xsl)
{
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

$xslDoc = new DOMDocument();
$xslDoc->load($xsl);

$proc = new XSLTProcessor();
$proc->importStyleSheet($xslDoc);
echo $proc->transformToXML($xmlDoc);
}
loadFile("reports.xml", "my_order.xsl");
            
echo '<br><br><a href="demo-page.html?action=logout">Logout</a>';

?>
