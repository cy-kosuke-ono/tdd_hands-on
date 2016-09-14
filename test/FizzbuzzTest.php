<?php
namespace App;
use Exception;

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
  public function 引数が15の倍数のとき最優先でFizzBuzzを返す(){
    $fizzbuzz = new FizzBuzz();
    $expected = 45;
    $this->assertSame("FizzBuzz", $fizzbuzz->call($expected));
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

  public function getFizzBuzzList(){
    return [
      [3,  'Fizz'    ],
      [7,    7       ],
      [10, 'Buzz'    ],
      [30, 'FizzBuzz'],
      [33, 'Fizz'    ],
      [50, 'Buzz'    ],
      [53,  53       ]
    ];
  }

  /**
   * @test
   * @dataProvider getFizzBuzzList
   */
  public function FizzBuzzを正しく返す($value, $expected){
    $fizzbuzz = new FizzBuzz();
    $this->assertSame($expected, $fizzbuzz->call($value));
  }

  public function NaNatArray(){
    return [
      ['野獣'],
      [0.15], 
      [-13],
      [-5.3],
      ['foo'],
      [0],
      ['ですん']
    ];
  }

  /**
   * @test
   * @expectedException Exception
   * @expectedExceptionMessage それ自然数じゃない
   * @dataProvider NaNatArray
   */
  public function 引数が非整数のとき例外を返す($value){
    $fizzbuzz = new FizzBuzz();
    $expected = $value;
    $fizzbuzz->call($expected);
  }

  public function bigNumArray(){
    return [
      [101],
      [1991],
      [13579]
    ];
  }

  /**
   * @test
   * @expectedException Exception
   * @expectedExceptionMessage でかすぎ
   * @dataProvider bigNumArray
   */
  public function 引数の値が101以上のとき例外を返す($value){
    $fizzbuzz = new FizzBuzz();
    $expected = $value;
    $fizzbuzz->call($expected);
  }

}
