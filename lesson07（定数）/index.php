<?php

	class sampleClass{
		private const SAMPLE_CONST01 = '定数01';
		public const SAMPLE_CONST02 = '定数02';
		private const SAMPLE_CONST_ARRAY = ['焼肉','カレー','カツ丼','うどん','そば'];
		
		public function __construct()
		{
			echo self::SAMPLE_CONST01;
			echo '<hr>';
			print_r(self::SAMPLE_CONST_ARRAY);
		}
	}
	
	echo sampleClass::SAMPLE_CONST02;
	echo '<hr>';
	
	new sampleClass();
	echo '<hr>';
	
	
	const SAMPLE_CONST03 = '定数03';
	echo SAMPLE_CONST03;