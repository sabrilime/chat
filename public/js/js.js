$('document').ready(function()
{
    /* validation */
    $("#login-form").validate({
        rules:
            {
                password: {
                    required: true,
                },
                user_email: {
                    required: true,
                    email: true
                },
            },
        messages:
            {
                password:{
                    required: "please enter your password"
                },
                user_email: "please enter your email address",
            },
        submitHandler: submitFormLogin
    });
    /* validation */

    /* login submit */
    function submitFormLogin()
    {
        var data = $("#login-form").serialize();

        $.ajax({

            type : 'GET',
            url  : 'application/controllers/loginHandler.php',
            data : data,
            success :  function(response)
            {
                if(response=="1"){
                    window.location='index.php';
                }
                else{
                    alert('error connexion');
                }
            }
        });
        return false;
    }
    /* Signup submit */
    /* validation */
    $("#signup-form").validate({
        rules:
            {
                first_name_S: {
                    required: true,
                },
                last_name_S: {
                    required: true,
                },
                surname_S: {
                    required: true,
                },
                password_S: {
                    required: true,
                },
                user_email_S: {
                    required: true,
                    email: true
                },
            },
        submitHandler: submitFormSignup
    });
    /* validation */

    /* login submit */
    function submitFormSignup()
    {
        var data = $("#signup-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'application/controllers/signupHandler.php',
            data : data,
           success :  function(response)
            {
                if(response=="ok"){
                    window.location='index.php';
                }
                else{
                    alert('error subsricption');
                }
            }
        });
        return false;
    }

/* Submit message */
    /* validation */
    $("#message-form").validate({
        rules:
            {
                message: {
                    required: true,
                },
            },
        submitHandler: submitMessage
    });
    /* validation */

    /* login submit */
    function submitMessage()
    {
        var data = $("#login-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'application/controllers/messageHandler.php',
            data : data,
            success :  function(response)
            {
                if(response=="1"){
                    window.location='';
                }
                else{
                    alert('error send message');
                }
            }
        });
        return false;
    }
});