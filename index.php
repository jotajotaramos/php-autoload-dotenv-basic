<?php 

require 'vendor/autoload.php';

$testInParentFolder = new TestNamespace\TestInParentFolder;

echo $testInParentFolder->throwAMessage();