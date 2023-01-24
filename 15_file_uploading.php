<?php
$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

if(isset($_POST['submit'])){
    if (!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/$file_name";
    
        //get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        //echo $file_ext;

        //validate file extension
        if (in_array($file_ext, $allowed_ext)) {
            //validate file size
            if ($file_size <= 1000000) {
                //upload file
                move_uploaded_file($file_tmp, $target_dir);
                //success message
                echo '<p style: "color: green;">File uploaded!</p>';

            } else {
                echo '<p style: "color: red;">File size too large!</p>';
            }
        } else {
            echo '<p style: "color: red;">Please choose a file</p>';
        }
    }
     /* print_r($_FILES); */
    
} else {
    $message = '<p style="color: red;"> Please choose a file </p>';
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
    </form>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>