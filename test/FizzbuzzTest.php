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

}
