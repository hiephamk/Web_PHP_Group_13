<?php
ob_start();
session_start();

?>
<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php")

    ?>