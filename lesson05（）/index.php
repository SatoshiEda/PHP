<?php
	 function kansu( $yen ){
		 $data['税抜'] = $yen;
		 $data['税率'] = 1.08;
		 $data['税込価格'] = $yen * 1.08;
		 return $data;
	 }
	 print_r( kansu(1000) );
	
	function imgUp( $data ){
		// アップロード処理
		if( 1 ){
			return true;
		}
		// logを残す
		return false;
	}
	$data  ='';
	if( imgUp( $data )){
		echo '成功しました。';
	}
	else{
		echo '失敗しました。';
	}