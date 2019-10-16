<?php

$images = getAssocResult('SELECT * FROM Images ORDER BY ViewCount DESC; ');
