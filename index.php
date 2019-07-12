<?php
	echo '<b>Testing of magic functions:</b>'.'</br>';

	class Point{
		public $x;
		public $y;
		private $data=[];
		public static $counter=0; 

		public function __construct($x,$y){
			$this->x=$x;
			$this->y=$y;
			self::$counter++;
		}

		public function setX($x){
			$this->x=$x;
			self::$counter++;
		}
		public function getX(){
			return $this->x;
			self::$counter++;
		}
		public function setY($y){
			$this->y=$y;
			self::$counter++;
		}
		public function getY(){
			return $this->y;
			self::$counter++;
		}
		public static function getCounter(){
			return self::$counter;
		}

		public function __toString(){
			return $s="Point with coordinates ($this->x,$this->y)";
		}
		public function __get($name){
			if(isset($this->data[$name])){
				 return $this->data[$name];
			}
			else{
				echo "Variable $name is not match to 2d coordinates".'</br>';
			}
		}

		public function __set($name,$value){
			$this->data[$name]=$value;
			echo '</br>'.'Point should has 2d coordinates'.'</br>';
		}

		public function __call($method,$args){
			echo "Call of method $method with such arguments: ";
			foreach ($args as $k => $value) {
				echo "$value, ";
		}
		}


		

	}

	$point_1= new Point(1,2);
	$point_2 = new Point(3,4);
	$point_3= new Point(5,6);

	$v=clone $point_1;
	
	$point_1->x=9;
	$point_1->y=9;
	$v->x=8;
	$point_1->z=11;
	echo $point_1->x.'</br>';
	echo $v->getz("argument","5");
	
	// echo $point_1->x.'<br>';
	// echo $point_2->y.'<br>';
	// $point_1->setX(10);
	// echo $point_1->getX().'</br>';
	// $point_1->setY(12);
	// echo $point_1->getY().'</br>';

	// echo 'Static methods and attibutes: '.'</br>';

	// echo Point::getCounter().'</br>';

	echo '</br>'."-----------------------------------------------------------".'</br>';

	echo $point_1.'</br>';
	echo $v.'</br>';
	$v->getz("123","Hello");
	$v->z=5;



?>