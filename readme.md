**blog**


create file in project directory and name it ".env.local"

then configure in .env.local file the DATBASE_URL

for example:

DATABASE_URL="mysql://blog:blog@blog_mysql:3306/blog?serverVersion=mariadb-10.6.4"


then check makefile.


Makefile is a good tool for self-documentation. Using makefile you clearly understand what to do next.

use command **make build** or **./docker/up --build**

for common use try **make up** or **./docker/up** inside this folder

when application begin work properly run php container using **make php** or **./docker/php** in new terminal window (inside this folder)

this action will open new console inside php container

you must create end execute new migration using:

php bin/console make:migration

php bin/console doctrine:migrations:migrate

then open localhost:8000 (8002 for database) in your browser and check webpage. 
