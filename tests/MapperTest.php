<?php declare(strict_types=1);
  namespace UnitTestFiles\Test;

  error_reporting(E_ALL);

  use PHPUnit\Framework\TestCase;  

  final Class MapperTest extends TestCase{
    public function testValidResultArray(){
      $mapper = new Mapper();
      $arr = array();
      for($a = 1; $a <= 100; $a++){
        if($a % 5 == 0 && $a % 3 == 0){
          $arr[$a] = 'ThreeAndFive';
        }else if($a % 3 == 0){
          $arr[$a] = 'Three';
        }else if($a % 5 == 0){
          $arr[$a] = 'Five';
        }else{ $arr[$a] = $a; }
      }
      $this->assertTrue($arr === $mapper->setResult());
    }

    public function testValidResultSize(){
      $mapper = new Mapper();
      $this->assertTrue(count($mapper->setResult()) == 100);
    }
    public function testValidNormalSize(){
      $mapper = new Mapper();
      $this->assertTrue(count($mapper->setNormal()) == 100);
    }
    public function testValidThreeSize(){
      $mapper = new Mapper();
      $this->assertTrue(count($mapper->setThree()) == round(100/3));
    }
    public function testValidFiveSize(){
      $mapper = new Mapper();
      $this->assertTrue(count($mapper->setFive()) == 100/5);
    }

    public function testValidResultType(){
      $mapper = new Mapper();
      $this->assertTrue(is_array($mapper->setResult()));
    }
    public function testValidNType(){
      $mapper = new Mapper();
      $this->assertTrue(is_array($mapper->setNormal()));
    }
    public function testValidThreeType(){
      $mapper = new Mapper();
      $this->assertTrue(is_array($mapper->setThree()));
    }
    public function testValidFiveType(){
      $mapper = new Mapper();
      $this->assertTrue(is_array($mapper->setFive()));
    }
  }

  class Mapper{
    public function setNormal(){
      $nArr = array();
      for($i = 1; $i <= 100; $i++){
        $nArr[$i] = $i;
      }

      return $nArr;
    }

    public function setThree(){
      $tArr = array();
      for($i = 3; $i <= 100; $i += 3){
        $tArr[$i] = 'Three';
      }

      return $tArr;
    }

    public function setfive(){
      $count = 0;
      $fArr = array();
      
      for($i = 5; $i <= 100; $i += 5){
        $count++;
        // if here
        if($count == 3){
          $count = 0;
          $fArr[$i] = 'ThreeAndFive';
          continue;
        }
        $fArr[$i] = 'Five';
      }

      return $fArr;
    }

    public function setResult(){
      return array_replace_recursive($this->setNormal(), $this->setThree(), $this->setFive());
    }
  }
?>