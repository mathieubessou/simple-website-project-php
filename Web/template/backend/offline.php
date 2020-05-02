<?php
    if (preg_match('#^/backend/'.CONFIG['backendSpecialPath'].'(?:$|/.*)#', $_SERVER['REQUEST_URI'])) {
        $isBackendSpecialPath = true;
    }

    if (... || !$isBackendSpecialPath) {
        header('HTTP/1.0 404 Not Found');
        require __DIR__ . '/../../template/frontend/online.php';
        exit(0);
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
		<title>Service Unavailable</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="/template/images/icon.png" />
    </head>

    <body>
        <div>
            <p>Access to administration has been blocked</p>
        </div>
    </body>
</html>