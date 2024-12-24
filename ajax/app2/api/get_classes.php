<?php
include_once "db.php";
$classes=q("select `classroom` from `students` group by `classroom`");

// dd($classes);

echo json_encode($classes);
?>