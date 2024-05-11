<?php
// 四則演算（浮動小数点型を含む）
echo '4.5 + 1.8 = '.(4.5 + 1.8);
echo '<br>';
echo '3 - 1.2 = '.(3 - 1.2);
echo '<br>';
echo '1.5 * 0.6 = '.(1.5 * 0.6);
echo '<br>';
echo '3 / 0.3 = '.(3 / 0.3);
echo '<br>';
echo '100 - 99.8 = '.(100 - 99.8);
// 浮動小数点型で生じる誤差の確認（結果が0.1にならない）
echo '<br>';
echo '100 - 99.9 = '.(100 - 99.9);
?>
	<p>浮動小数点数は、コンピューター上で実数を近似的に表現するための仕組みだが、<br>
		浮動小数点数の精度には限界があり、10進数で表現される一部の小数を2進数で表現する際に精度の問題が生じる<br>
		例えば、10進数の0.1は2進数では循環小数になり、コンピューター内部では0.1を正確に表現することができない。その結果、小数の演算において、微小な誤差が生じる。</p>
	<b>10進数</b>
	<p>10進数（デシマル、Decimal）は、10個の異なる数字（0から9まで）を使って数を表現する数の体系</p>
	
	<b>2進数</b>
	<p>2進数（バイナリ、Binary）は、、0と1の2つの数字（ビット）を使って数を表現する体系</p>
	<b>10進数 → 2進数</b><br>
	0 → 0<br>
	1 → 1<br>
	2 → 10<br>
	3 → 11<br>
	4 → 100<br>
	5 → 101<br>
	6 → 110<br>
	7 → 111<br>
	8 → 1000<br>
	9 → 1001<br>
	10 → 1010<br>
<hr>
<?php
	echo 100 - 99.9;
	echo '<br>';
	echo var_dump(100 - 99.9);
	echo '<br>';
	echo bcsub('100', '99.9', 2);
	echo '<br>';
	echo var_dump(bcsub('100', '99.9', 2));
	?>
<hr>
<hr>
<?php
	echo '加算：bcadd';
	echo '<br>';
	echo 0.7 + 0.1;
	echo '<br>';
	echo var_dump(0.7 + 0.1);
	echo '<br>';
	echo bcadd('0.7', '0.1', 3);
	echo '<hr>';
	
	echo '減算：bcsub';
	echo '<br>';
	echo 0.7 - 0.1;
	echo '<br>';
	echo bcsub('0.7', '0.1', 3);
	echo '<hr>';
	
	echo '乗算：bcsub';
	echo '<br>';
	echo 0.7 * 0.1;
	echo '<br>';
	echo bcmul('0.7', '0.1', 3);
	echo '<hr>';
	
	echo '除算：bcdiv';
	echo '<br>';
	echo 0.7 / 0.1;
	echo '<br>';
	echo bcdiv('0.7', '0.1', 3);
	echo '<hr>';
	
	echo '冪乗：bcpow';
	echo '<br>';
	echo 0.7 ** 3;
	echo '<br>';
	echo bcpow('0.7', 3, 5);
	echo '<hr>';