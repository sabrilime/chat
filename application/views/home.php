<?php
require 'header.php';
?>
<div class="container">
    <div class="row">
            <div class="col-md-6">Liste des amis</div>
                <?php foreach ($members as $member): ?>
                <a href="application/controllers/chatController.php?id=<?php echo $member['u_id'];?>">
                    <div>ID: <?php echo $member['u_id']; ?></div>
                    <div>Member: <?php echo $member['u_surname']; ?></div>
                    <div> Statut: <?php echo $member['statut']; ?></div>
                </a>
                    <hr />
                <?php endforeach; ?>
            </div>

    </div>
</div>
