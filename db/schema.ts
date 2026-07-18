import { integer, numeric, pgTable, serial, varchar } from "drizzle-orm/pg-core";

export const productos = pgTable("productos", {
  id: serial().primaryKey(),
  nombre: varchar({ length: 100 }).notNull(),
  categoria: varchar({ length: 100 }).notNull(),
  precio: numeric({ precision: 10, scale: 2 }).notNull(),
  cantidad: integer().notNull(),
});
