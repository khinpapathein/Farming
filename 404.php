
<?php 
   if(isset($_POST['submit'])){
      $tmp = $_FILES['img']['tmp_name'];
      echo $tmp;
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form method="post" enctype="multipart/form-data">
      <input type="file" name="img" id="">
      <input type="submit" value="Submit" name="submit">
   </form>
   <!-- https://panel.000webhost.com/dashboard/ayerfarmerh/databases -->
</body>
</html>