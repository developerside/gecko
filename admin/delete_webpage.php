<?php

require_once("connect.php");

$id = $_POST['webpage'];

$id2 = implode(",",$id);

$sql = mysql_query("DELETE FROM webpage WHERE id IN(".$id2.")");

if($sql){
echo "<script type='text/javascript'>alert('Delete Succesfull!');</script>";
echo "<script type='text/javascript'>window.location='/admin/webpage.php'</script>";
}else{
echo "<script type='text/javascript'>alert('Fail');</script>";
echo "<script type='text/javascript'>window.location='/admin/webpage.php'</script>";
}

?>