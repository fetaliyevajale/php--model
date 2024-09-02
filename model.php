<?php
class model extends car {
    private $model ;

   public function  __construct($car, $model)
   {
       parent::__construct($car);
       $this->model = $model;
   }
 
   public function showModel() {
    return $this->model;
   }
}
?>
