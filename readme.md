**first**

create .env .env.local file

configure in .env.local DATBASE_URL

for example

DATABASE_URL="mysql://databaseLogin:databasePassword@projectName_mysql:3306/name?serverVersion=mariadb-10.6.4"
APP_SECRET=""



relations:

one Post may have many comments (ManyToOne)

comment cant be nullable becouse it cant exixt without post