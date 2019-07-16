<div class="container">
    <div class="container" id="crop-avatar">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <center>
                    <div id="image-content">
                        <div class="avatar-view " id="avatar-view" title="change the avatar" href="" data-toggle="modal"
                             data-target="#avatar-modal"> <img class="tooltip-toggle"  src="<?php $path = $avatar->avatar;
                            if ($path != null) {
                                echo URL::site('uploads/' . $path);
                            } else echo URL::site('media/images/default_avatar.jpg'); ?>" alt="your-avatar"/>
                        </div>
                    </div>


                    <h3 class="media-heading"><?php echo $user->fullname; ?>
                        <small>  <?php echo $user->department; ?></small>
                        <br>
                        <small><strong>email: </strong><?php echo $user->email; ?></small>
                    </h3>

                    <hr>
                    <div id="social-content">
                        <span><strong>Social: </strong></span>
                        <a href="<?php echo $avatar->facebook; ?>" target="_blank"
                           class="label label-primary">Facebook</a>
                        <a href="<?php echo $avatar->twitter; ?>" target="_blank" class="label label-info">Twitter</a>
                        <a style="margin-top:10px; " type="button" class="btn btn-default" data-toggle="modal"
                           data-target="#social-modal"><span
                                class="glyphicon glyphicon-pencil"></a>
                    </div>


                    <hr>

                    <div id="status-content">
                        <h4 class="text-left"><center><strong>Status: </strong><?php echo $avatar->status; ?></center></h4>

                        <a type="button" class="btn btn-default" data-toggle="modal" data-target="#status-modal"> <span
                                class="glyphicon glyphicon-pencil"></a>
                        </div>
                </center>
            </div>
        </div>
    </div>
    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog"
     tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <img style="display:none" id="loader" src="media/images/loader.gif" alt="Loading...."
                     title="Loading...."/>
                <button class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
            </div>
            <div class="modal-body">
                <form id="image-form" action="<?php echo URL::site('settings/upload') ?>" method="post"
                      enctype="multipart/form-data">
                    <p><strong>Choose file:</strong> A square Profile image works perfect!!</p>

                    <p><input required="required" type="file" name="avatar" id="uploadImage"/></p>

                    <p><input type="submit" name="submit" id="image" value="Upload"/></p>
                </form>
            </div>
            <div class="modal-footer">

            </div>

        </div>
    </div>
</div><!-- /.modal -->

<!-- Loading state -->



<!-- social modal-->
<!-- Modal -->
<div class="modal" id="social-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add your social links:</h4>
            </div>
            <div class="modal-body">
                <center>
                    <form id="social-form" method="post" action="<?php echo URL::site('settings/updatesocial'); ?>">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <span class="label label-primary">Facebook</span>
                            </div>
                            <div class="col-md-9">
                                <input  required="required" type="link" class="form-control animated" id="new-review" name="facebook"
                                       placeholder="facebook link"/>
                            </div>
                        </div>
                        <br>

                        <div class="col-md-12">
                            <div class="col-md-3">
                                <span class="label label-info">Twitter</span>
                            </div>
                            <div class="col-md-9">
                                <input   type="url" class="form-control animated" id="new-review" name="twitter"
                                       placeholder="twitter link"/>
                            </div>

                        </div>

                </center>

                <br>
            </div>
            <div class="modal-footer">
                <center>
                    <button id="social" type="submit" class="btn btn-danger">Save</button>
                </center>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- status modal-->
<!-- Modal -->
<div class="modal" id="status-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     style="padding-top: 25px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Status</h4>
            </div>
            <form id="status-form" class="form-group" method="post" action="<?php echo URL::site('settings/updatestatus'); ?>">
                <div class="modal-body">
                    <center>
                        <textarea maxlength="200" required="required" class="form-control animated" cols="50" id="new-review" name="status"
                                  placeholder="Your status(max 200 characters)" rows="1"></textarea>

                    </center>
                </div>
                <br>

                <div class="modal-footer">
                    <center>
                        <button id="status" type="submit" class="btn btn-danger">Save</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>


</div>

<script>
    // prepare the form when the DOM is ready
    $(document).ready(function () {
        var options = {
            success: showImage // post-submit callback
        };
        $('#image-form').submit(function () {
            $(this).ajaxSubmit(options);
            $("#image").prop("disabled", true);
            return false;
        });
    });
    // post-submit callback
    function showImage() {
        $('#image-form').resetForm();
        $('#image').prop("disabled", false);
        $('#avatar-modal').modal('hide');
        $('#image-content').load("settings #image-content")

    }
    $(document).ready(function () {
        var options = {
            success: showSocial // post-submit callback
        };
        $('#social-form').submit(function () {
            $(this).ajaxSubmit(options);
            $("#social").prop("disabled", true);
            return false;
        });
    });
    // post-submit callback
    function showSocial() {
        $('#social-form').resetForm();
        $('#social').prop("disabled", false);
        $('#social-modal').modal('hide');
        $('#social-content').load("settings #social-content")

    }
    $(document).ready(function () {
        var options = {
            success: showStatus // post-submit callback
        };
        $('#status-form').submit(function () {
            $(this).ajaxSubmit(options);
            $("#status").prop("disabled", true);
            return false;
        });
    });
    // post-submit callback
    function showStatus() {
        $('#status-form').resetForm();
        $('#status').prop("disabled", false);
        $('#status-modal').modal('hide');
        $('#status-content').load("settings #status-content")

    }
</script>








