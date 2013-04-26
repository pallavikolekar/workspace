<?php
require_once("String.php");
class StringTest extends PHPUnit_Framework_TestCase
{
    public $Connobj;
    public function setUp(){ }
    public function tearDown(){ }
    
    public function StringTest() {
        $this->Connobj = new String();
    }

    public function testConnectionIsValid(){
      // test to ensure that the object from an fsockopen is valid      
       $serverName = 'www.google.com';
       $this->assertTrue($this->Connobj->connectToServer($serverName) !== false);
    }

   /* public function testConnectionIsInvalid() {
        // test to ensure that the object from an fsockopen is valid
       $serverName = '';
       $this->assertTrue($this->Connobj->connectToServer($serverName) !== false);
    }*/
    
    public function testIsEmailValid() {
        $email = "pallavik@glam.com";
        $this->assertTrue($this->Connobj->validateEmail( $email ) !== false );
    }

    public function testCountOfArray() {
       $stack = array ( 1,3,4);
       $this->assertCount( 3, $this->Connobj->checkArrayCount( $stack ));
    }


}
?>
