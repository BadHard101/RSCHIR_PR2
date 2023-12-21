CREATE DATABASE IF NOT EXISTS appDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT, UPDATE, DELETE, INSERT ON appDB.* TO 'user'@'%';

FLUSH PRIVILEGES;

USE appDB;
CREATE TABLE IF NOT EXISTS students (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  surname VARCHAR(40) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO students (name, surname)
SELECT * FROM (SELECT 'Alex', 'Rover') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM students WHERE name = 'Alex' AND surname = 'Rover'
) LIMIT 1;

INSERT INTO students (name, surname)
SELECT * FROM (SELECT 'Bob', 'Marley') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM students WHERE name = 'Bob' AND surname = 'Marley'
) LIMIT 1;

INSERT INTO students (name, surname)
SELECT * FROM (SELECT 'Alex', 'Rover') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM students WHERE name = 'Alex' AND surname = 'Rover'
) LIMIT 1;

INSERT INTO students (name, surname)
SELECT * FROM (SELECT 'Kate', 'Yandson') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM students WHERE name = 'Kate' AND surname = 'Yandson'
) LIMIT 1;

INSERT INTO students (name, surname)
SELECT * FROM (SELECT 'Lilo', 'Black') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM students WHERE name = 'Lilo' AND surname = 'Black'
) LIMIT 1;