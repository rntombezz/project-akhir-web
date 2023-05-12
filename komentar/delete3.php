<?php 

include '../config.php';

$id = $_GET['id'];

$sql = "DELETE FROM komentar WHERE id = $id";

mysqli_query($kondisi , $sql);

echo "<script> 
document.location.href = 'komentar.php';
</script>
";