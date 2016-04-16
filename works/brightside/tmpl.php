<?php

$mailTo = "info@brightside.xyz";
$subject = "フォームより送信されました";
$from = "From:".$_POST["address"];

//送信メッセージ
$message = <<< EOD
以下の内容がフォームより送信されました。
────────────────────────────────────
[氏名]
{$outputdata["Name"]}

[メールアドレス]
{$outputdata["mailNo"]}

[メッセージ]
{$outputdata["inquiry"]}
────────────────────────────────────
EOD;

?>
