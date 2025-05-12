create database ticket;
use ticket;
create table information (
	No           int(3),
    sortation    char(10)   character set utf8,
    children     int(10),
    adult        int(10),
    comparison   char(10)   character set utf8
);
describe information;
