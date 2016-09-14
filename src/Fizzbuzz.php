<?php
namespace App;
use Exception;

class Fizzbuzz
{
    private function NaNThrowException($value){
      if(!is_int($value) or $value < 0){
        throw new Exception("それ整数ちゃう");
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
      
      $this->NaNThrowException($value);

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
