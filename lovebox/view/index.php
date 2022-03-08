<?php require('inc/head.php'); ?>
    <div class="flex">
      <div class="wrapper bg-white">
        <div class="flex j-sb">
          <div class="left-side p15">
            <h2>Message actuel</h2>
            <?php
            if($last_msg->rowCount() != 0)
            {
              $m = $last_msg->fetch();
              echo htmlspecialchars($m['msg']);
            }
            else
            {
              echo 'Aucun message';
            }?>
          </div>
          <div class="right-side p15">
            <h2>Nouveau message</h2>
            <form method="post" action="?action=newMessage">
              <input type="text" name="message" placeholder="Nouveau message"/>
              <input type="submit" name="send" value="Envoyer"/>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
