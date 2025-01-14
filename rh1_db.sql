-- Create the database
CREATE DATABASE redhatone;

-- Use the created database
USE redhatone;

-- Create the table 'message' with a column 'content' to store the message
CREATE TABLE message (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content VARCHAR(255)
);

-- Insert the message into the table
INSERT INTO message (content) VALUES ('PHP ROCKS!');
INSERT INTO message (content) VALUES ('No it doesnt!');
INSERT INTO message (content) VALUES ('Python is better!');
INSERT INTO message (content) VALUES ('o5D!06JGt9xb');