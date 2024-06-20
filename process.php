<?php
if (isset($_POST['selection']) ? $_POST['selection'] : false) {
    $output = htmlentities($_POST['selection'], ENT_QUOTES, "UTF-8");
    echo $output;
    echo "<br/>test";
}
// else {
//     echo "task option is required";
//     exit; 
// }