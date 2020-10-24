<?php declare(strict_types=1);
  error_reporting(E_ALL);

  require_once 'Mapper.php';
  
  class Show extends Mapper{
    public function getResult(){
      return $this->setResult();
    }
  }

  $show = new Show();
  print_r($show->getResult());
?>