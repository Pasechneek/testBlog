**blog**


create .env .env.local file


then configure in .env.local the DATBASE_URL


then check makefile.


Makefile is a good tool for self-documentation. Using makefile you clearly understand what to do next.

use command **make build**

then open localhost:8000 (8002 for database) in your browser and check webpage.



relations:

One Post may have many comments (ManyToOne)


Comment can not be nullable because it can not exist without a Post entity.
