/* Simple table creation and population for PostgreSQL */
/* Help from tutorialspoint */
DROP TABLE IF EXISTS BIRTHDAYS;

CREATE TABLE BIRTHDAYS(
  NAME TEXT NOT NULL,
  AGE INT NOT NULL,
  CAKE TEXT NOT NULL
);

INSERT INTO BIRTHDAYS (NAME, AGE, CAKE) VALUES ('Nathan', 28, 'Chocolate');
INSERT INTO BIRTHDAYS (NAME, AGE, CAKE) VALUES ('Lucas', 24, 'Strawberry');
INSERT INTO BIRTHDAYS (NAME, AGE, CAKE) VALUES ('Peyton', 26, 'Vanilla');
