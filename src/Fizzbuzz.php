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

    private function bigNumThrowException($value, $limit){
      if($value > $limit){
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

    private function getFizz(){
      return 'Fizz';
    }

    private function getBuzz(){
      return 'Buzz';
    }

    private function getFizzBuzz(){
      return $this->getFizz().$this->getBuzz();
    }

    public function call($value, $limit = 100){
      
      $this->NaNatThrowException($value);
      $this->BigNumThrowException($value,$limit);

      if ($this->isFizzBuzz($value)){
        return $this->getFizzBuzz();
      }
      if ($this->isFizz($value)){
        return $this->getFizz();
      }
      if ($this->isBuzz($value)){
        return $this->getBuzz();
      }
      return $value;
    }

}
