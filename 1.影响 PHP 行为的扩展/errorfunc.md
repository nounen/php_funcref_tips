### 错误处理和日志记录
* PHP提供了错误处理和日志记录的功能. 这些函数允许你定义自己的错误处理规则，以及修改错误记录的方式. 这样，你就可以根据自己的需要，来更改和加强错误输出信息以满足实际需要.

* 通过日志记录功能，你可以将信息直接发送到其他日志服务器，或者发送到指定的电子邮箱（或者通过邮件网关发送），或者发送到操作系统日志等，从而可以有选择的记录和监视你的应用程序和网站的最重要的部分。

* 错误报告功能允许你自定义错误反馈的级别和类型，可以是简单的提示信息或者使用自定义的函数进行处理并返回信息.


### 安装
* 使用这些函数不需要安装，它们是 PHP 核心的一部分。


### 运行时配置
* http://php.net/manual/zh/errorfunc.configuration.php


### 预定义常量
* http://php.net/manual/zh/errorfunc.constants.php
    ```
    1	E_ERROR (integer)	致命的运行时错误。这类错误一般是不可恢复的情况，例如内存分配导致的问题。后果是导致脚本终止不再继续运行。
    2	E_WARNING (integer)	运行时警告 (非致命错误)。仅给出提示信息，但是脚本不会终止运行。	 
    4	E_PARSE (integer)	编译时语法解析错误。解析错误仅仅由分析器产生。	 
    8	E_NOTICE (integer)	运行时通知。表示脚本遇到可能会表现为错误的情况，但是在可以正常运行的脚本里面也可能会有类似的通知。
    ...
    ```

### 错误处理 函数
* `debug_backtrace` — 产生一条回溯跟踪(backtrace)
* `debug_print_backtrace` — 打印一条回溯。
* `error_clear_last` — 清除最近一次错误
* `error_get_last` — 获取最后发生的错误
* `error_log` — 发送错误信息到某个地方
* `error_reporting` — 设置应该报告何种 PHP 错误
* `restore_error_handler` — 还原之前的错误处理函数
* `restore_exception_handler` — 恢复之前定义过的异常处理函数。
* `set_error_handler` — 设置用户自定义的错误处理函数
* `set_exception_handler` — 设置用户自定义的异常处理函数
* `trigger_error` — 产生一个用户级别的 error/warning/notice 信息
* `user_error` — trigger_error 的别名
