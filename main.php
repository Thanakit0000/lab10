<html>
<body>
<?php
    //ssetcookie("lang", 'en', time() + 3600 * 24 * 1);
    foreach ($_COOKIE as $i => $value) {
        $i = $value;
    }
    if( $i=="en"){
        echo "Welcome";
    }else{
        echo "ยินดีต้อนรับ";
    }
?>
</body>
</html>