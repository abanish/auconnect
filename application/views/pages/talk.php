<div class="container">
    <!--button for modal to start a conversation-->
    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-danger" data-toggle="modal" data-target="#start-modal">Start New Conversation
            </button>
            <!-- Modal -->
            <div class="modal fade" id="start-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" style="padding-top: 120px">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true"> &times; </button>
                            <h4 class="modal-title" id="myModalLabel">
                                Start a new conversation on any topic
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12">
                                <form id="start-form" class="form-horizontal" method="post"
                                      action="<?php echo URL::site('talk/add'); ?>">
                                    <textarea required="required" class="form-control" name="topic"
                                              placeholder="topic(max 40 characters)"
                                              maxlength="40"
                                              rows="2"></textarea>
                                    <br>
                                    <textarea required="required" class="form-control" name="description"
                                              placeholder="description (max 250 characters)"
                                              autocomplete="off" maxlength="250" rows="4"></textarea>
                                    <br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" id="start" value="start" class="btn btn-danger"
                                   style="margin-right: 10px;" name="start"/>
                            <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                        </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
        <div class="col-lg-8 col-md-8">
            <div class="col-md-offset-5">
                <h2 class="h3" style="font: Trebuchet MS,Arial, Helvetica;">All Conversations</h2>
            </div>
            <div id="output"></div>
            <div class="col-md-offset-1">
                <div id="conversation">
                    <?php foreach ($talks as $talk) : ?>
                    <hr>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <div class="row">
                                <div class="col-xs-3 col-md-2">
                                    <a class="thumbnail">
                                        <img src="<?php $path = $talk->user->avatar->avatar;
                                        if ($path != NULL) {
                                            echo URL::site('thumbs/' . $path);
                                        } else echo URL::site('media/images/default_thumb.jpg'); ?>"/>
                                    </a>
                                </div>
                        </a>

                        <div class="col-md-7">
                            <div class="media-body">
                                <h4><a class="media-heading" href="<?php echo URL::site('topic/id/' . $talk->id); ?>"
                                       class="media-object"><?php echo $talk->topic; ?></a></h4>

                                <p class="media-heading"><?php echo $talk->description; ?></p>
                                <h5>
                                    <small><?php echo Date::fuzzy_span($talk->date); ?></small>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <h5>
                                <small><a data-toggle="modal"
                                          href="#profile-modal<?php echo $talk->user->id; ?>">by <?php echo $talk->user->username; ?>
                                        of <?php echo $talk->user->department; ?></a></small>
                                <br>
                                <small>replies
                                    <div class="badge"><?php echo $talk->replies; ?></div>
                                </small>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="profile-modal<?php echo $talk->user->id; ?>" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <center>
                                    <div class="avatar-view" id="avatar-view"><img
                                            src="<?php $path = $talk->user->avatar->avatar;
                                            if ($path != null) {
                                                echo URL::site('uploads/' . $path);
                                            } else echo URL::site('media/images/default_avatar.jpg'); ?>" alt="your-avatar"/>
                                    </div>
                                    <h3 class="media-heading"><?php echo $talk->user->fullname; ?>
                                        <small><?php echo $talk->user->department; ?></small>

                                        <hr>
                                        <small><strong>email: </strong><?php echo $talk->user->email; ?></small>
                                    </h3>

                                    <span><strong>Social: </strong></span>
                                    <?php $facebook = $talk->user->avatar->facebook;
                                    if ($facebook != NULL)
                                        echo "<a href='$facebook'  target='_blank'  class='label label-primary'>Facebook</a>";

                                    $twitter = $talk->user->avatar->twitter;
                                    if ($twitter != NULL)
                                        echo "  <a href='$twitter'  target='_blank'  class='label label-info'>Twitter</a>"; ?>
                                    <hr>

                                </center>
                                <h4 class="text-left">
                                    <center>
                                        <strong>Status: </strong><?php echo $talk->user->avatar->status; ?>
                                    </center>
                                </h4>
                            </div>
                            <div class="modal-footer">
                                <center>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Okay :)</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>


            </div>
        </div>

    </div>

            <div class="row">
        <div class="col-lg-6 col-md-6 col-md-offset-6">
            <ul class="pager">
                <li><a href="<?php
                    if (($i - 2) >= 1) echo URL::site('talk/index/' . ($i - 2));?>">Newer</a></li>
                <li><a href="<?php
                    if ($i <= ($count + 1)) echo URL::site('talk/index/' . $i);?>">Older</a></li>
            </ul>
        </div>
    </div>
</div>


<script>
    // prepare the form when the DOM is ready
    $(document).ready(function () {
        var options = {
            success: showResponse // post-submit callback
        };
        // bind to the form's submit event
        $('#start-form').submit(function () {
            $(this).ajaxSubmit(options);
            $("#start").prop("disabled", true);
            return false;
        });
    });
    // post-submit callback
    function showResponse(responseText, statusText, xhr, $form) {
        $('#start-form').resetForm();
        $('#start').prop("disabled", false);
        $('#start-modal').modal('hide');
        $('#conversation').load("talk #conversation")
    }
</script>


