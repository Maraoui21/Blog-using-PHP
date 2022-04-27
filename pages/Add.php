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
<?php include('../pages/header.php') ?>

    <form  method="POST">
        <label for="title"><h4>title</h4><input name="title" type="text" id="title" onclick="inputHover()" placeholder="title"></label> 
        <!-- <label for="image"><h4>image</h4><input name="image" type="file" id="image" onclick="inputHover()" placeholder="snippet"></label>         -->
        <label for="content" id="text-area-title">
            <h4>text</h4>
        <textarea name="content" id="content" placeholder="type something..."></textarea>
        </label>
        <input name='submit' type="submit" id="btn" value="publish"/>   
    </form>
    <?php include('./footer.php') ?>
    <script src="script/script.js"></script>
    </body>
</html>