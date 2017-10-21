### Sockets
* Socket扩展是基于流行的BSD sockets，实现了和socket通讯功能的底层接口，它可以和客户端一样当做一个socket服务器。

* 想了解更通用的 **客户端** socket接口，请看 `stream_socket_client()`, `stream_socket_server()`, `fsockopen()`, 和 `pfsockopen()`。

* 不熟悉socket编程的可以在Unix手册上找到很多有用的信息，网上也有很多C socket编程方面的教程，简单修改一下就可以应用于PHP socket编程。»
    * Unix Socket FAQ是一个不错的入门: http://www.unixguide.net/network/socketfaq/


### 安装
* 一般是内置的 （apt get install）， 编译是 添加--enable-sockets 配置项来启用。

* Note: 在 PHP 5.0.0 开始加入了对 IPv6 的支持。


### 资源类型
* `socket_accept()`, `socket_create_listen()` 和 `socket_create()` 返回 **socket 资源类型**。


### 预定义常量
* http://php.net/manual/zh/sockets.constants.php

```
AF_UNIX                   1
AF_INET                   2
AF_INET6                  23
SOCK_STREAM               1
SOCK_DGRAM                2
SOCK_RAW                  3
...
```


### Socket Errors
* Socket扩展编写的目的是提供一个面向功能强大的BSD Socket的可用的接口。它能确保这些函数在Win32和Unix平台上都能很好的工作。
* 在特定条件下，大部分 socket 函数如果发生错误都会发出一个 E_WARNING 信息描述错误内容。
    * 有时可能并不会如开发者所愿。例如，因为连接突然中断， `socket_read()` 函数可能会突然发出一个 E_WARNING。
    * 通常会使用 `@` 操作符来压制异常，然后在程序中用 `socket_last_error()` 来 **捕获错误代码**。
        * 你可以调用 `socket_strerror()` 函数通过错误代码获取错误描述。查看函数描述获取更多信息。


### Socket 函数
```
socket_accept — Accepts a connection on a socket
socket_bind — 给套接字绑定名字
socket_clear_error — 清除套接字或者最后的错误代码上的错误
socket_close — 关闭套接字资源
socket_cmsg_space — Calculate message buffer size
socket_connect — 开启一个套接字连接
socket_create_listen — Opens a socket on port to accept connections
socket_create_pair — Creates a pair of indistinguishable sockets and stores them in an array
socket_create — 创建一个套接字（通讯节点）
socket_get_option — Gets socket options for the socket
socket_getopt — 别名 socket_get_option
socket_getpeername — Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
socket_getsockname — Queries the local side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
socket_import_stream — Import a stream
socket_last_error — Returns the last error on the socket
socket_listen — Listens for a connection on a socket
socket_read — Reads a maximum of length bytes from a socket
socket_recv — 从已连接的socket接收数据
socket_recvfrom — Receives data from a socket whether or not it is connection-oriented
socket_recvmsg — Read a message
socket_select — Runs the select() system call on the given arrays of sockets with a specified timeout
socket_send — Sends data to a connected socket
socket_sendmsg — Send a message
socket_sendto — Sends a message to a socket, whether it is connected or not
socket_set_block — Sets blocking mode on a socket resource
socket_set_nonblock — Sets nonblocking mode for file descriptor fd
socket_set_option — Sets socket options for the socket
socket_setopt — 别名 socket_set_option
socket_shutdown — Shuts down a socket for receiving, sending, or both
socket_strerror — Return a string describing a socket error
socket_write — Write to a socket
```
