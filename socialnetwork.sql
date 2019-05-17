create database socialnetwork;
CREATE TABLE if not exists user (
	first_name varchar(255) not null,
	last_name varchar(255) not null,
	nick_name varchar(255) not null,
	pass_word int not null,
	user_email varchar(255) unique not null,
	phone_number varchar(255),
	home_town varchar(255) ,
	about_me varchar(255) ,
	user_status varchar(255),
	birth_date varchar(255),
	user_gender varchar(255),
	number_friends int , 
	user_image BLOB,
	PRIMARY KEY (user_email,nick_name)
);

CREATE TABLE if not exists friendship (
	date timestamp,
        request_status tinyint(1),
        user_email varchar(255),
        friend_email varchar(255),
	PRIMARY KEY (friend_email,user_email),
	FOREIGN KEY (user_email,friend_email) REFERENCES user(user_email,user_email)
);

