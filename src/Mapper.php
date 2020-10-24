<?php declare(strict_types=1);
  error_reporting(E_ALL);
  
  class Mapper{
    private function setNormal(){
      $nArr = array();
      for($i = 1; $i <= 100; $i++){
        $nArr[$i] = $i;
      }

      return $nArr;
    }

    private function setThree(){
      $tArr = array();
      for($i = 3; $i <= 100; $i += 3){
        $tArr[$i] = 'Three';
      }

      return $tArr;
    }

    private function setfive(){
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

    protected function setResult(){
      return array_replace_recursive($this->setNormal(), $this->setThree(), $this->setFive());
    }
  }
?>