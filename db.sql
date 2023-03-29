CREATE TABLE role 
(
    roleId varchar(255),
    roleName varchar(255),
    roleLevel varchar(255),
    primary key(roleId)
);



CREATE TABLE user 
(
    userId varchar(255),
    userName varchar(255),
    userNum varchar(255),
    userEmail varchar(255),
    userPassword varchar(255),
    roleId varchar(255),
    primary key(userId),
    foreign key(roleId) references role(roleId)
);


CREATE TABLE questions 
(
    qId varchar(255),
    qName varchar(255),
    roleId varchar(255),
    primary key(qID),
    foreign key(roleId) references role(roleId)
);

CREATE TABLE events 
(
    eventId varchar(255),
    eventname varchar(255),
    roleId varchar(255),
    primary key(eventID),
    foreign key(roleId) references role(roleId)
)