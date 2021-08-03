#FEEDBACK UTIL

##DOCUMENTATION
- Creating a mysql, nginx and php application
  https://www.youtube.com/watch?v=ITOnpzkzlYM
  
- Creating a symfony application
  https://www.youtube.com/watch?v=tcU5XwlEeRU
  
##FIRST PAGE
http://localhost:8989


##MYSQL INIT
GRANT ALL ON feedbackutil.* TO 'user';
CREATE TABLE `feedbackutil`.`dimension` (
`uuid` CHAR(45) NOT NULL,
`name` VARCHAR(45) NULL,
`weight` INT NULL,
PRIMARY KEY (`uuid`));
