ALTER USER 'root'@'localhost' IDENTIFIED BY 'bZ02qeP@325';
CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER 'wordpress'@'%' IDENTIFIED BY 'Wordpress123#';
GRANT ALL ON wordpress.* TO 'wordpress'@'%' IDENTIFIED BY 'Wordpress123#';
FLUSH PRIVILEGES;
