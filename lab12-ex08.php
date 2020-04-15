<?php 

include 'includes/simple-data.inc.php'; 

$data = $books;

if (isset($_GET['isbn'])){
    $found = null;
    foreach ($books as $b){
        if ($b['isbn'] == $_GET['isbn']){
            $found = $b;
        }
    }
    if (isset($found)){
        $data = $found;
    }
    else {
        header("Location: lab12-error.php");
    }
}

header('Content-Type: application/json');
echo json_encode($data, JSON_NUMERIC_CHECK+JSON_PRETTY_PRINT);
?>