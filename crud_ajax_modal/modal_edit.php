<?php
    include "connect.php";
	$modalId=$_GET['modal_id'];
	$modal=mysqli_query($connect,"SELECT * FROM modal WHERE modal_id='$modalId'");
	while($r=mysqli_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

		<div class="modal-header">
        <h5 class="modal-title">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body">
        	<form id="form-update" action="edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Name">Name</label>
                    <input type="hidden" name="modal_id" id="edit-id"  class="form-control" value="<?php echo $r['modal_id']; ?>"/>
     				<input type="text" name="modal_name" id="edit-name" class="form-control" value="<?php echo $r['modal_name']; ?>" required />
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Description">Age</label>
     				<input type="text" id="edit-description" class="form-control" value="<?php echo $r['description']; ?>" required />
                </div>

	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Update
	                </button>

	                <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             <?php } ?>

            </div>

           
        </div>
    </div>