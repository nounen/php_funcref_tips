### APC User Cache
* APCu is APC stripped of opcode caching. (从 APC 衍生出 APCu)

* PHP 7 support is available as of APCu 5.0.0.


#### 安装扩展
* 参考 https://guides.wp-bullet.com/install-apcu-object-cache-for-php7-for-wordpress-ubuntu-16-04/

* Install APCu Object Cache via Repository
    * TODO: 此方式安装未尝试

* Install APCu Using php PEAR
    * TODO: 此方式安装失败并提示 "No releases available for package "pecl.php.net/apcu""

* Install APCu from Source Manually
```
cd /tmp
git clone https://github.com/krakjoe/apcu
cd apcu

phpize
./configure
make
sudo make install

echo "extension = apcu.so" | sudo tee -a /etc/php/7.0/mods-available/apcu.ini
sudo ln -s /etc/php/7.0/mods-available/apcu.ini /etc/php/7.0/fpm/conf.d/30-apcu.ini
sudo ln -s /etc/php/7.0/mods-available/apcu.ini /etc/php/7.0/cli/conf.d/30-apcu.ini

sudo service php7.0-fpm restart
php -m # 查看 apcu 是否已经存在

sudo ln -s /etc/php/7.0/mods-available/apcu.ini /etc/php/7.0/apache2/conf.d/30-apcu.ini
sudo service apache2 reload
```

* Adjust PHP-APCu RAM 调整 apcu 占用的内存大小
```
sudo vim /etc/php/7.0/mods-available/apcu.ini

添加 "apc.shm_size = "50M""

sudo service php7-fpm restart
sudo service apache2 reload
```

* Monitoring APCu Cache
```
wget https://raw.githubusercontent.com/krakjoe/apcu/master/apc.php
通过web访问此文件即可
```


### 然而: `apcu_add` 咋返回 false?
* TODO: apcu 调用失败, 后续再说
