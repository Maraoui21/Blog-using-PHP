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

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    


?>
<?php

$split = explode('?id=',$url);
$blog_id = strval($split[1]);

$sql = "SELECT * FROM blogs WHERE id = '$blog_id' "; 

$result = mysqli_query($conn,$sql);

// fetch the result rows as an array

// $blogs = mysqli_fetch_all($result,MYSQLI_ASSOC);


$blog = $result->fetch_assoc();

// mysqli_free_result($result);


// print_r($blogs);


?>
<?php include('header.php')?>
<div class="container">
      <div class="blogs" id="blog-details">
            <h4 class="blog-title"><?php echo $blog['title']?></h4>
            <img class="image-details" src="../images/images.jpg" />
            <p class="content">
              <?php echo $blog['content']?>
            </p>
    </div>
    <?php include('sidebar.php') ?>
</div>
    </div>
    <?php include('./footer.php') ?>
    <script src="script/script.js"></script>
</body>
</html>