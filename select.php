<?php
include("connection.php");

$sql="select * from post";
$result = mysqli_query($conn,$sql);


echo ' <tr>
	 <th>ID No</th>
	 <th>Date</th>
	 <th>First Name</th>
	 <th>Last Name</th>
	 <th>Update</th>
	 <th>Delete</th>
	 </tr>';

$i=1;
while($data=mysqli_fetch_array($result))
{
	 echo '
	
	 <tr>
	 <td>'.$i.'</td>
	  <td>'.$data['post_at'].'</td>
        <td>'.$data['post_firstname'].'</td>
        <td>'.$data['lastname'].'</td>
        <td><a href="edit.php?edit_id='.$data['id'].'">Update</a></td>
		<td><a href="index.php?del_id='.$data['id'].'" >Delete</a></td>
      </tr>';
	  
	  $i++;
}

?>
