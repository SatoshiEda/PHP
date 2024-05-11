<?php
	class Product
	{
		private $name;
		
		public function __construct($name)
		{
			$this->name = $name;
		}
		
		public function set_name(string $name) {
			$this->name = $name;
		}
		public function show_name() {
			echo $this->name."<br>";
		}
	}
	
	$coffee = new Product('');
	//$coffee->set_name('コーヒ');
	$coffee->show_name();
	
	print_r($coffee);
	//echo date('Y年m月d日 H:i:s');
	