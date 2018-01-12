USE mydb;
CREATE TABLE IF NOT EXISTS nav_list (
  external_name VARCHAR(100),
  internal_name VARCHAR(100) NOT NULL,
  is_root       BOOLEAN      NOT NULL,
  owner         VARCHAR(30)  NOT NULL,
  show_state    SET ('in', 'out') DEFAULT NULL
);

ALTER TABLE nav_list
  ADD CONSTRAINT PK_NAV_LIST PRIMARY KEY (external_name);

CREATE TABLE IF NOT EXISTS nav_sub_list (
  external_name VARCHAR(100),
  internal_name VARCHAR(100) NOT NULL,
  main_nav_name VARCHAR(100) NOT NULL
);

ALTER TABLE nav_sub_list
  ADD CONSTRAINT PK_NAV_SUB_LIST PRIMARY KEY (external_name);
ALTER TABLE nav_sub_list
  ADD CONSTRAINT FK_NAVSUBLIST_NAVLIST FOREIGN KEY nav_sub_list(main_nav_name) REFERENCES nav_list (external_name)
  ON DELETE CASCADE;

CREATE TABLE IF NOT EXISTS log_ceres (
  id        VARCHAR(20)            DEFAULT NULL,
  ip        VARCHAR(20),
  comment   VARCHAR(100) NOT NULL,
  type      SET ('enter', 'debug') DEFAULT NULL,
  work_date DATE
);

ALTER TABLE log_ceres
  ADD CONSTRAINT PK_LOG_CERES PRIMARY KEY (id, ip);

CREATE TABLE IF NOT EXISTS member_ceres (
  id         VARCHAR(30),
  pass       VARCHAR(100)   NOT NULL,
  email      VARCHAR(50),
  join_date  DATE           NOT NULL,
  comment    VARCHAR(100) DEFAULT NULL,
  gender     SET ('m', 'f') NOT NULL,
  birth_date DATE           NOT NULL
);

ALTER TABLE member_ceres
  ADD CONSTRAINT UQ_MEMBER_CERES UNIQUE (email);

ALTER TABLE member_ceres
  ADD CONSTRAINT PK_MEMBER_CERES PRIMARY KEY (id);