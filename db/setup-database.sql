CREATE TABLE webNotes (
	noteID varchar(7),
	note varchar(70) NOT NULL,
	PRIMARY KEY (noteID)
);
INSERT INTO webNotes VALUES ('1','This is a test note for note reader site');
INSERT INTO webNotes VALUES ('2','This is a second test note for the note reader site');