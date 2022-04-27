<?php 

$servername = "localhost";
$username = "yassine";
$password = "yassine";

// Create connection
$conn = new mysqli($servername, $username, $password,'blog');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{


        $sql = 'SELECT * FROM blogs';

        $result = mysqli_query($conn,$sql);
        
        $blogs = mysqli_fetch_all($result,MYSQLI_ASSOC);



        
}


?>
<asside class="sidebar">
<h2>SIDEBAR</h2>
<div class="sidebarBody">
<?php foreach($blogs as $blog){ ?>
<h3>
<?php 
        $title = $blog['title'];
        echo $title;
?>
</h3>
<?php }?>

</div>
</asside>