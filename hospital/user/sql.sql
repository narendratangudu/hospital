CREATE TABLE `appoint` (
  `id` INT AUTO_INCREMENT,
  `pname` VARCHAR(20),
  `phone` VARCHAR(20),
  `email` VARCHAR(12),
  `date` VARCHAR(25),
  `address` LONGTEXT,
  `oldornew` VARCHAR(25),
  `p_id` VARCHAR(25),
  `subdate` DATETIME,
  PRIMARY KEY (`id`)
);