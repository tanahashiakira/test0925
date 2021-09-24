<?php
$my_name = htmlspecialchars($_POST['my_name'],ENT_QUOTES);
print $my_name."さんご登録ありがとうございます";