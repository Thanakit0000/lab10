<html>
<body>
<?php
    if( $_GET['language'] == 'en'){
        setcookie("lang", "en", time() + 3600 * 24 * 1);
    }else{
        setcookie("lang", "th", time() + 3600 * 24 * 1);
    }
?>
</body>
</html>