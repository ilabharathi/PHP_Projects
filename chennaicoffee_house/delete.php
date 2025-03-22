<?php
include("config.php");

$id=$_GET['id'];

$del_qry=$conn->query("delete from user_table where id='$id'");

if($del_qry)
{
    ?>
    <script>
        alert("User Deleted successfully!");
        window.location="dashboard.php";
</script>
    <?php
}

?>