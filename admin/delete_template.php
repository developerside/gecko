<?php

require_once("connect.php");

$id = $_POST['template'];

$id2 = implode(",",$id);

$sql = mysql_query("DELETE FROM template WHERE id IN(".$id2.")");

if($sql){
echo "<script type='text/javascript'>alert('Delete Succesfull!');</script>";
echo "<script type='text/javascript'>window.location='/admin/template.php'</script>";
}else{
echo "<script type='text/javascript'>alert('Fail');</script>";
echo "<script type='text/javascript'>window.location='/admin/template.php'</script>";
}

?>