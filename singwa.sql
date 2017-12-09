//后台用户
CREATE TABLE think5_admin_user(
id INT (5) unsigned PRIMARY KEY auto_increment,
name VARCHAR (32) NOT NULL ,
password VARCHAR (32) NOT NULL ,
phone INT (11) ,
email VARCHAR (32) ,
role SMALLINT (3) unsigned,
last_ip VARCHAR (15),
last_login_time INT (10) unsigned,
status tinyint (1) unsigned,
listorder INT (5) unsigned,
create_time INT (10) unsigned,
update_time INT (10) unsigned
)DEFAULT charset=utf8 auto_increment = 1;

INSERT INTO think5_admin_user VALUES (1,'admin',md5('admin'),15812345678,'bellligesi@gmail.com',50,'127.0.0.1',8888888888,1,1,88888888,88888888);

//新闻表
CREATE TABLE think5_news(
id INT (10) unsigned PRIMARY KEY auto_increment,
title VARCHAR (100) NOT NULL DEFAULT '',
small_title VARCHAR (30) DEFAULT '',
catid SMALLINT (8) unsigned,
image VARCHAR (255) DEFAULT '',
content text ,
description VARCHAR (200) DEFAULT '',
is_postion tinyint (1) DEFAULT 0,
is_head_figure tinyint (1) DEFAULT 0,
is_allowcomment tinyint (1) DEFAULT 0,
listorder INT (10) ,
source_type tinyint (1) DEFAULT  0,
create_time INT (10) ,
update_time INT (10) ,
status tinyint (1) ,DEFAULT 0,
INDEX ('title'),
INDEX ('create_time')
)DEFAULT charset=utf8 auto_increment=1;