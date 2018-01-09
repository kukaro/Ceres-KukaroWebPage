use mydb;

create table nav_list(
    external_name varchar(100) primary key,
    internal_name varchar(100) not null,
    is_root boolean not null,
    owner varchar(30) not null
);
