<!doctype html>
<html lang="en">

<head>
    <title>CRUD AJAX MODAL</title>
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport" />
    <meta content="Aguzrybudy" name="author" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container mt-5 mb-5">
        <p class="text-right"><a href="javascript.void(0)" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>

        <table id="mytable" class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <tbody id="modal-data">
                <?php
                include "koneksi.php";
                $no = 0;
                $modal = mysqli_query($koneksi, "SELECT * FROM modal ORDER BY modal_id DESC");
                while ($r = mysqli_fetch_array($modal)) {
                    $no++;

                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo  $r['modal_name']; ?></td>
                        <td><?php echo  $r['description']; ?></td>
                        <td>
                            <a href="javascript:void(0)" class='open_modal' id='<?php echo  $r['modal_id']; ?>'>Edit</a>
                            <a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $r['modal_id']; ?>'>Delete</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Add Data Using Modal Boostrap (popup)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="form-save" action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                        <div class="form-group" style="padding-bottom: 20px;">
                            <label for="Modal Name">Modal Name</label>
                            <input type="text" name="modal_name" id="modal-name" class="form-control" placeholder="Modal Name" required />
                        </div>

                        <div class="form-group" style="padding-bottom: 20px;">
                            <label for="Description">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Description" required /></textarea>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-success" type="submit">
                                Save
                            </button>

                            <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    </div>

    <div class="modal fade" id="modal_delete">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">

                <div class="modal-header">
                    <h5 class="modal-title">Are you sure to delete this data ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <button type="button" class="btn btn-danger" id="delete_link">Delete</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".open_modal").click(function(e) {
                var m = $(this).attr("id");
                $.ajax({
                    url: "modal_edit.php",
                    type: "GET",
                    data: {
                        modal_id: m,
                    },
                    success: function(ajaxData) {
                        $("#ModalEdit").html(ajaxData);
                        $("#ModalEdit").modal('show', {
                            backdrop: 'true'
                        });
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $("#form-save").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                    method: $(this).attr("method"),
                    url: $(this).attr("action"),
                    data: {
                        modal_name: $('#modal-name').val(),
                        description: $('#description').val(),
                    },
                    success: function(response) {
                        console.log(response);
                        $("#modal-data").empty();
                        $("#modal-data").html(response.data);
                        $("#ModalAdd").modal('hide');
                        $('#modal-name').val('');
                        $('#description').val('');
                    },
                    error: function(e) {
                        // Error function here
                    },
                    beforeSend: function(b) {
                        // Before function here
                    }
                })
                .done(function(d) {
                    // When ajax finished
                });
        });
    </script>

    <script type="text/javascript">
        $('body').on('submit', '#form-update', function(e) {
            e.preventDefault();
            $.ajax({
                    method: $(this).attr("method"),
                    url: $(this).attr("action"),
                    data: {
                        modal_id: $('#edit-id').val(),
                        modal_name: $('#edit-name').val(),
                        description: $('#edit-description').val(),
                    },
                    success: function(response) {
                        console.log(response);
                        $("#modal-data").empty();
                        $("#modal-data").html(response.data);
                        $("#ModalEdit").modal('hide');
                    },
                    error: function(e) {
                        // Error function here
                    },
                    beforeSend: function(b) {
                        // Before function here
                    }
                })
                .done(function(d) {
                    // When ajax finished
                });
        });
    </script>

    <script type="text/javascript">
        $('body').on('click', '.delete_modal', function(e) {
            let modal_id = $(this).data('id');
            $('#modal_delete').modal('show', {
                backdrop: 'static'
            });
            $("#delete_link").on("click", function() {
                e.preventDefault();
                $.ajax({
                        method: 'POST',
                        url: 'proses_delete.php',
                        data: {
                            modal_id: modal_id
                        },
                        success: function(response) {
                            console.log(response);
                            $("#modal-data").empty();
                            $("#modal-data").html(response.data);
                            $("#modal_delete").modal('hide');
                        },
                        error: function(e) {
                            // Error function here
                        },
                        beforeSend: function(b) {
                            // Before function here
                        }
                    })
                    .done(function(d) {
                        // When ajax finished
                    });
            });
        });
    </script>

</body>

</html>