CREATE TABLE club_member
(
    member_id  INTEGER PRIMARY KEY AUTO_INCREMENT,
    username   VARCHAR(50) UNIQUE NOT NULL,
    password   VARCHAR(255)       NOT NULL,
    email      VARCHAR(255)       NOT NULL,
    phone      VARCHAR(255),
    first_name VARCHAR(50)        NOT NULL,
    last_name  VARCHAR(50)        NOT NULL,
    address    VARCHAR(255),
    is_admin   BOOL
);

CREATE TABLE court
(
    court_id          INTEGER PRIMARY KEY AUTO_INCREMENT,
    court_description VARCHAR(255),
    surface           VARCHAR(50) NOT NULL,
    is_inside         BOOL
);

CREATE TABLE reservation
(
    reservation_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    from_date      DATE    NOT NULL,
    to_date        DATE    NOT NULL,
    player_total   INTEGER,
    fk_reservator  INTEGER NOT NULL,
    fk_court       INTEGER NOT NULL
);

ALTER TABLE reservation
    ADD FOREIGN KEY (fk_reservator) REFERENCES club_member (member_id);
ALTER TABLE reservation
    ADD FOREIGN KEY (fk_court) REFERENCES court (court_id);

INSERT INTO court (court_description, surface, is_inside)
VALUES ('Platz 1', 'clay', false),
       ('Platz 2', 'grass', false),
       ('Platz 3', 'synthetic', false),
       ('Platz 3', 'cement', false),
       ('Platz 3', 'carpet', true);