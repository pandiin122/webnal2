<?php 

include_once('connection.php');

$id = $_GET['edit_id'];
$sql = "select * from post where id='".$id."'";
$result = mysqli_query($conn,$sql);

$data=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit Data</h2>
   <p class="text-right"><a href="index.php" class="btn btn-primary">View All Books</a></p>
  <form>
    <div class="form-group">
	<input type="hidden" id="postid" value="<?php echo $_GET['edit_id'];?>">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" id="firstname" value="<?php echo $data['post_firstname'];?>" >
    </div>
	
	   <div class="form-group">
      <label for="pwd">Last Name:</label>
      <textarea class="form-control" id="lastname"><?php echo $data['lastname'];?></textarea>
    </div>
	

    <button type="button" id="save" class="btn btn-primary">Submit</button>
  </form>
</div>




<script>
$('#save').click(function () {

$id=$("#postid").val();

//alert($id);

$firstname = $('#firstname').val();
$lastname = $("#lastname").val();



$.ajax({url:"update.php",
method:"POST",
data:{postid:$id,firstnamecol:$firstname,lastnamecol:$lastname},
success:function(dataabc){
window.location.href="index.php";
}});


});



</script>


</body>
</html>
