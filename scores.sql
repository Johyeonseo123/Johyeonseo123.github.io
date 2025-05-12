create database ticket;
use ticket;
create table scores (
    name		char(32)  	character set utf8,
	basics1 	int(3),
	basics2 	int(3),
	big1		int(3),
	big2		int(3),
	freedom1	int(3),
	freedom2	int(3),
	annual1		int(3),
	annual2		int(3)
);
describe scores;