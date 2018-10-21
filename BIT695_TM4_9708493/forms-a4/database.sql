

/*
Create database
*/
CREATE DATABASE IF NOT EXISTS aficionados; 

/*
Create the tables
*/
CREATE TABLE IF NOT EXISTS players (

	MemberId varchar(255) PRIMARY KEY NOT NULL,
	FirstName varchar(255) NOT NULL,
	FamilyName varchar(255) NOT NULL,
	Email varchar(255) NOT NULL,
	Phone varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS board_games (

	MemberId varchar(255) NOT NULL,
	Boardgame varchar(255) NOT NULL,
	Position varchar(255) NOT NULL,
	Notes varchar(255) NOT NULL,
	Date varchar(255) NOT NULL,
	Event varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS schedule (

	Date varchar(255) NOT NULL,
	Venue varchar(255) NOT NULL,
	Notes varchar(255) NOT NULL,
	Event varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS board_game_owners (

	Boardgame varchar(255) NOT NULL,
	MemberId varchar(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS board_games_assigned (

	Boardgame varchar(255) NOT NULL,
	MemberId varchar(255) NOT NULL	
);

