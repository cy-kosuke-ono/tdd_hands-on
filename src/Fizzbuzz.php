<?php
namespace App;
class Fizzbuzz
{
    public function addition($a, $b)
    {
        return $a + $b;
    }

    public function call($value){
      
      if ($value % 15 === 0){
        return "FizzBuzz";
      }

      if ($value % 3 === 0){
        return "Fizz";
      }
      if ($value % 5 ===0){
        return "Buzz";
      }

      return $value;
    }


}
