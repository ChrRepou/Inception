service mysql start 


echo "CREATE DATABASE IF NOT EXISTS $database_name ;" > db1.sql
echo "CREATE USER IF NOT EXISTS '$database_username'@'%' IDENTIFIED BY '$database_password' ;" >> db1.sql
echo "GRANT ALL PRIVILEGES ON $database_name.* TO '$database_username'@'%' ;" >> db1.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '12345' ;" >> db1.sql
echo "FLUSH PRIVILEGES;" >> db1.sql

mysql < db1.sql

kill $(cat /var/run/mysqld/mysqld.pid)

mysqld