<?php
ini_set( 'display_errors', 1);

echo '<h1>PHPエラーレベル</h1>';
echo '<p>Fatal error（致命的なエラー）</p>';
echo '<p>Parse error（構文エラー）</p>';
echo '<p>Warning（警告）</p>';
echo '<p>Notice（注意）</p>';
echo '<hr>';

// シンタックスエラー
//（構文エラー）
print('シンタックスエラー');
echo '<hr>';

// 変数
// 変数の使い方が正しくない
echo $dummy;
echo '<hr>';

// 関数やクラスのエラー
dummyFunction();
function dummyFunction(){
	echo '関数やクラスのエラー';
}
echo '<hr>';

$class = new dummyClass;
class dummyClass{

}
echo '<hr>';


// 変数のスコープの誤解
function dummyFunction3(){
	$test = 'ダミー';
}
echo $test;
echo '<hr>';
	
//require_once 'load_test.php';
echo '<hr>';

$user_names = ['侍太郎', '侍一郎', '侍二郎', '侍三郎', '侍四郎'];
echo $user_names['dummy'];
echo '<hr>';

$test = 111;
$num = count($test);
echo '<hr>';
