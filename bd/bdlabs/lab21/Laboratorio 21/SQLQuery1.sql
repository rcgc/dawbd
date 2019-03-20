/*
EXECUTE queryMaterial 'Lad', 20
*/

/*
IF EXISTS (SELECT name FROM sysobjects
                    WHERE name = 'queryMaterial' AND type = 'P')
            DROP PROCEDURE queryMaterial
        GO

        CREATE PROCEDURE queryMaterial
            @udescripcion VARCHAR(50),
            @ucosto NUMERIC(8,2)

        AS
            SELECT * FROM Materiales WHERE descripcion
            LIKE '%'+@udescripcion+'%' AND costo > @ucosto
        GO
*/

/*
SELECT * FROM Proyectos
*/

/*
EXECUTE eliminaProyecto 6000
*/

/*
IF EXISTS (SELECT name FROM sysobjects
                    WHERE name = 'eliminaProyecto' AND type = 'P')
            DROP PROCEDURE eliminaProyecto
        GO

        CREATE PROCEDURE eliminaProyecto
            @unumero numeric(5)
        AS
            DELETE
			FROM Proyectos 
			WHERE Numero = @unumero
        GO
*/

/*
EXECUTE modificaProyecto 6000, 'Vamos bien y viene lo mejor para Veracruz'
*/

/*
IF EXISTS (SELECT name FROM sysobjects
                    WHERE name = 'modificaProyecto' AND type = 'P')
            DROP PROCEDURE modificaProyecto
        GO

        CREATE PROCEDURE modificaProyecto
            @unumero numeric(5),
            @udenominacion VARCHAR(50)
        AS
            UPDATE Proyectos 
			SET Numero = @unumero, Denominacion = @udenominacion
			WHERE Numero = @unumero
        GO
*/

/*
EXECUTE creaProyecto 6000, 'Vamos bien y viene lo mejor'
*/

/*
EXECUTE creaProyecto 5000
*/

/*
IF EXISTS (SELECT name FROM sysobjects
                    WHERE name = 'creaProyecto' AND type = 'P')
            DROP PROCEDURE creaProyecto
        GO

        CREATE PROCEDURE creaProyecto
            @unumero numeric(5),
            @udenominacion VARCHAR(50)
        AS
            INSERT INTO Proyectos VALUES(@unumero, @udenominacion)
        GO
*/

/*
EXECUTE eliminaMaterial 5000
*/

/*
IF EXISTS (SELECT name FROM sysobjects
                    WHERE name = 'eliminaMaterial' AND type = 'P')
            DROP PROCEDURE eliminaMaterial
        GO

        CREATE PROCEDURE eliminaMaterial
            @uclave NUMERIC(5,0)
        AS
            DELETE
			FROM Materiales
			WHERE Clave = @uclave;
        GO
*/

/*
EXECUTE modificaMaterial 5000,'Martillos Acme',250,15
*/

/*
EXECUTE modificaMaterial 5000,'Martillos Acme',250,14
*/

/*
IF EXISTS (SELECT name FROM sysobjects
                    WHERE name = 'modificaMaterial' AND type = 'P')
            DROP PROCEDURE modificaMaterial
        GO

        CREATE PROCEDURE modificaMaterial
            @uclave NUMERIC(5,0),
            @udescripcion VARCHAR(50),
            @ucosto NUMERIC(8,2),
            @uimpuesto NUMERIC(6,2)
        AS
            UPDATE Materiales
			SET Materiales.Clave = @uclave, Materiales.Descripcion = @udescripcion, Materiales.Costo = @ucosto, Materiales.PorcentajeImpuesto = @uimpuesto
			WHERE Clave = @uclave;
        GO
*/

/*
SELECT * FROM Materiales
*/

/*
EXECUTE creaMaterial 5000,'Martillos Acme',250,15 
*/

/*
IF EXISTS (SELECT name FROM sysobjects
                    WHERE name = 'creaMaterial' AND type = 'P')
            DROP PROCEDURE creaMaterial
        GO

        CREATE PROCEDURE creaMaterial
            @uclave NUMERIC(5,0),
            @udescripcion VARCHAR(50),
            @ucosto NUMERIC(8,2),
            @uimpuesto NUMERIC(6,2)
        AS
            INSERT INTO Materiales VALUES(@uclave, @udescripcion, @ucosto, @uimpuesto)
        GO
*/