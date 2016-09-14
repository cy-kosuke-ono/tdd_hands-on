<?php
namespace App;
use Exception;

class Fizzbuzz
{

    private function NaNatThrowException($value){
      if(!is_int($value) or $value <= 0){
        throw new Exception("それ自然数じゃない");
      }
    }

    private function bigNumThrowException($value){
      if($value > 100){
        throw new Exception("でかすぎ");
      }
    }

    private function isFizz($value){
      return $value % 3 == 0 ;
    }

    private function isBuzz($value){
      return $value % 5 == 0 ;
    }

    private function isFizzBuzz($value){
      return $this->isFizz($value) and $this->isBuzz($value);
    }

    public function call($value){
      
      $this->NaNatThrowException($value);
      $this->BigNumThrowException($value);

      if ($this->isFizzBuzz($value)){
        return 'FizzBuzz';
      }
      if ($this->isFizz($value)){
        return 'Fizz';
      }
      if ($this->isBuzz($value)){
        return 'Buzz';
      }
      return $value;
    }

}
