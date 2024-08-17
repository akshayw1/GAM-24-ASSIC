CREATE DATABASE alumni_event;

USE alumni_event;

CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    year INT NOT NULL,
    branch VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    designation VARCHAR(255) NOT NULL,
    numPeople INT NOT NULL,
    numChildrenUnder5 INT NOT NULL,
    paymentScreenshot VARCHAR(255) NOT NULL
);
