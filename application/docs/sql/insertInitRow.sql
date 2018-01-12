USE mydb;
DELETE FROM nav_list;
INSERT INTO nav_list VALUES ('site introduce', '사이트소개', TRUE, 'root', NULL);
INSERT INTO nav_list VALUES ('file manage', '파일 관리', TRUE, 'root', NULL);
INSERT INTO nav_list VALUES ('code manage', '코드 관리', TRUE, 'root', NULL);
INSERT INTO nav_list VALUES ('sign in', '로그인', TRUE, 'root', 'out');
INSERT INTO nav_list VALUES ('sign up', '회원 가입', TRUE, 'root', 'out');
INSERT INTO nav_list VALUES ('sign out', '로그아웃', TRUE, 'root', 'in');

DELETE FROM nav_sub_list;
INSERT INTO nav_sub_list VALUES ('ceres', 'ceres', 'site introduce');
INSERT INTO nav_sub_list VALUES ('owner', 'owner', 'site introduce');