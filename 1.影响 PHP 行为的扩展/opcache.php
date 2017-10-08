<?php

/*
测试, 在 web (php -S 开启的内置服务器下) 下各项都正常,

但是在cli命令行下, 并没有缓存脚本字节码, 仅在执行那次生效, TODO: 为啥?
*/

// 编译并缓存 PHP 脚本
// if (opcache_compile_file('errorfunc_examples.php')) {
//     echo "opcache_compile_file 缓存成功 \n";
// }

// 废除脚本缓存
// if (opcache_invalidate('errorfunc_examples.php', true)) {
//     echo "opcache_invalidate 缓存清除成功 \n";
// }

// 检查某个脚本是否已经缓存
if (opcache_is_script_cached('errorfunc_examples.php')) {
    echo "errorfunc_examples.php 已缓存 \n";
} else {
    echo "errorfunc_examples.php 未缓存 \n";
}

// 查看 opcache 配置信息
$conf = opcache_get_configuration();
print_r($conf);

// 获取缓存的状态信息 内存使用 缓存的脚本文件信息
$status = opcache_get_status('errorfunc_examples.php');
// print_r($status);
print_r($status['scripts']);

// 重置所有字节码缓存的内容
// opcache_reset();
