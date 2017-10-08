### PHP 选项/信息
* 这些函数允许你获得许多关于PHP本身的参数，例如：运行时的配置，被加载的扩展，版本等。 你也将找到设置你的运行中的PHP的选项的函数。可能最好用的 PHP- 函数 phpinfo() 可以在这里找到。


### 安装
* 使用这些函数不需要安装，它们是 PHP 核心的一部分。


### 运行时配置
```
...
max_execution_time	"30"	PHP_INI_ALL	 
max_input_vars	1000	PHP_INI_PERDIR	自 PHP 5.3.9 起有效。
magic_quotes_gpc	"1"	PHP_INI_PERDIR	在 PHP <= 4.2.3 是 PHP_INI_ALL，在 PHP 5.4.0 中被移除。
magic_quotes_runtime	"0"	PHP_INI_ALL	在 PHP 5.4.0 中移除
...
```


### 预定义常量
* `phpcredits(XXX)` --- 预定义 phpcredits() 常量
    * 常量	          值	  描述
    * CREDITS_GROUP	1	核心开发者名单
    * CREDITS_GENERAL	2	总的贡献：语言设计和理念，PHP 作者 和 SAPI 模块
    * CREDITS_SAPI	4	PHP 的服务器 API 模块列表，以及它们的作者
    * ...


* `phpinfo(XXX)` 常量
    * 常量	       值	描述
    * INFO_GENERAL	1	  配置行，php.ini 的位置、构建日期，Web 服务器、操作系统及其他
    * INFO_CREDITS	2	  PHP 贡献者。参见 phpcredits()
    * INFO_CONFIGURATION  4	  当前 PHP 指令的本地（Local）和主（Master）值。参见 ini_get()
    * INFO_MODULES	8	已加载的模块和各自的设置
    * ...

* ... 其他更多预定义敞亮


### PHP 选项/信息 函数
* `assert` — 检查一个断言是否为 FALSE
* `assert_options` — 设置/获取断言的各种标志
* `cli_get_process_title` — Returns the current process title
* `cli_set_process_title` — Sets the process title
* `dl` — 运行时载入一个 PHP 扩展
* `extension_loaded` — 检查一个扩展是否已经加载
* `gc_collect_cycles` — 强制收集所有现存的垃圾循环周期
* `gc_disable` — 停用循环引用收集器
* `gc_enable` — 激活循环引用收集器
* `gc_enabled` — 返回循环引用计数器的状态
* `gc_mem_caches` — Reclaims memory used by the Zend Engine memory manager
* `get_cfg_var` — 获取 PHP 配置选项的值
* `get_current_user` — 获取当前 PHP 脚本所有者名称
* `get_defined_constants` — 返回所有常量的关联数组，键是常量名，值是常量值
* `get_extension_funcs` — 返回模块函数名称的数组
* `get_include_path` — 获取当前的 include_path 配置选项
* `get_included_files` — 返回被 include 和 require 文件名的 array
* `get_loaded_extensions` — 返回所有编译并加载模块名的 array
* `get_magic_quotes_gpc` — 获取当前 magic_quotes_gpc 的配置选项设置
* `get_magic_quotes_runtime` — 获取当前 magic_quotes_runtime 配置选项的激活状态
* `get_required_files` — 别名 get_included_files
* `get_resources` — Returns active resources
* `getenv` — 获取一个环境变量的值
* `getlastmod` — 获取页面最后修改的时间
* `getmygid` — 获取当前 PHP 脚本拥有者的 GID
* `getmyinode` — 获取当前脚本的索引节点（inode）
* `getmypid` — 获取 PHP 进程的 ID
* `getmyuid` — 获取 PHP 脚本所有者的 UID
* `getopt` — 从命令行参数列表中获取选项
* `getrusage` — 获取当前资源使用状况
* `ini_alter` — 别名 ini_set
* `ini_get_all` — 获取所有配置选项
* `ini_get` — 获取一个配置选项的值
* `ini_restore` — 恢复配置选项的值
* `ini_set` — 为一个配置选项设置值
* `magic_quotes_runtime` — 别名 set_magic_quotes_runtime
* `main` — 虚拟的main
* `memory_get_peak_usage` — 返回分配给 PHP 内存的峰值
* `memory_get_usage` — 返回分配给 PHP 的内存量
* `php_ini_loaded_file` — 取得已加载的 php.ini 文件的路径
* `php_ini_scanned_files` — 返回从额外 ini 目录里解析的 .ini 文件列表
* `php_logo_guid` — 获取 logo 的 guid
* `php_sapi_name` — 返回 web 服务器和 PHP 之间的接口类型
* `php_uname` — 返回运行 PHP 的系统的有关信息
* `phpcredits` — 打印 PHP 贡献者名单
* `phpinfo` — 输出关于 PHP 配置的信息
* `phpversion` — 获取当前的PHP版本
* `putenv` — 设置环境变量的值
* `restore_include_path` — 还原 include_path 配置选项的值
* `set_include_path` — 设置 include_path 配置选项
* `set_magic_quotes_runtime` — 设置当前 magic_quotes_runtime 配置选项的激活状态
* `set_time_limit` — 设置脚本最大执行时间
* `sys_get_temp_dir` — 返回用于临时文件的目录
* `version_compare` — 对比两个「PHP 规范化」的版本数字字符串
* `zend_logo_guid` — 获取 Zend guid
* `zend_thread_id` — 返回当前线程的唯一识别符
* `zend_version` — 获取当前 Zend 引擎的版本
