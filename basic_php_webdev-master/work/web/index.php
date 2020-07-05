<?php

if (file_exists('../app/functions.php')) require_once '../app/functions.php';

if (file_exists('../app/_parts/_header.php')) include_once '../app/_parts/_header.php';


?>

    <form action="result.php" method="get">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button>Send</button>
    </form>

<?php

if (file_exists('../app/_parts/_footer.php')) include_once '../app/_parts/_footer.php';

