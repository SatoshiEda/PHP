<?php

	class sampleClass{

		private $_type;
		private const SELECT_1 = ['りんご','みかん','バナナ','スイカ','パイン'];
		private const SELECT_2 = ['焼肉','カレー','カツ丼','うどん','そば'];
		
		
		
		public function __construct($type)
		{
			$this->_type = $type;
		}
		
		public function selectHtml(){
			$array = [];
			if($this->_type === 1){
				$array = self::SELECT_1;
			}
			elseif($this->_type === 2){
				$array = self::SELECT_2;
			}
			else{
				return 'エラー';
			}
			
			$html = '<select>';
			for( $i = 0; $i < count($array); $i++ ){
				$html .= '<option>'.$array[$i].'</option>';
			}
			$html .= '</select>';
			return $html;
		}
	}
	
	$sample01 = new sampleClass(2);
	echo $sample01->selectHtml();
	
	echo '<hr>';
	
	$sample02 = new sampleClass(1);
	echo $sample02->selectHtml();
	