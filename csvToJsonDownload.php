<?php

header("Content-type: application/json");
header("Content-Disposition: attachment; filename=csv2json.json");
header("Pragma: no-cache");
header("Expires: 0");

echo $_POST['foo'];
die();