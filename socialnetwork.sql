CREATE DATABASE socialnetwork;

CREATE TABLE user_(
	first_name 	varchar(255) not null,
	last_name 	varchar(255) not null,
	nick_name 	varchar(255) not null,
	pass_word 	varchar(255) not null,
	user_email 	varchar(255) not null,
	phone_number varchar(255),
	home_town 	varchar(255) ,
	about_me 	varchar(255) ,
	user_status varchar(255),
	birth_date 	varchar(255),
	user_gender varchar(255),
	user_image 	blob,
	PRIMARY KEY (user_email)
);

CREATE TABLE friendship (
	date_ timestamp,
    request_status varchar(1),
    user_email varchar(255),
    friend_email varchar(255),
	PRIMARY KEY (friend_email,user_email),
	FOREIGN KEY (user_email) REFERENCES user_(user_email),
    FOREIGN KEY (friend_email) REFERENCES user_(user_email)
);