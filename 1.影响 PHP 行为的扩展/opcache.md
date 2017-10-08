### OPcache
* OPcache 通过将 PHP 脚本预编译的字节码存储到共享内存中来提升 PHP 的性能， **存储预编译字节码的好处就是 省去了每次加载和解析 PHP 脚本的开**

* PHP 5.5.0 及后续版本中已经绑定了 OPcache 扩展


### 安装
* Note: 如果需要将 » `Xdebug` 扩展和 `OPcache` 一起使用，必须在 `Xdebug` 扩展之前加载 `OPcache` 扩展。


### PHP 5.5.0 及后续版本
* OPcache 只能编译为 **共享扩展**。 如果你使用 --disable-all 参数 禁用了默认扩展的构建， 那么必须使用 --enable-opcache 选项来开启 OPcache。
    * TODO: 什么叫共享扩展? 难道还有非共享扩展?

* 编译之后，就可以使用 zend_extension 指令来将 OPcache 扩展加载到 PHP 中。在非 Windows 平台使用 zend_extension=/full/path/to/opcache.so， Windows 平台使用 zend_extension=C:\path\to\php_opcache.dll。


### 推荐的 php.ini 设置 (需要严格测试, 虽然一般都是复制了直接使用)
* 使用下列推荐设置来获得较好的 性能：
```
opcache.memory_consumption=128
opcache.interned_strings_buffer=8
opcache.max_accelerated_files=4000
opcache.revalidate_freq=60
opcache.fast_shutdown=1
opcache.enable_cli=1
```

### OPcache 函数
* `opcache_compile_file` — 无需运行，即可编译并缓存 PHP 脚本
* `opcache_get_configuration` — 获取缓存的配置信息
* `opcache_get_status` — 获取缓存的状态信息
* `opcache_invalidate` — 废除脚本缓存
* `opcache_is_script_cached` — 是否已被缓存校验
* `opcache_reset` — 重置字节码缓存的内容


### php 命令行开启 opcache
```
sudo vim /etc/php/7.0/cli/php.ini

设置  opcache.enable_cli 为 1
```

### 参考文章
* http://www.jianshu.com/p/f089b6d19382
* http://blog.csdn.net/why_2012_gogo/article/details/51134674
* https://tideways.io/profiler/blog/fine-tune-your-opcache-configuration-to-avoid-caching-suprises
* https://github.com/rlerdorf/opcache-status

### cli 下使用 OPcache 存在的问题
* 仅在执行脚本时缓存生效, web 下却正常
