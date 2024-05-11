<?php
	// str＝「文字列」を意味するstringの略
	$str = 'Appleが5個あります。Orangeは1個しかありません。';
	
	echo '検索対象：' . $str.'<br>';
	echo '正規表現：'."/Orange/<br>";
	echo '「Orange」が含まれているかどうかを正規表現で検索します。<br>';
	
	if (preg_match('/Orange/', $str)) {
		echo '>正規表現に一致しました。';
	} else {
		echo '>正規表現に一致しませんでした。';
	}
	
	echo '<hr>';
	echo '「A」で始まっているかどうかを正規表現で検索します。<br>';
	echo '正規表現：'."/^A/<br>";
	if (preg_match('/^A/', $str)) {
		echo '>正規表現に一致しました。';
	} else {
		echo '>正規表現に一致しませんでした。';
	}
	
	echo '<hr>';
	echo '「。」で終わっているかどうかを正規表現で検索します。<br>';
	echo '正規表現：'."/。$/<br>";
	if (preg_match('/。$/', $str)) {
		echo '>正規表現に一致しました。';
	} else {
		echo '>正規表現に一致しませんでした。';
	}
	
	echo '<hr>';
	echo '「Appleが5個あります。Orangeは1個しかありません。」と完全に一致しているかどうかを正規表現で検索します。<br>';
	echo '正規表現：'."/\\AAppleが5個あります。Orangeは1個しかありません。\\z/<br>";
	
	if (preg_match('/\AAppleが5個あります。Orangeは1個しかありません。\z/', $str)) {
		echo '>正規表現に一致しました。';
	} else {
		echo '>正規表現に一致しませんでした。';
	}
	
	echo '<hr>';
	echo '「Apple」または「Orange」が含まれているかどうかを正規表現で検索します。<br>';
	echo '正規表現：'.'/Apple|Orange/<br>';
	
	if (preg_match('/Apple|Orange/', $str)) {
		echo '>正規表現に一致しました。';
	} else {
		echo '>正規表現に一致しませんでした。';
	}
	
	
	
	echo '<hr>';
	 $personal_data = [
		 'name' => '侍太郎',
		 'address' => '侍町7-77',
		 'mobile' => '070-0000-1111'
	 ];
	 $tel = '070-0000-1111';

	 echo '検索対象：';
	 print_r($personal_data);

	 echo '携帯電話番号を検索し、一致すれば-（ハイフン）を削除したものに置換します。<br>';

	 $no_hyphen = preg_replace('/\A(0[7-9]0)-([0-9]{4})-([0-9]{4})\z/', '$1$2$3', $personal_data);

	 echo '>置換結果：';
	 print_r($no_hyphen);