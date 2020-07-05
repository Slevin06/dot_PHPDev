<?php

if (file_exists('../app/functions.php')) require_once '../app/functions.php';

$message = filter_input(INPUT_GET, 'message');

//非入力時、かつスペースキー空白入力時（trimすれば非入力状態にできる）
if (empty(trim($message))) {
    $message = '...';
}

if (file_exists('../app/_parts/_header.php')) include_once '../app/_parts/_header.php';


?>

    <p>
        <?= nl2br(h($message));?> <!--nl2br：改行してくれる関数-->
    </p>
    <p>
        <a href="index.php">Go back</a>
    </p>

<?php

if (file_exists('../app/_parts/_footer.php')) include_once '../app/_parts/_footer.php';

