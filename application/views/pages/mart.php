<div class="container" style="align-items:center;">
<div class="row">
    <div class="col-md-2">
        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Post an Ad</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" style="padding-top: 60px">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true"> &times; </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Post an add
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <form id="mart-form" class="form-horizontal" method="post"
                                  action="<?php echo URL::site('mart/add'); ?>">
                                <textarea   required="required" class="form-control" name="title" placeholder="title(max 40 characters)"
                                          maxlength="40"
                                          rows="2"></textarea>
                                <br>
                                <textarea required="required" class="form-control" name="description" placeholder="description(max 250 characters)"
                                          autocomplete="off" maxlength="250" rows="4"></textarea>
                                <br>
                                <div class="col-md-8">

                                    <div class="col-md-2">

                                    <h4>Rs.</h4>
                                </div>
                                    <div class="col-md-6">
                                <input required="required" class="form-control" name="price" type="number" placeholder="price"
                                          autocomplete="off" min="1" max="100000"/>
                                        </div>
                                    </div>


                        </div>
                    </div>
                    <hr/>
                    <br>

                    <div class="modal-header">
                        Share your contact info.
                        Your e-mail id will be one of your default contact info.
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <textarea required="required" class="form-control" name="contact" placeholder="alternative contacts (anything you prefer, max 250 characters)"

                                    maxlength="250"  rows="2"></textarea>

                        </div>
                    </div>

                    <br>
                    <div class="modal-footer" >

                        <input type="submit" id="post" value="post" class="btn btn-danger" style="margin-right: 20px" name="start"/>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal -->
        </div>
    </div>
<!-- Start your code here -->
    <div id="classifieds">
    <div class="col-lg-8 col-md-8">
        <div class="col-md-offset-5">
            <h2 class="h3" style="font: Trebuchet MS,Arial, Helvetica;">All Items</h2>
        </div>

        <div class="col-md-offset-1">
            <?php foreach ($mart as $mart) : ?>
                <div class="box">

                     <div class="info">

                        <h4 class="text-left"><?php echo $mart->title; ?><a class="contact-info" id="contact-info"  href="#view_contact<?php echo $mart->id; ?>" data-id="<?php echo $mart->contact; ?>"  data-toggle="modal" ><span  class="glyphicon glyphicon-phone-alt pull-right contact"></span></a></h4>
                        <p><?php echo $mart->description; ?></p>
                         <p><?php if($mart->price!=0){
                             echo 'Rs. ';echo $mart->price;}?></p>
                        <h5><small><?php echo Date::fuzzy_span($mart->date); ?></small></h5>

                    </div>
        </div>
                <!-- Modal -->
                <div class="modal" id="view_contact<?php echo $mart->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true" style="padding-top: 120px">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true"> &times; </button>
                                <h4 class="modal-title" id="myModalLabel">
                                    Here's how you can contact the seller of<strong> <?php echo $mart->title; ?>.</strong>
                                </h4>
                            </div>
                            <div class="modal-body">
                                <br>
                                <div class="col-md-12" id="my-contact">
                                  <p  class="label label-warning">email:   </p ><strong> <p> <?php echo $mart->user->email; ?></p></strong>

                                  <p class="label label-success">alternative contact: </p>  <strong><p>  <?php echo $mart->contact; ?></p></strong><hr>

                                </div>
                            </div>
                            <div class="modal-footer" >

                                <p class="label label-primary"><strong>seller: </strong><?php echo $mart->user->username;?> of <?php echo $mart->user->department; ?></p>
                            </div>

                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal -->
                </div>

        <?php endforeach; ?>

    </div>
</div>
    </div>


    <div class="row">
        <div class="col-lg-6 col-md-6 col-md-offset-6">
            <ul class="pager">

                <li><a href="<?php
                    if(($i-2)>=1)echo URL::site('mart/index/'.($i-2));
                    ?>">Newer</a></li>
                <li><a href="<?php

                    if($i<=($count+1))echo URL::site('mart/index/'.$i);
                    ?>">Older</a></li>

            </ul>
        </div>


    </div>
    </div>




</div>






