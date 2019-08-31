CREATE TABLE webNotes (
	noteID varchar(7),
	note varchar(50) NOT NULL,
	PRIMARY KEY (noteID)
);
INSERT INTO webNotes VALUES ('1','This is a test note for note reader site');