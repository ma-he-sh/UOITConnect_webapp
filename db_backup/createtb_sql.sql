---Table creation--

--Student login--
CREATE TABLE stud_credentials(
    stud_id VARCHAR(100) NOT NULL,
    stud_email VARCHAR(320) NOT NULL,
    stud_name VARCHAR(320) NOT NULL,
    stud_field VARCHAR(320) NOT NULL,
    stud_verify INT DEFAULT 0,
    passw1 VARCHAR(200) NOT NULL,
    passw2 VARCHAR(200) NOT NULL,
    PRIMARY KEY (stud_id) 
)

--Student connections--
CREATE TABLE stud_connect(
    stud_id VARCHAR(100) NOT NULL,
    
)