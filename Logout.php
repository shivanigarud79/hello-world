<body bgcolor="lightpink">
    <?php
session_start();
if(session_destroy())
{
echo "<br>Session end";   
//header("Location:login1.php");
    
}
?>
</body>