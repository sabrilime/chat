<?php
require 'header.php';
?>
<h2> LOGIN Page</h2>
<!-- LOGIN FORM -->
    <div class="login-form">

        <div class="container">


            <form class="form-login" method="post" id="login-form">

                <div id="error">

                </div>

                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
                    <span id="check-e"></span>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                </div>

                <hr />

                <div class="form-group">
                    <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
                        <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
                    </button>
                </div>

            </form>

        </div>

    </div>
    <a href="?menu=signup">Sign up</a>
<?php
require 'footer.php';
?>