drop schema if exists test;
create schema test;
use test;
drop table if exists posts;
create table posts(id int auto_increment not null, uuid char(36) not null, text varchar(100) not null, primary key (id));
insert into posts(uuid, text) values(uuid(), 'Hello World!');
insert into posts(uuid, text) values(uuid(), '2nd post: this is a lorem ipsum, meaning it is a dummy text');
insert into posts(uuid, text) values(uuid(),'3rd post: this is also a lorem ipsum, meaning it is another dummy text');