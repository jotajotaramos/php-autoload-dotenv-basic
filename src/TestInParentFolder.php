<?php

namespace TestNamespace;

use TestNamespace\subFolder\TestInSubfolder;

class TestInParentFolder{

    public function throwAMessage(){

        echo "I am the class in the parent folder. <br />";

        $testSubfolder = new TestInSubfolder();

        echo $testSubfolder->throwAMessage();

    }


}