<?php
class Form{
  const NAME = 'StdForm';
  protected $elements = [];

  protected $name;
  public $valid = false;

  public function getStartTag($attrubutes = null){}

  public function getEndTag(){}

  public function setName($name=null){
    if($name){
       $this->name = $name;
    }else {
       $this->name = self::NAME;
    }
  }

  public function getName(){
    return $this->name;
  }
}
