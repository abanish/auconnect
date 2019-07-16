
<div class="bg">
    <div class="container">
        <div class="row">

            <br>
            <br>
            <br>
            <br>

            <div class="col-md-4 col-md-offset-4">
                <div class="container-box ">

                   <center><h1>Welcome back!!</h1></center>

                    <form method="post" action="<?php echo URL::site('user/enter'); ?>" >
                        <input  required="required" type="text" name="username" class="form-control input-lg" placeholder="display name"/>
                        </br>
                        <input required="required" type="password" name="password" class="form-control input-lg  "
                               placeholder="password"/>
                        </br>
                        <div class="wrapper">

                            <input type="submit" class="btn btn-primary btn-lg center-block" value="enter"/>

                    </form>
                 <br>
                    <a href="<?php echo URL::site('user/ticket'); ?>" class="btn btn-primary btn-lg center-block">Create a New Account</a>

                </div>
            </div>
             </div>

            <div class="col-md-6 col-md-offset-3">
                <br>
                <?php if ($errors): ?>
                    <ul class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                            <li><?php echo $errors; ?></li>

                    </ul>
                <?php endif ?>
                <?php if ($message): ?>
                    <ul class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                        <li><?php echo $message; ?></li>

                    </ul>
                <?php endif ?>

            </div>
            </div>

    </div>




