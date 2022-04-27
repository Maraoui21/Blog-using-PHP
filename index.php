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


$sql = 'SELECT * FROM blogs';

$result = mysqli_query($conn,$sql);

// fetch the result rows as an array

$blogs = mysqli_fetch_all($result,MYSQLI_ASSOC);
krsort($blogs);
mysqli_free_result($result);


if(isset($_POST['submit'])){
    $title = mysqli_real_escape_string($conn , $_POST['title']);
    $content = mysqli_real_escape_string($conn,$_POST['content']);
    $sql = "INSERT INTO blogs VALUES('$title','$content',NUll)";
    if(mysqli_query($conn , $sql)){
        echo "success";
        header('Location: ../index.php');
    }else{
        // echec
        echo "error" . mysqli_connect_error();
    }

}



?>
<?php include('./pages/header.php');?>
    <div class="container">
      <div class="blogs">
        <?php foreach($blogs as $blog_post){ ?>
            <div class="card">
            <img src="images/images.jpg" />
            <span class="blog-details">
            <h4 class="blog-title"><?php echo $blog_post['title'] ?></h4>
            <p class="blog-snippet">
                <?php
                $content_snippet = substr($blog_post['content'],10);
                echo $blog_post['content'] ."..." ?>
            </p>
            <span id="readBtn">
                <a href="./pages/blog-details.php?id=<?php echo $blog_post['id']?>">Read-More</a>
            </span>
        </span>
    </div>
    <?php }?>
</div>
    <?php include('./pages/sidebar.php') ?>
    </div>
    <?php include('./pages/footer.php') ?>
    <script src="script/script.js" type="text/javascript"></script>
</body>
</html>
