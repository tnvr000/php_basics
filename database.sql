CREATE TABLE my_contacts (
  id INT(11) NOT NULL AUTO_INCREMENT,
  full_name VARCHAR(256) NOT NULL,
  gender VARCHAR(6) NOT NULL,
  contact_no VARCHAR(75) NOT NULL,
  email VARCHAR(256) NOT NULL,
  city VARCHAR(256) NOT NULL,
  country VARCHAR(256) NOT NULL,
  PRIMARY KEY(id)
);

INSERT INTO my_contacts (id, full_name, gender, contact_no, email, city, country)
  VALUES (
    1, 'Zeus', 'Male', '111', 'zeus@olympus.co', 'Agos', 'Greece'
  ), (
    2, 'Anthena', 'Female', '123', 'anthena@olympus.co', 'Athens', 'Greece'
  ), (
    3, 'Jupiter', 'Male', '783', 'jupiter@planet.co', 'Rome', 'Italy'
  ), (
    4, 'Venus', 'Female', '987', 'venus@planet.co', 'Mars', 'Italy'
  )
;
