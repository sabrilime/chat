<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>conversation</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">Conversation</div>
        <?php foreach ($conversations as $conversation): ?>
            <div><?php echo $conversation['u_surname']; ?> : <?php echo $conversation['m_contenu']; ?></div>
            <hr />
        <?php endforeach; ?>
    </div>

</div>
</div>
<hr />
<div class="message-form">
    <div class="container">
        <form class="message-login" method="post" id="message-form">

            <div id="error">

            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="message" name="message" id="message" />
                <span id="check-e"></span>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Send
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>