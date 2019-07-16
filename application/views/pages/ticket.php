<div class="bg">


<div class="container">
    <div class="row">

<br>

        <div class="col-md-8 col-md-offset-2">
        <div class="container-box">
            <h1 style="color: #ffffff;">Let's create an account for you</h1>
            <form method="post" action="<?php echo URL::site('user/ticket'); ?>" >
                <div class="col-md-6">
                <input maxlength="16" required="required" type="text" name="username" class="form-control input-lg" placeholder="display name (max 16 characters)"/>
                </div>
                <div class="col-md-6">
                <input required="required" type="text" name="fullname" class="form-control input-lg" placeholder="fullname"/>
                </div>
                <br>
                <div class="col-md-6">
                <input required="required" type="password"  name="password" class="form-control input-lg"
                       placeholder="password (min 8 characters)"/>
                </div>
                <div class="col-md-6">
                <input required="required" type="password"  name="confirm" class="form-control input-lg"
                       placeholder="confirm password"/>
                </div>

                <div class="col-md-6">
                <input required="required" type="email" name="email" class="form-control input-lg"
                       placeholder="email"/>
                </div>
                <div class="col-md-6">
                <select  required="required" type="department" name="department" class="form-control input-lg" placeholder="department">
                    <option value="" disabled selected>Department</option>
                    <option>CS&SE</option>
                    <option>E.C.E</option>
                    <option>Civil</option>
                    <option>Electrical</option>
                    <option>Geo-Engineering</option>
                    <option>Mechanical</option>
                    <option>Marine</option>
                    <option>Instrument Tech.</option>
                    <option>Chemical</option>
                    <option>Metallugical</option>
                </select>
                </div>
              <div style="margin-top: 10px">
                <input  type="submit" class="btn btn-primary btn-lg center-block" value="create"/></div>
            </form>
             <br>
            <a href="<?php echo URL::site('user/enter'); ?>" class="btn btn-primary   btn-lg  ">Go back to Login</a>


        </div>
            <br>
            <?php if ($errors): ?>
                <ul class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php foreach ($errors as $message): ?>
                        <li><?php echo $message ?></li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
        </div>
        </div>







</div>

</div>

