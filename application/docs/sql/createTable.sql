use mydb;
create table if not exists nav_list(
    external_name varchar(100),
    internal_name varchar(100) not null,
    is_root boolean not null,
    owner varchar(30) not null,
    show_state set('in','out') default null
);

alter table nav_list add constraint PK_NAV_LIST primary key (external_name);

create table if not EXISTS nav_sub_list(
    external_name varchar(100),
    internal_name varchar(100) not null
);

alter table nav_sub_list add constraint PK_NAV_SUB_LIST primary key (external_name);
alter table nav_sub_list add constraint FK_NAVSUBLIST_NAVLIST foreign key nav_sub_list(external_name) references nav_list(external_name) on delete cascade;