create table programing
	(rank int primary key,
	language text,
	most_use_case text,
	salary_year int,
	founder text
	);

	insert into programing value
	('1','Python'    , 'Data Science'           , '120000' ,'Guido Van Rossum'),
	('2' , 'Javascript', 'Web Development'        , '110000','Brenden Eich'),
	('3' , 'Java'      , 'Mobile App Development' , '105000' ,'James Gosling'),
	('4' , 'C#'        , 'Game Development'       , '100000', 'Microsoft'),
	('5' , 'Go'        , 'Web Development'        , '130000' ,'Google'),
	('6' , 'Typescript', 'Web Development'        , '115000', 'Microsoft'),
	('7' , 'Ruby'      ,'Web Development'        , '110000', 'Yukihiro Matsumoto'),
	('8' , 'kotlin'     ,'Mobile App Development'  ,'114000', 'Jetbraints'),
	('9' , 'Swift'     , 'Mobile App Development'  ,'125000', 'Apple inc'),
	('10' ,'PHP'        ,'Web Development'        , '95000' , 'Rasmus redolf');