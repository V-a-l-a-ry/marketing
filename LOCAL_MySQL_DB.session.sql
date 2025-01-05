-- @block
CREATE TABLE Users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    bio TEXT,
    country VARCHAR(3)
);

--@block
INSERT INTO Users (email, bio, country)
VALUES(
    'hello@world.com',
    'I love humanity',
    'KEN'
);

--@block
SELECT * FROM Users;

