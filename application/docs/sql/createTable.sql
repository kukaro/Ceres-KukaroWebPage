use mydb;
create table if not exists nav_list(
    external_name varchar(100) primary key,
    internal_name varchar(100) not null,
    is_root boolean not null,
    owner varchar(30) not null,
    show_state set('in','out') default null
);
