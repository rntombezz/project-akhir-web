<?php 

include '../config.php';

$id = $_GET['id'];

$sql = "DELETE FROM pesanan WHERE id = $id";

mysqli_query($kondisi , $sql);

echo "<script> 
document.location.href = 'seller.php';
</script>
";



