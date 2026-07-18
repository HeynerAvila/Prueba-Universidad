CREATE TABLE "productos" (
	"id" serial PRIMARY KEY,
	"nombre" varchar(100) NOT NULL,
	"categoria" varchar(100) NOT NULL,
	"precio" numeric(10,2) NOT NULL,
	"cantidad" integer NOT NULL
);
