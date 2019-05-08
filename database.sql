Drop database university;
CREATE DATABASE university;
USE university;

CREATE TABLE admins
(
	id INT auto_increment primary key,
	name VARCHAR(80),
	username VARCHAR(80),
	password VARCHAR(80)
);
INSERT INTO admins VALUES(0,'Jordyn Jones','JJones','1111');

CREATE TABLE staffs
(
	id INT auto_increment primary key,
	name VARCHAR(80),
	job VARCHAR(80),
	img VARCHAR(80)
);
INSERT INTO staffs VALUES(0,'Jordyn Jones','Associate Professor','p1.jpg');
INSERT INTO staffs VALUES(0,'William Smith','Professor','p2.jpg');
INSERT INTO staffs VALUES(0,'Carl Johnson','Professor','p3.jpg');
INSERT INTO staffs VALUES(0,'Gordon Glum','Associate Professor','p4.jpg');
INSERT INTO staffs VALUES(0,'Erica Klein','Adjunct Professor','p5.jpg');
INSERT INTO staffs VALUES(0,'Seth Roy','Professor','p6.jpg');
INSERT INTO staffs VALUES(0,'Amada Olsen','Professor','p7.jpg');
INSERT INTO staffs VALUES(0,'Tom Cruise','Adjunct Professor','p8.jpg');
INSERT INTO staffs VALUES(0,'Jordan Bill','Professor','p9.jpg');
INSERT INTO staffs VALUES(0,'Socrates','Professor','p10.jpg');
INSERT INTO staffs VALUES(0,'Jaimie Love','Lecturer and Co-Director','p11.jpg');

CREATE TABLE schools
(
	id INT auto_increment primary key,
	name VARCHAR(80)
);
INSERT INTO schools VALUES(1,'Environmental Sciences');
INSERT INTO schools VALUES(2,'Medicine');
INSERT INTO schools VALUES(3,'Engineering');
INSERT INTO schools VALUES(4,'Humanity & Sciences');

CREATE TABLE departments
(
	id INT auto_increment primary key,
	name VARCHAR(80),
	id_sch VARCHAR(10),
	director VARCHAR(80),
	founded_in DATE,
	description VARCHAR(500),
	img VARCHAR(200)
);
INSERT INTO departments VALUES(0,'Energy','1','Emy Perez','1890-10-10',"The mission of the Energy Department is to ensure America’s security and prosperity by addressing its energy, environmental and nuclear challenges through transformative science and technology solutions.",'eng.jpg');
INSERT INTO departments VALUES(0,'Oceanography','1','Veronica Rodrigo','1900-06-13',"The Department of Oceanography is located on the University of Hawaii's largest campus (about 20,000 students), overlooking Waikiki and downtown Honolulu, the State Capitol and business and cultural center. As a designated 'area of excellence', the marine and earth sciences enjoy strong support at the State and University levels.",'oce.jpg');
INSERT INTO departments VALUES(0,'Food & Agriculture','1','William McHang','1920-12-01',"The mission of the Office of Environmental Farming & Innovation is to serve California by supporting agricultural production and incentivizing practices resulting in a net benefit for the environment through innovation, efficient management and science.",'foo.png');
INSERT INTO departments VALUES(0,'Genetics','2','Kyle Poppins','1899-02-10',"A leader in the biomedical revolution, Stanford Medicine has a long tradition of leadership in pioneering research, creative teaching protocols and effective clinical therapies.",'gen.jpg');
INSERT INTO departments VALUES(0,'Chemical Engineering','3','Leslie Draco','1900-10-01',"Chemical engineering occupies a unique position at the interface between molecular sciences and engineering. Intimately linked with the fundamental subjects of chemistry, biology, mathematics, and physics - chemical engineering offers unparalleled opportunities to do great things.",'che.jpg');
INSERT INTO departments VALUES(0,'Computer Science','3','Bill Ortega','1900-10-01',"The Department was organized in 1965 and is one of the oldest departments of its kind in the country. The history of the department, including major events and when faculty joined, appears in the CS Timeline. It has a full-time faculty of nearly 40 with around 275-300 students graduating each year.",'com.jpeg');
INSERT INTO departments VALUES(0,'Finance','4','Ortega Tyler','1900-01-01',"We administer the tax and revenue laws of the City fairly, efficiently and transparently to instill public confidence and encourage compliance while providing exceptional customer service.",'fin.png');
INSERT INTO departments VALUES(0,'Public Relations','4','Paul Kazuya','1980-06-10',"To find a list of Principal Officers, Assistant Secretaries, Ambassadors and Chiefs of Mission, please select a link from 'In This Section' on the left. Information on these pages is updated periodically and may not reflect the most current status of appointments and personnel changes.",'pub.jpg');

--update departments set dep_index=concat(description,name);

CREATE VIEW department_view AS
SELECT departments.*, schools.name as school
FROM departments
JOIN schools
ON departments.id_sch=schools.id;

