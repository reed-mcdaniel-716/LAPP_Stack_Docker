/* Simple table creation and population for PostgreSQL */
/* Help from tutorialspoint */
DROP TABLE IF EXISTS BIRTHDAYS;

CREATE TABLE BIRTHDAYS(
  name TEXT NOT NULL,
  age INT NOT NULL,
  cake TEXT NOT NULL
);

INSERT INTO BIRTHDAYS (name, age, cake) VALUES ('Nathan', 28, 'Chocolate');
INSERT INTO BIRTHDAYS (name, age, cake) VALUES ('Lucas', 24, 'Strawberry');
INSERT INTO BIRTHDAYS (name, age, cake) VALUES ('Peyton', 26, 'Vanilla');
