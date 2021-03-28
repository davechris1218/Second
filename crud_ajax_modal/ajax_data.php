<?php 
  include "connect.php";
  $x = 0;
  $modal=mysqli_query($connect,"SELECT * FROM modal ORDER BY modal_id DESC");
  while($r=mysqli_fetch_array($modal)){
  $x++;
?>
<tr>
  <td><?php echo $x; ?></td>
  <td><?php echo  $r['modal_name']; ?></td>
  <td><?php echo  $r['description']; ?></td>
  <td>
    <a href="javascript:void(0)" class='open_modal' id='<?php echo  $r['modal_id']; ?>'>Edit</a>
    <a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $r['modal_id']; ?>'>Delete</a>
  </td>
  </tr>
<?php } ?>