create table produtos (
id int primary key not null auto_increment,
descricao varchar(50) not null,
quantidade int null,
valor decimal(8,2)
) engine=InnoDB;