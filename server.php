<?php

//json_decode() traduce una stringa da formato json in una variabile PHP

$disks = json_decode(file_get_contents('disks.json'), true);
