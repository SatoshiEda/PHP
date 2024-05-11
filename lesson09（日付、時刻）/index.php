<?php
	// 使用するデフォルトのタイムゾーンを指定する
	date_default_timezone_set('Asia/Tokyo');
	
	// 現在の日時を指定したフォーマットで出力する
	echo date('Y年n月j日H時i分s秒') . '<hr>';
	
	// 現在を基準として1週間後の日時のUNIXタイムスタンプを出力する
	echo strtotime('+1 week') . '<hr>';
	
	// 現在を基準として3年前の日時を指定したフォーマットで出力する
	echo date('Y/m/d H:i:s', strtotime('-3 year')) . '<hr>';
	
	

	// 指定した日時のインスタンスを作成する
	$date_time = new DateTime('2015-03-19 12:15:30');

	// インスタンス$date_timeの日時を特定のフォーマットで出力する
	echo $date_time->format('Y年n月j日H時i分s秒');
	echo '<hr>';
	
	
	// 現在の日時のインスタンスを作成する
	$now = new DateTime();
	
	// diff()メソッドで2つのインスタンスの日時の差を取得し、変数$intervalに代入する（interval＝間隔）
	$interval = $now->diff($date_time);
	
	// 取得した日時の差を特定のフォーマットで出力する
	echo $interval->format('%y年と%m月と%d日の差があります。総日数は%a日です。') . '<hr>';