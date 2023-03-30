-- CREATE TABLE role 
-- (
--     roleId varchar(255),
--     roleName varchar(255),
--     roleLevel varchar(255),
--     primary key(roleId)
-- );
CREATE TABLE roles (
  role_id INT PRIMARY KEY auto_increment,
  role_name VARCHAR(50),
  role_level VARCHAR(25)
);



-- CREATE TABLE user 
-- (
--     userId varchar(255),
--     userName varchar(255),
--     userNum varchar(255),
--     userEmail varchar(255),
--     userPassword varchar(255),
--     roleId varchar(255),
--     primary key(userId),
--     foreign key(roleId) references role(roleId)
-- );
CREATE TABLE users (
  user_id INT auto_increment PRIMARY KEY,
  user_name VARCHAR(255),
  user_num VARCHAR(255),
  user_email VARCHAR(255),
  user_password VARCHAR(255),
  role_id INT ,
  FOREIGN KEY (role_id) REFERENCES roles (role_id)
);
ALTER TABLE users ADD COLUMN user_school VARCHAR(255);



-- CREATE TABLE questions 
-- (
--     questionId varchar(255),
--     questionName varchar(255),
--     roleId varchar(255),
--     primary key(questionId),
--     foreign key(roleId) references role(roleId)
-- );
CREATE TABLE questions (
  question_id int auto_increment PRIMARY KEY,
  question_name VARCHAR(255),
  role_id int,
  FOREIGN KEY (role_id) REFERENCES roles (role_id)
);


-- CREATE TABLE events 
-- (
--     eventId int auto_increment,
--     eventname varchar(255),
--     roleId varchar(255),
--     event_description varchar(9999),
--     primary key(eventID),
--     foreign key(roleId) references role(roleId)
-- )
CREATE TABLE events (
  event_id INT AUTO_INCREMENT PRIMARY KEY,
  event_name VARCHAR(255),
  role_id VARCHAR(255),
  event_description VARCHAR(9999),
  FOREIGN KEY (role_id) REFERENCES roles (role_id)
);
