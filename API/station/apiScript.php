<?php
	// すべてのオリジンからのリクエストを許可
	header("Access-Control-Allow-Origin: *");
	// Content-Typeヘッダーを許可
	header("Access-Control-Allow-Headers: Content-Type");

	include 'class.DB.php';
	include 'class.Station.php';
	
	header('Content-Type: application/json');

	if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
		
		// POSTされたJSONデータをデコード
		$data = json_decode(file_get_contents('php://input'), true);
		// インスタンス
		$Station = new Station();
		
		if( $data['type'] === 1 ) {
			$Station->setPrefCd($data['pref']);
			$lineData = $Station->getLineList();
			//print_r($lineData);exit;
			echo json_encode($lineData);
		}
		else if( $data['type'] === 2 ) {
			
			$Station->setLineCd($data['line']);
			$stationData = $Station->getStationList();
			//print_r($stationData);exit;
			echo json_encode($stationData);
		}
		else{
			echo json_encode(array('error' => 'typeの設定が正しくない'));
		}
	}
	else{
		echo json_encode(array('error' => 'methodが正しくない'));
	}