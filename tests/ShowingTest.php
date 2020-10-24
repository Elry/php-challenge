<?php declare(strict_types=1);
  namespace UnitTestFiles\Test;

  error_reporting(E_ALL);

  use PHPUnit\Framework\TestCase;

  final Class ShowingTest extends TestCase{
    public function testTrueAssetsToTrue(){
      $condition = true;
      $this->assertTrue($condition);
    }
  }
?>