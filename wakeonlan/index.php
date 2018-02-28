<!DOCTYPE html>

<?php
$mac = "D8:CB:8A:38:19:3F";
?>

    <hmtl>

        <head>
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
            <title>WakeOnLan Page</title>
        </head>

        <body>
            <?php
		if ($mac){
			exec("wakeonlan $mac");
			exec("wakeonlan $mac");
			exec("wakeonlan $mac");
			exec("wakeonlan $mac");
			echo "<font color='green'>Packet magique envoyé à $mac !</font>";
			}
		?>
        </body>
    </hmtl>
