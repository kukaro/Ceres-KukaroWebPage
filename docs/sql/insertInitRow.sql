USE mydb;
DELETE FROM nav_list;
INSERT INTO nav_list VALUES ('site introduce', '사이트소개', TRUE, 'root', TRUE, NULL);
INSERT INTO nav_list VALUES ('file manage', '파일 관리', TRUE, 'root', TRUE, NULL);
INSERT INTO nav_list VALUES ('code manage', '코드 관리', TRUE, 'root', TRUE, NULL);
INSERT INTO nav_list VALUES ('sign in', '로그인', TRUE, 'root', TRUE, 'out');
INSERT INTO nav_list VALUES ('sign up', '회원 가입', TRUE, 'root', TRUE, 'out');
INSERT INTO nav_list VALUES ('sign out', '로그아웃', TRUE, 'root', TRUE, 'in');