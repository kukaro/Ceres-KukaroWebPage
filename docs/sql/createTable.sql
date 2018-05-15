USE mydb;
CREATE TABLE IF NOT EXISTS nav_list (
  external_name VARCHAR(100),
  internal_name VARCHAR(100) NOT NULL,
  is_root       BOOLEAN      NOT NULL,
  owner         VARCHAR(30)  NOT NULL,
  is_hidden     BOOLEAN DEFAULT NULL
);

ALTER TABLE nav_list
  ADD CONSTRAINT PK_NAV_LIST PRIMARY KEY (external_name);