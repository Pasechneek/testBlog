**blog**


create file in project directory and name it ".env.local"

then configure in .env.local file the DATBASE_URL

for example:

DATABASE_URL="mysql://blog:blog@blog_mysql:3306/blog?serverVersion=mariadb-10.6.4"


then check makefile.


Makefile is a good tool for self-documentation. Using makefile you clearly understand what to do next.

use command **make build** (./docker/up --build)

for common use try **make up** (docker/up)

then open localhost:8000 (8002 for database) in your browser and check webpage. 

relations:

One Post may have many comments (ManyToOne)

Comment can not be nullable because it can not exist without a Post entity.
