[code]
mysql> use code;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
mysql> show tables;
+----------------+
| Tables_in_code |
+----------------+
| ciudades       |
| paises         |
| usuarios       |
+----------------+
3 rows in set (0.00 sec)

mysql> describe ciudades;
+-----------+--------------+------+-----+---------+----------------+
| Field     | Type         | Null | Key | Default | Extra          |
+-----------+--------------+------+-----+---------+----------------+
| ciudad_id | int(10)      | NO   | PRI | NULL    | auto_increment |
| nombre    | varchar(250) | YES  |     | NULL    |                |
| estado    | varchar(250) | YES  |     | NULL    |                |
| pais_id   | int(10)      | YES  |     | NULL    |                |
+-----------+--------------+------+-----+---------+----------------+
4 rows in set (0.02 sec)

mysql> describe paises;
+---------+--------------+------+-----+---------+----------------+
| Field   | Type         | Null | Key | Default | Extra          |
+---------+--------------+------+-----+---------+----------------+
| pais_id | int(10)      | NO   | PRI | NULL    | auto_increment |
| nombre  | varchar(250) | YES  |     | NULL    |                |
| estado  | varchar(250) | YES  |     | NULL    |                |
+---------+--------------+------+-----+---------+----------------+
3 rows in set (0.01 sec)

mysql> describe usuarios;
+------------+--------------+------+-----+---------+----------------+
| Field      | Type         | Null | Key | Default | Extra          |
+------------+--------------+------+-----+---------+----------------+
| usuario_id | int(10)      | NO   | PRI | NULL    | auto_increment |
| nombre     | varchar(250) | YES  |     | NULL    |                |
| apepat     | varchar(250) | YES  |     | NULL    |                |
| apemat     | varchar(250) | YES  |     | NULL    |                |
| estado     | varchar(250) | YES  |     | NULL    |                |
| ciudad_id  | int(10)      | YES  |     | NULL    |                |
+------------+--------------+------+-----+---------+----------------+
6 rows in set (0.00 sec)
[/code]
