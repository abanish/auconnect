<div class="container"  >
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="well">
                <div class="media">
                    <div class="col-md-2">
                        <a class="pull-left thumbnail" >
                            <img class="media-object" src="<?php $path = $topic->user->avatar->avatar;
                            if ($path != NULL) {
                                echo URL::site('thumbs/' . $path);
                            } else echo URL::site('media/images/default_thumb.jpg'); ?>"> </a>
                    </div>
                    <div class="media-body">
                        <small><a id="profile" href="#profile-modal" data-toggle="modal"
                                  class="media-heading pull-right">by <?php echo $topic->user->username; ?>
                                of <?php echo $topic->user->department; ?></a></small>
                        <div class="col-md-10">
                            <h3 class="media-heading"><?php echo $topic->topic; ?></h3>
                            <p> <?php echo $topic->description; ?></p>
                        </div>
                        <div id="extra">
                            <small>
                                <ul class="list-inline list-unstyled pull-right">
                                    <li><span>  <?php echo Date::fuzzy_span($topic->date); ?> </span>
                                    </li>
                                    <li>|</li>
                                    <span>  <p class="badge"><?php echo $topic->replies; ?></p> replies</span>
                                </ul>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile modal-->
        <div class="modal fade" id="profile-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <center>
                            <div class="avatar-view" id="avatar-view"><img
                                    src="<?php $path = $topic->user->avatar->avatar;
                                    if ($path != null) {
                                        echo URL::site('uploads/' . $path);} else echo URL::site('media/images/default_avatar.jpg'); ?>" alt="your-avatar"/>
                            </div>
                            <h3 class="media-heading"><?php echo $topic->user->fullname; ?>
                                <small><?php echo $topic->user->department; ?></small>
                                <br>
                                <small><strong>email: </strong><?php echo $topic->user->email; ?></small>
                            </h3>
                            <hr>
                            <span><strong>Social: </strong></span>
                            <span><strong>Social: </strong></span>
                            <?php $facebook= $topic->user->avatar->facebook;
                            if($facebook!=NULL)
                                echo "<a href='$facebook'  target='_blank'  class='label label-primary'>Facebook</a>";
                            $twitter= $topic->user->avatar->twitter;
                            if($twitter!=NULL)
                                echo "  <a href='$twitter'  target='_blank'  class='label label-info'>Twitter</a>"; ?>
                            <hr>
                        </center>
                        <hr>
                        <h4 class="text-left">
                            <center>
                                <strong>Status: </strong><?php echo $topic->user->avatar->status; ?>
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
        <div class="col-md-6 col-md-offset-3">
            <div class="col-md-offset-4">
                <h2 class="h3" style="font: Trebuchet MS,Arial, Helvetica;">All Replies</h2>
            </div>
            <hr>
            <div id="comments">
                <?php foreach ($replies as $replies): ?>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="#" class="thumbnail">
                                        <img src="<?php $path = $replies->user->avatar->avatar;
                                        if ($path != null) {
                                            echo URL::site('thumbs/' . $path);
                                        } else echo URL::site('media/images/default_thumb.jpg'); ?>"/>
                                    </a>
                                </div>
                        </a>
                        <div class="col-md-8">
                            <div class="media-body">
                                <h5 class="media-heading">
                                    <small><a href="#profile-modal<?php echo $replies->user->id; ?>"
                                              data-toggle="modal">by <?php echo $replies->user->username; ?> of CSE</a>
                                        | <?php echo Date::fuzzy_span($replies->date); ?> </small>
                                </h5>
                                <p class="media-heading" class="media-object"> <?php echo $replies->reply; ?> </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="modal fade" id="profile-modal<?php echo $replies->user->id; ?>" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <center>
                                            <div class="avatar-view" id="avatar-view"><img
                                                    src="<?php $path = $replies->user->avatar->avatar;
                                                    if ($path != null) {
                                                        echo URL::site('uploads/' . $path);
                                                    } else echo URL::site('media/images/default_avatar.jpg'); ?>"
                                                    alt="your-avatar"/>
                                            </div>
                                            <h3 class="media-heading"><?php echo $replies->user->fullname; ?>
                                                <small><?php echo $replies->user->department; ?></small>
                                                <br>
                                                <small><strong>email: </strong><?php echo $replies->user->email; ?>
                                                </small>
                                            </h3>
                                            <hr>
                                            <span><strong>Social: </strong></span>
                                            <?php $facebook= $topic->user->avatar->facebook;
                                            if($facebook!=NULL)
                                                echo "<a href='$facebook'  target='_blank'  class='label label-primary'>Facebook</a>";
                                            $twitter= $topic->user->avatar->twitter;
                                            if($twitter!=NULL)
                                                echo "  <a href='$twitter'  target='_blank'  class='label label-info'>Twitter</a>"; ?>
                                        </center>
                                    <hr>
                                    <h4 class="text-left">
                                            <center>
                                                <strong>Status: </strong><?php echo $replies->user->avatar->status; ?>
                                            </center>
                                        </h4>
                                </div>
                                <div class="modal-footer">
                                    <center>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Okay :)
                                        </button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div id="reply-text"><p></p></div>
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <img src="<?php $path = $user->avatar->avatar;
                                    if ($path != null) {
                                        echo URL::site('thumbs/' . $path);
                                    } else echo URL::site('media/images/default_thumb.jpg'); ?>"/>
                                </a>
                            </div>
                            <div class="col-md-10">
                                <form id="reply-form" action="<?php echo URL::site('topic/reply/' . $topic->id); ?>" method="post">
                                    <textarea required="required" class="form-control animated" cols="50" id="text" name="text"
                                              placeholder="Enter your reply here..." rows="1"></textarea>
                                    <div class="text-right">
                                        <input id="reply" class="btn btn-sm btn-danger" type="submit" value="reply"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









