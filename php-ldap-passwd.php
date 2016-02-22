<!DOCTYPE html>

<html>
    <head>
        <title>LDAP: Change Password</title>
	<meta http-equiv="content-type" content="text/html;charset=<?php echo PAGE_CHARSET; ?>" />
        <style type="text/css">
            * { position:relative; font-family:Verdana,Sans; font-size:1em; letter-spacing:-0.04em }
            body { margin:40px 20px; font-size:0.8em }
            h1 { font-size:2em; color:#2F462B; margin:20px 0 20px 0 }
            h2 { font-size:1.2em; margin-top:10px; margin-bottom:20px }
            form { padding-top:10px }
            p.error { color:#cf0000; font-weight:bold; padding-top:10px }
            p.success { color:#379527; font-weight:bold; padding-top:10px }
            label{ font-weight:bold; display:block; color:#666 }
            input { font-size:1.5em; padding:2px; margin-bottom:10px; margin:5px 1px 1px 1px; border:solid 1px #ccc; color:#000 }
            input:focus { border:solid 2px #769870; margin:4px 0 0 0; color:#000 }
            .button, .button:focus { border-radius:5px; background-color:#2F462B; color:#FFFFFF; border:0; padding:5px 8px; font-size:0.9em; font-weight:bold; margin:30px 10px 0 0; cursor:pointer }
        </style>
    </head>
    <body>
        <h1>LDAP: Change Password</h1>
        <?php if (isset($errmsg)): ?>
        <p class="error"><?php echo $errmsg; ?></p>
        <?php elseif (isset($sucmsg)): ?>
        <p class="success"><?php echo $sucmsg; ?></p>
        <?php endif; ?>
        <form method="post" action="submit.php">

            <div class="basic-options">
                <h2>Basic Options</h2>

                <p><label for="login">Login:</label>
                    <input type="text" name="login" id="login" /></p>

                <p><label for="oldpass">Current Password:</label>
                    <input type="password" name="oldpass" id="oldpass" /></p>

                <p><label for="newpass">New Password:</label>
                    <input type="password" name="newpass" id="newpass" /></p>

                <p><label for="cnewpass">Confirm New Password:</label>
                    <input type="password" name="cnewpass" id="cnewpass" /></p>
            </div>
            <p><input type="submit" class="button" value="Submit">
    	    	<input type="reset" class="button" value="Reset"></p>
        </form>
    </body>
</html>