<?php
$query1 = "CREATE TABLE `a_readers` (
	`stud_id` int(11) NOT NULL,
	`soft_id` int(11) NOT NULL,
	`lname` varchar(25) NOT NULL,
	`fname` varchar(25) NOT NULL,
	`father` varchar(25) NOT NULL,
	`grandpa` varchar(25) NOT NULL,
	`birthdate` date NOT NULL,
	`birthplace` varchar(25) NOT NULL,
	`wali_lname` varchar(25) NOT NULL,
	`wali_fname` varchar(25) NOT NULL,
	`kinship` varchar(25) NOT NULL,
	`job` varchar(25) NOT NULL,
	`cultural_level` varchar(40) NOT NULL,
	`establishment` varchar(40) NOT NULL,
	`address` varchar(40) NOT NULL,
	`engagement_date` date NOT NULL,
	`last_edit` date NOT NULL,
	`phone` varchar(25) NOT NULL,
	`wali_phone` varchar(25) NOT NULL,
	`notes` mediumtext NOT NULL,
	`sex` tinyint(1) NOT NULL,
	PRIMARY KEY (`stud_id`) USING BTREE,
	UNIQUE KEY `soft_id` (`soft_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB";

$query2 = "CREATE TABLE `b_report` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`soft_id` INT(11) NOT NULL,
	`c_date` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`enter_time` VARCHAR(10) NOT NULL COLLATE 'utf8_general_ci',
	`exit_time` VARCHAR(10) NOT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`) USING BTREE,
	INDEX `soft_id` (`soft_id`) USING BTREE,
	CONSTRAINT `b_report_ibfk_1` FOREIGN KEY (`soft_id`) REFERENCES `library_readers_db`.`a_readers` (`soft_id`) ON UPDATE CASCADE ON DELETE CASCADE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1";

$query3 = "CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`user_name` VARCHAR(32) NOT NULL COLLATE 'utf8_general_ci',
	`password` VARCHAR(32) NOT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=3";

//1st user
$user1 = 'admin';
$pwd1 = md5('admin');

//2nd user
$user2 = 'maktaba';
$pwd2 = md5('2020');

//3rd user
$user3 = 'قيمة';
$pwd3 = md5('2020');

$query4 = "INSERT INTO users VALUES
            (1,'$user1','$pwd1'),
			(2,'$user2','$pwd2'),
            (3,'$user3','$pwd3')";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (
  mysqli_query($conn, $query1) and
  mysqli_query($conn, $query2) and
  mysqli_query($conn, $query3) and
  mysqli_query($conn, $query4)
) {
  echo "Tables Created Successfully";
} else {
  echo "ERROR! can not create tables!";
}