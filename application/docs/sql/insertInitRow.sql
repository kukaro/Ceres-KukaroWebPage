use mydb;
delete from nav_list;
insert into nav_list values('site introduce','사이트소개',true,'root',null);
insert into nav_list values('file manage','파일 관리',true,'root',null);
insert into nav_list values('code manage','코드 관리',true,'root',null);
insert into nav_list values('sign in','로그인',true,'root','out');
insert into nav_list values('sign up','회원 가입',true,'root','out');
insert into nav_list values('sign out','로그아웃',true,'root','in');

delete from nav_sub_list;
insert into nav_sub_list values('ceres','ceres','site introduce');
insert into nav_sub_list values('owner','owner','site introduce');