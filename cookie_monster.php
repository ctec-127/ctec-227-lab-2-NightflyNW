<!DOCTYPE html>
<?php
// remove the cookies
setcookie("cookie[username]", "BettyW", time() - 7200);
setcookie("cookie[firstname]", "Betty", time() - 7200);
setcookie("cookie[lastname]", "White",  time() - 7200);
setcookie("cookie[institution]", "Clark", time() - 7200);
setcookie("cookie[city]", "Vancouver", time() - 7200);
setcookie("cookie[state]", "WA",  time() - 7200);

# remove/unset a cookie
// setcookie("username", "username", time() - 3600);
// unset($_COOKIE["username"]);


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie Monster</title>
</head>
<body>
    
</body>
</html>