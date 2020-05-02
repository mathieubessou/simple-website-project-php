<?php
    if () {
        header('HTTP/1.0 404 Not Found');
    }
    else {
        header('HTTP/1.1 503 Service Unavailable');
        header('Retry-After: 3600');
    }
?>
<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8">
		<title>Maintenance</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="/template/images/icon.png" />
    </head>

    <body>
        <div>
            <p><?=CONFIG['offlineMessage']?></p>
        </div>
    </body>
</html>