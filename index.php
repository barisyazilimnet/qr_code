<?php
require "qrlib.php";
QRcode::png('http://barisyazilim.net', 'file/filename.png'); // creates file
// QRcode::png('some othertext 1234'); // creates code image and outputs it directly into browser