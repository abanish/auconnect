// prepare the form when the DOM is ready
$(document).ready(function() {

    // bind to the form's submit event
    $('#mart-form').submit(function() {

        $(this).ajaxSubmit( { success: showMart});
        $( "#post" ).prop( "disabled", true );

        $("#loading").fadeIn();
        return false;
    });

// post-submit callback
function showMart()  {

    $('#mart-form').resetForm();
    $('#post').prop("disabled",false);
    $('#myModal').modal('hide');

    $('#classifieds').load("mart #classifieds")

}
// prepare the form when the DOM is ready

    // bind to the form's submit event
    $('#start-form').submit(function () {
        $(this).ajaxSubmit( { success: showTalk});
        $("#start").prop("disabled", true);
        $("#loading").fadeIn();
        return false;
    });

// post-submit callback
function showTalk(responseText, statusText, xhr, $form) {
    $('#start-form').resetForm();
    $('#start').prop("disabled", false);
    $('#start-modal').modal('hide');
    $('#conversation').load("talk #conversation");
}
// prepare the form when the DOM is ready

    // bind to the form's submit event
    $('#reply-form').submit(function () {
        $(this).ajaxSubmit( { success: showReply});
        $("#reply").prop("disabled", true);
        $("#loading").fadeIn();
        return false;
    });

// post-submit callback
function showReply(data, statusText, xhr, $form) {
    var pathname=$(location).attr("href");  // Returns path only

    $('#reply').prop("disabled", false);
    $('#reply-form').resetForm();
   $('#comments').load(pathname+" #comments");
    $('#extra').load(pathname+" #extra");

}
// prepare the form when the DOM is ready

    $('#image-form').submit(function () {
        $(this).ajaxSubmit( { success: showImage});
        $("#image").prop("disabled", true);
        $("#loading").fadeIn();
        return false;
    });

// post-submit callback
function showImage() {
    $('#image-form').resetForm();
    $('#image').prop("disabled", false);
    $('#avatar-modal').modal('hide');
    $('#image-content').load("settings #image-content")

}

    $('#social-form').submit(function () {
        $(this).ajaxSubmit(
            { success: showSocial}
        );
        $("#social").prop("disabled", true);
        $("#loading").fadeIn();
        return false;
    });

// post-submit callback
function showSocial() {
    $('#social-form').resetForm();
    $('#social').prop("disabled", false);
    $('#social-modal').modal('hide');
    $('#social-content').load("settings #social-content")

}
    $('#status-form').submit(function () {
        $(this).ajaxSubmit( { success: showStatus});
        $("#status").prop("disabled", true);
        $("#loading").fadeIn();
        return false;
    });

// post-submit callback
function showStatus() {
    $('#status-form').resetForm();
    $('#status').prop("disabled", false);
    $('#status-modal').modal('hide');
    $('#status-content').load("settings #status-content")

}
});