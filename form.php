<?php

$name = $_POST['name'];
$name = strip_tags($name);
$name = strval($name);

if ($name === 'james') {
    echo "Bond, James Bond";
} else {
    echo "Bonjour $name";
}