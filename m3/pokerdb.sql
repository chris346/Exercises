-- POkerDB.sql
-- ~/Sites/poker/PokerDB.sql


drop database if exists poker;
create database poker;
use poker


-- Player table
create table Player (
	playerID int primary key not null,
	playerName varchar(255) not null,
	rank int not null
);
insert into Player (playerName, rank) values ("Rick", 1);
insert into Player (playerName, rank) values ("Dan Smith", 2);
insert into Player (playerName, rank) values ("Jason Mercier", 3);
insert into Player (playerName, rank) values ("Paul Volpe", 4);



create table Game (
	gameID int auto_increment primary key not null,
	gameName varchar(255) not null,
	startTime int(11) not null,
	state int not null -- Open=1, closed=0, Break=2 ..
);


insert into Game (gameName, startTime, state) values ("Texas holdem", '144316111231', 0);
insert into Game (gameName, startTime, state) values ("Texas holdem", '144316211231', 1);
insert into Game (gameName, startTime, state) values ("Texas holdem", '144316311231', 1);



create table GamePlayers (
	gameID int not null,
	playerID int not null
);
insert into GamePlayers (gameID, playerID) values (1, 1);
insert into GamePlayers (gameID, playerID) values (1, 2);
insert into GamePlayers (gameID, playerID) values (1, 3);
insert into GamePlayers (gameID, playerID) values (2, 3);
insert into GamePlayers (gameID, playerID) values (2, 4);









