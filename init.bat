mkdir file\user\admin
mkdir code

echo "Make database in mariadb"
mysql --force -uroot -p < application/docs/sql/createDb.sql
# my.cnf's character-set setting to utf-8
echo "Make table in mariadb"
mysql --force -uroot -p < application/docs/sql/createTable.sql
echo "Make row in mariadb"
mysql --force -uroot -p < application/docs/sql/insertInitRow.sql