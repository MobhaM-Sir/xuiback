# xui-backup


git clone https://github.com/MobhaM-Sir/xuiback.git /etc/x-ui-english

apt-get install software-properties-common -y

add-apt-repository ppa:ondrej/php

apt-get update -y

apt-get install php8.1 -y

apt-get install libapache2-mod-php8.1 php8.1-fpm libapache2-mod-fcgid php8.1-curl php8.1-dev php8.1-gd php8.1-mbstring php8.1-zip php8.1-mysql php8.1-xml -y



nano /etc/apache2/ports.conf

 در این قسمت پورت 80 را به یه پورت دیگه تغییر بدید
 
service apache2 restart
 
 
sudo crontab -e
 
کد زیر را اضافه کنید
*/5 * * * * /usr/bin/php /etc/x-ui-english/backup.php
