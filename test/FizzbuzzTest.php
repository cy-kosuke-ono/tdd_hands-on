<?php
namespace App;
class FizzbuzzTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @test
   */
  public function 受け取った値をそのまま返却(){
    $fizzbuzz = new FizzBuzz();
    $expected = 1;
    $this->assertSame(1, $fizzbuzz->call($expected));
  }

  /**
   * @test
   */
  public function 引数が3の倍数のときFizzを返す(){
    $fizzbuzz = new FizzBuzz();
    $expected = 6;
    $this->assertSame("Fizz", $fizzbuzz->call($expected));
  }

  /**
   * @test
   */
  public function 引数が5の倍数のときBuzzを返す(){
    $fizzbuzz = new FizzBuzz();
    $expected = 25;
    $this->assertSame("Buzz", $fizzbuzz->call($expected));
  }

  /**
   * @test
   */
  public function 引数が15の倍数のとき最優先でFizzBuzzを返す(){
    $fizzbuzz = new FizzBuzz();
    $expected = 45;
    $this->assertSame("FizzBuzz", $fizzbuzz->call($expected));
  }

}
