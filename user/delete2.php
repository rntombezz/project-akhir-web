<?php 

include '../config.php';

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id = $id";

mysqli_query($kondisi , $sql);

echo "<script> 
document.location.href = 'user.php';
</script>
";