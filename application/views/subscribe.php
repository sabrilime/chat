<?php
require 'header.php';
?>
    <h2> SIGNUP Page</h2>
    <!-- SIGNUP FORM -->
    <div class="signup-form">

        <div class="container">


            <form class="form-signup" method="post" id="signup-form">

                <div id="error">

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First name" name="first_name_S" id="first_name_S" />
                    <span id="check-e"></span>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last name" name="last_name_S" id="last_name_S" />
                    <span id="check-e"></span>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="surname" name="surname_S" id="surname_S" />
                    <span id="check-e"></span>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email address" name="user_email_S" id="user_email_S" />
                    <span id="check-e"></span>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password_S" id="password_S" />
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
<?php
require 'footer.php';
?>