<?php
$server = [
  'Host Server Name' => $_SERVER['SERVER_NAME'],
  'Host Header' => $_SERVER['HTTP_HOST'],
  'Server Software' => $_SERVER['SERVER_SOFTWARE'],
  'Document Root' => $_SERVER['DOCUMENT_ROOT'],
  'Current Page' => $_SERVER['PHP_SELF'],
  'Script Name' => $_SERVER['SCRIPT_NAME']
];

print_r($server);
