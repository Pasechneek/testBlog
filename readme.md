**first**


create .env .env.local file


then configure in .env.local the DATBASE_URL


then check makefile.


Makefile is a good tool for self-documentation. Using makefile you clearly understand what to do next.



relations:

One Post may have many comments (ManyToOne)


Comment can not be nullable because it can not exist without a Post entity.
