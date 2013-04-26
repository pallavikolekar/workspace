<?php
class String
{
     public $balance;
      public function connectToServer($serverName=null)
      {
        if($serverName==null) {
          throw new Exception("that's not a server name!");
        }

        $fp = fsockopen($serverName,80);
        return ($fp) ? true : false;
      }
      
      public function returnSampleObject()
      {
        return $this;
      }

      public function validateEmail( $email=null ) {
          if( $email == null ) {
              throw new Exception("email is not provided");
          }
          $res = filter_var($email, FILTER_VALIDATE_EMAIL);
          if( $res == false ) {
              return false;
          }else {
              return true;
          }
      }

     public function checkArrayCount( $ary=null ){
         return $ary;
     }

     public function checkBalance( $balance ) {
         if( $balance > 0 ) {
             $this->balance = $balance;
         }

     }
}
?>