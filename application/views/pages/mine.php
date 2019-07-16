<div class="container" style="align-items:center;">
<div id="mine">
<div class="row">
    <div id="talk-content">
    <div class="col-md-5">
        <div class="col-md-offset-4">
            <h2 class="h3" style="font: Trebuchet MS,Arial, Helvetica;">My Talk</h2>
        </div>
        <div class="col-md-offset-1">
            <?php foreach ($talk as $talk) : ?>
            <hr>
            <div class="media">
                <a class="pull-left" href="#">
                    <div class="row">
                        <div class="col-xs-3 col-md-2">
                            <a   class="thumbnail">

                                    <img src="<?php $path=$talk->user->avatar->avatar; if($path!=null){echo URL::site('thumbs/'.$path);}
                                    else echo URL::site('media/images/default_thumb.jpg'); ?>"/>

                            </a>

                        </div>
                </a>

                <div class="col-md-10">
                    <div class="media-body">

                        <a class="media-heading" href="<?php echo URL::site('topic/id/' . $talk->id); ?>"
                           class="media-object"><?php echo $talk->topic; ?></a>

                        <p class="media-heading"><?php echo $talk->description; ?></p>
                        <h5>

                            <small>
                                <ul class="list-inline list-unstyled  ">
                                    <li><span>  <?php echo Date::fuzzy_span($talk->date); ?> </span>
                                    </li>
                                    <li>|</li>
                                    <li>replies<div class="badge"><?php echo $talk->replies; ?></div> </li>
                                    <li>|</li>
                                    <li><a href="<?php echo URL::site('mine/deletemytalk/'.$talk->id);?>" >delete</a></li>



                                </ul>
                            </small>

                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>
    <div class="row">
        <div id="mart-content">
    <div class="col-md-5 col-md-offset-1">
        <div class="col-md-offset-4">
            <h2 class="h3" style="font: Trebuchet MS,Arial, Helvetica;">My Mart</h2>
        </div>
        <?php foreach ($mart as $mart) : ?>
        <hr>
        <div class="media">
            <a class="pull-left" href="#">
                <div class="row">
                    <div class="col-xs-3 col-md-2">
                        <a   class="thumbnail">
                            <img src="<?php $path=$talk->user->avatar->avatar; if($path!=null){echo URL::site('thumbs/'.$path);}
                            else echo URL::site('media/images/default_thumb.jpg'); ?>"/>
                        </a>

                    </div>
            </a>
            <div class="col-md-10">
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $mart->title; ?></h4>
                    <p class="media-object"><?php echo $mart->description; ?></p>
                    <p class="media-object">Rs. <?php echo $mart->price; ?></p>
                    <h5>
                        <small>
                            <ul class="list-inline list-unstyled  ">
                                <li><span>  <?php echo Date::fuzzy_span($mart->date); ?> </span>
                                </li>
                                <li>|</li>
                                <a href="<?php echo URL::site('mine/deletemymart/'.$mart->id);?>" >delete</a>
                            </ul>
                        </small>
                    </h5>
                </div>
            </div>
        </div>
    </div>
            <?php endforeach; ?>
    </div>
    </div>
</div>
</div>
