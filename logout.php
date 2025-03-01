<?php 
    session_start();
    unset($_SESSION['userId']);
    session_destroy();
?>
<script language="javascript">
    document.location="index.php";
</script>
