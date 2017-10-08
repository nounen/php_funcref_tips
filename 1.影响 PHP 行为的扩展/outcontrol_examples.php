<?php

/*
在x下面的例子中，echo函数的输出将一直被保存在输出缓冲区中直到调用 ob_end_flush() 。

同时，对setcookie()的调用也成功存储了一个cookie,而不会引起错误。（正常情况下，在数据被发送到浏览器后，就不能再发送http头信息了。）
*/

// 如果不用输出缓冲控制, 出现如下警告:
// PHP Warning:  Cannot modify header information - headers already sent by ...
// TODO: 为什么需要用户来处理而不是 php 自己处理好这种情况?

ob_start();

echo "Hello\n";

setcookie("cookiename", "cookiedata");

// ob_clean();
$content = ob_get_contents();
var_dump(ob_get_status());

ob_end_flush();
