<?php
include 'modules/function.php';
include 'testModules/function.php';

include 'modules/class.Test01Modules.php';;
include 'testModules/class.Test01Modules.php';

use FUNCTION_TEST01 as fun01;
use FUNCTION_TEST02 as fun02;

use MOD\TEST01\Test01Modules;
use MOD\TEST02\Test01Modules as Test02Modules;

$Test01Modules = new Test01Modules();
$Test02Modules = new Test02Modules();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ドキュメント</title>
    <!-- 必要に応じてCSSファイルやスクリプトを追加 -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <!-- <script src="main.js" defer></script> -->
</head>
<body>
<header>
    <h1>サイトのタイトル</h1>
    <p>ディレクトリの異なる同盟の関数、クラスをnamespaceを利用して出力する。</p>
</header>
<main>
    <section>
        <h2>関数</h2>
        <p><?php fun01\testFunction();?></p>
        <p><?php fun02\testFunction();?></p>
    </section>

    <section>
        <h2>クラス</h2>
        <p><?php echo $Test01Modules::TEST_CONST;?></p>
        <p><?php echo $Test02Modules::TEST_CONST;?></p>
    </section>

</main>
<footer>
    <p>&copy; 2025 サイトの著作権表示</p>
</footer>
</body>
</html>