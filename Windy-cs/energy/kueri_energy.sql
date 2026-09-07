create table phone
(rank int primary key,
country text,
city text,
continent text,
energy_type text,
production_mw int,
co2_reduction int);

insert into energy values
('1','Germany','Berlin','Europe','Solar','4500','2300000'),
('2','China','Shanghai','Asia','Solar','7200','38000000'),
('3','France','Marseille','Europe','Solar','3700','2000000'),
('4','India','Bangalore','Asia','Wind','3900','2100000'),
('5','United States','Los Angeles','Amerika','Wind','4800','2500000'),
('6','Brazil','San Paulo','Amerika','Hydroelectric','6800','3500000'),
('7','Canada','Vancouver','Amerika','Hydroelectric','5200','2900000'),
('8','Spain','Madrid','Solar','Solar','4200','2600000'),
('9','Mexico','Mexico ity','Amerika','Wind','4300','2400000');
