create database modafesc;
use modafesc;



create table Producto(
IdProducto varchar(6) primary key,
Nombre varchar (75),
Descripcion varchar(200),
Precio float);

create table Stock(
IdProducto  varchar(6) foreign key references Producto(IdProducto), 
Cantidad int,
Ruta varchar(5));

create table Cliente(
IdCliente varchar(50) primary key,
Nombre varchar(50),
Correo varchar(20),
Contrasena varchar(30),
Telefono int,
Direccion varchar(200));

create table Carrito(
IdCliente varchar(50) foreign key references Cliente(IdCliente),
IdProducto  varchar(6) foreign key references Producto(IdProducto),
Agregado int
);

create table Pedidos(
IdPedido int primary key,
IdCliente varchar(50)foreign key references Cliente(IdCliente),
MontoAPagar float,
IndicacionesDeEntrega varchar(200),
FechaPedido varchar(15),
FechaEntrega varchar(15));

create table Detalle(
IdPedido int foreign key references Pedidos(IdPedido),
IdCliente varchar(50) foreign key references Cliente(IdCliente),
IdProducto  varchar(6)foreign key references Producto(IdProducto),
Comprado int);





--Registros Producto
INSERT INTO Producto (IdProducto, Nombre, Descripcion, Precio) VALUES 
('001S', 'Playera de mujer - Color verde', 'Playera talla S con diseño personalizado', 149.00),
('001M', 'Playera de mujer - Color verde', 'Playera talla M con diseño personalizado', 199.00),
('001L', 'Playera de mujer - Color verde', 'Playera talla L con diseño personalizado', 249.00),
('001X', 'Playera de mujer - Color verde', 'Playera talla XL con diseño personalizado', 299.00),
('002S', 'Playera de mujer - Color azul', 'Playera talla S con diseño personalizado', 149.00),
('002M', 'Playera de mujer - Color azul', 'Playera talla M con diseño personalizado', 199.00),
('002L', 'Playera de mujer - Color azul', 'Playera talla L con diseño personalizado', 249.00),
('002X', 'Playera de mujer - Color azul', 'Playera talla XL con diseño personalizado', 299.00),
('003S', 'Playera de mujer - Color rojo', 'Playera talla S con diseño personalizado', 149.00),
('003M', 'Playera de mujer - Color rojo', 'Playera talla M con diseño personalizado', 199.00),
('003L', 'Playera de mujer - Color rojo', 'Playera talla L con diseño personalizado', 249.00),
('003X', 'Playera de mujer - Color rojo', 'Playera talla XL con diseño personalizado', 299.00),
('004S', 'Playera de mujer - Color negro', 'Playera talla S con diseño personalizado', 149.00),
('004M', 'Playera de mujer - Color negro', 'Playera talla M con diseño personalizado', 199.00),
('004L', 'Playera de mujer - Color negro', 'Playera talla L con diseño personalizado', 249.00),
('004X', 'Playera de mujer - Color negro', 'Playera talla XL con diseño personalizado', 299.00),
('005S', 'Playera de mujer - Color amarillo', 'Playera talla S con diseño personalizado', 149.00),
('005M', 'Playera de mujer - Color amarillo', 'Playera talla M con diseño personalizado', 199.00),
('005L', 'Playera de mujer - Color amarillo', 'Playera talla L con diseño personalizado', 249.00),
('005X', 'Playera de mujer - Color amarillo', 'Playera talla XL con diseño personalizado', 299.00),
('006S', 'Playera de mujer - Color blanco', 'Playera talla S con diseño personalizado', 149.00),
('006M', 'Playera de mujer - Color blanco', 'Playera talla M con diseño personalizado', 199.00),
('006L', 'Playera de mujer - Color blanco', 'Playera talla L con diseño personalizado', 249.00),
('006X', 'Playera de mujer - Color blanco', 'Playera talla XL con diseño personalizado', 299.00),
('007S', 'Playera de mujer - Color rosa', 'Playera talla S con diseño personalizado', 149.00),
('007M', 'Playera de mujer - Color rosa', 'Playera talla M con diseño personalizado', 199.00),
('007L', 'Playera de mujer - Color rosa', 'Playera talla L con diseño personalizado', 249.00),
('007X', 'Playera de mujer - Color rosa', 'Playera talla XL con diseño personalizado', 299.00),
('008S', 'Playera de mujer - Color morado', 'Playera talla S con diseño personalizado', 149.00),
('008M', 'Playera de mujer - Color morado', 'Playera talla M con diseño personalizado', 199.00),
('008L', 'Playera de mujer - Color morado', 'Playera talla L con diseño personalizado', 249.00),
('008X', 'Playera de mujer - Color morado', 'Playera talla XL con diseño personalizado', 299.00),
('009S', 'Playera de mujer - Color naranja', 'Playera talla S con diseño personalizado', 149.00),
('009M', 'Playera de mujer - Color naranja', 'Playera talla M con diseño personalizado', 199.00),
('009L', 'Playera de mujer - Color naranja', 'Playera talla L con diseño personalizado', 249.00),
('009X', 'Playera de mujer - Color naranja', 'Playera talla XL con diseño personalizado', 299.00),
('010S', 'Playera de hombre - Color verde', 'Playera talla S con diseño personalizado', 149.00),
('010M', 'Playera de hombre - Color verde', 'Playera talla M con diseño personalizado', 199.00),
('010L', 'Playera de hombre - Color verde', 'Playera talla L con diseño personalizado', 249.00),
('010X', 'Playera de hombre - Color verde', 'Playera talla XL con diseño personalizado', 299.00),     
('011S', 'Playera de hombre - Color azul', 'Playera talla S con diseño personalizado', 149.00),
('011M', 'Playera de hombre - Color azul', 'Playera talla M con diseño personalizado', 199.00),
('011L', 'Playera de hombre - Color azul', 'Playera talla L con diseño personalizado', 249.00),
('011X', 'Playera de hombre - Color azul', 'Playera talla XL con diseño personalizado', 299.00),
('012S', 'Playera de hombre - Color rojo', 'Playera talla S con diseño personalizado', 149.00),
('012M', 'Playera de hombre - Color rojo', 'Playera talla M con diseño personalizado', 199.00),
('012L', 'Playera de hombre - Color rojo', 'Playera talla L con diseño personalizado', 249.00),
('012X', 'Playera de hombre - Color rojo', 'Playera talla XL con diseño personalizado', 299.00),
('013S', 'Playera de hombre - Color negro', 'Playera talla S con diseño personalizado', 149.00),
('013M', 'Playera de hombre - Color negro', 'Playera talla M con diseño personalizado', 199.00),
('013L', 'Playera de hombre - Color negro', 'Playera talla L con diseño personalizado', 249.00),
('013X', 'Playera de hombre - Color negro', 'Playera talla XL con diseño personalizado', 299.00),
('014S', 'Playera de hombre - Color amarillo', 'Playera talla S con diseño personalizado', 149.00),
('014M', 'Playera de hombre - Color amarillo', 'Playera talla M con diseño personalizado', 199.00),
('014L', 'Playera de hombre - Color amarillo', 'Playera talla L con diseño personalizado', 249.00),
('014X', 'Playera de hombre - Color amarillo', 'Playera talla XL con diseño personalizado', 299.00),
('015S', 'Playera de hombre - Color blanco', 'Playera talla S con diseño personalizado', 149.00),
('015M', 'Playera de hombre - Color blanco', 'Playera talla M con diseño personalizado', 199.00),
('015L', 'Playera de hombre - Color blanco', 'Playera talla L con diseño personalizado', 249.00),
('015X', 'Playera de hombre - Color blanco', 'Playera talla XL con diseño personalizado', 299.00),
('016S', 'Playera de hombre - Color morado', 'Playera talla S con diseño personalizado', 149.00),
('016M', 'Playera de hombre - Color morado', 'Playera talla M con diseño personalizado', 199.00),
('016L', 'Playera de hombre - Color morado', 'Playera talla L con diseño personalizado', 249.00),
('016X', 'Playera de hombre - Color morado', 'Playera talla XL con diseño personalizado', 299.00),
('017S', 'Playera de hombre - Color naranja', 'Playera talla S con diseño personalizado', 149.00),
('017M', 'Playera de hombre - Color naranja', 'Playera talla M con diseño personalizado', 199.00),
('017L', 'Playera de hombre - Color naranja', 'Playera talla L con diseño personalizado', 249.00),
('017X', 'Playera de hombre - Color naranja', 'Playera talla XL con diseño personalizado', 299.00);

--Registros STOCK
INSERT INTO Stock (IdProducto, Cantidad, Ruta) VALUES
('001S', 10, '001'),
('001M', 15, '001'),
('001L', 20, '001'),
('001X', 5, '001'),
('002S', 25, '002'),
('002M', 30, '002'),
('002L', 40, '002'),
('002X', 20, '002'),
('003S', 5, '003'),
('003M', 10, '003'),
('003L', 15, '003'),
('003X', 10, '003'),
('004S', 20, '004'),
('004M', 25, '004'),
('004L', 30, '004'),
('004X', 10, '004'),
('005S', 30, '005'),
('005M', 35, '005'),
('005L', 40, '005'),
('005X', 15, '005'),
('006S', 5, '006'),
('006M', 10, '006'),
('006L', 15, '006'),
('006X', 20, '006'),
('007S', 15, '007'),
('007M', 20, '007'),
('007L', 25, '007'),
('007X', 5, '007'),
('008S', 20, '008'),
('008M', 25, '008'),
('008L', 30, '008'),
('008X', 10, '008'),
('009S', 5, '009'),
('009M', 10, '009'),
('009L', 15, '009'),
('009X', 30, '009'),
('010S', 20, '010'),
('010M', 25, '010'),
('010L', 30, '010'),
('010X', 10, '010'),
('011S', 5, '011'),
('011M', 10, '011'),
('011L', 15, '011'),
('011X', 10, '011'),
('012S', 15, '012'),
('012M', 10, '012'),
('012L', 15, '012'),
('012X', 20, '012'),
('013S', 5, '013'),
('013M', 10, '013'),
('013L', 15, '013'),
('013X', 20, '013'),
('014S', 5, '014'),
('014M', 10, '014'),
('014L', 15, '014'),
('014X', 20, '014'),
('015S', 5, '015'),
('015M', 10, '015'),
('015L', 15, '015'),
('015X', 20, '015'),
('016S', 5, '016'),
('016M', 10, '016'),
('016L', 15, '016'),
('016X', 20, '016'),
('017S', 5, '017'),
('017M', 10, '017'),
('017L', 15, '017'),
('017X', 20, '017');

-- Insertar registros ficticios con direcciones ficticias de México
INSERT INTO Cliente (IdCliente, Nombre, Correo, Contrasena, Telefono, Direccion)
VALUES ('Juan', 'Juan Pérez', 'juan@example.com', 'contraseña1',55123457, 'Calle Reforma 123, Colonia Centro, Ciudad de México, CDMX'),
       ('Maria', 'María Gómez', 'maria@example.com', 'contraseña 2',72912356, 'Avenida Juárez 456, Colonia Bella Vista, Pachuca, Hidalgo'),
       ('Pedro', 'Pedro Rodríguez', 'pedro@example.com', 'contraseña3',56198754, 'Calle Insurgentes 789, Colonia Lomas Verdes, Naucalpan, Estado de México'),
       ('Laura', 'Laura Torres', 'laura@example.com', 'contraseña4',55456789, 'Avenida Revolución 321, Colonia San Pedro, Toluca, Estado de México'),
       ('Carlos', 'Carlos López', 'carlos@example.com', 'contraseña5',72968748, 'Calle Morelos 654, Colonia San Francisco, Ecatepec, Estado de México');

-- Insertar registros Pedidos
INSERT INTO Pedidos (IdPedido, IdCliente, MontoAPagar, IndicacionesDeEntrega, FechaPedido, FechaEntrega)
VALUES (1,'Juan',199.00,'Entregar en la puerta principal', '01-05-2023', '03-05-2023'),
       (2,'Maria',298.00,'Dejar el paquete con el vecino', '03-05-2023', '04-05-2023'),
       (3,'Pedro',398.00,'Enviar al apartado postal', '03-05-2023', '06-05-2023'),
       (4,'Laura',149.00,'Entregar en la recepción', '04-05-2023', '08-05-2023'),
       (5,'Carlos',897.00,'Dejar en el buzón de correo', '07-05-2023', '10-05-2023'),
	   (6,'Juan',199.00,'Entregar en la puerta principal', '08-05-2023', '11-05-2023'),
       (7,'Maria',298.00,'Dejar el paquete con el vecino', '11-05-2023', '15-05-2023'),
       (8,'Pedro',199.00,'Enviar al apartado postal', '15-05-2023', '20-05-2023');

-- Insertar registros en la tabla Detalle
INSERT INTO Detalle (IdPedido, IdCliente, IdProducto, Comprado)
VALUES (1, 'Juan', '014M', 1),
       (2, 'Maria', '005S', 1),
	   (2, 'Maria', '003S', 1),
       (3, 'Pedro', '015M', 1),
	   (3, 'Pedro', '014M', 1),
       (4, 'Laura', '001S', 1),
       (5, 'Carlos', '013X', 1),
	   (5, 'Carlos', '011X', 1),
	   (5, 'Carlos', '015X', 1),
       (6, 'Juan', '011M', 1),
       (7, 'Maria', '008S', 1),
	   (7, 'Maria', '007S', 1),
       (8, 'Pedro', '017M', 1);

