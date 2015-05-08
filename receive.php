<?php

$array["time"]=time();
$array["memory"]=memory_get_usage();
echo json_encode($array);
?>