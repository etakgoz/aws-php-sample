#TODO

1. Why does the errodocument redirection not work?
2. Integrate memcached ==> and/or elasticache (do something involving memcached)
3. Use parameter store to for secret values: https://www.youtube.com/watch?v=3FUpyzc_raI&list=PLt1SIbA8guutb3Ih2uZ_9wS7dQVMRYaav&index=13

Things I have done:

1. sudo apt-get update
2. sudo apt-get install apache2
3. sudo service apache2 restart
4. sudo apt install php libapache2-mod-php
5. sudo git clone https://github.com/etakgoz/aws-php-sample.git
    a. html folder naming required
    b. chown -R www-data:www-data required
6. .htaccess and config.php need to created
7. enabled modrewrite: sudo a2enmod rewrite