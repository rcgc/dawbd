
/*
SELECT * FROM Mtelevisa AS Mt
INTERSECT
SELECT * FROM Mcoahuila AS Mc



CREATE VIEW Mcoahuila AS
SELECT M.Costo, M.Descripcion
FROM Materiales AS M, Entregan AS E, Proyectos as Py, Proveedores as Pv
WHERE M.Clave = E.Clave AND Py.Numero = E.Numero AND Pv.RFC=E.RFC AND Py.Denominacion LIKE 'Educando en Coahuila'

CREATE VIEW Mtelevisa AS
SELECT M.Costo, M.Descripcion
FROM Materiales AS M, Entregan AS E, Proyectos as Py, Proveedores as Pv
WHERE M.Clave = E.Clave AND Py.Numero = E.Numero AND Pv.RFC=E.RFC AND Py.Denominacion LIKE 'Televisa en acción'
*/


SELECT Prov.RFC, Prov.RazonSocial, Py.Denominacion
FROM Proveedores AS Prov, Entregan as E, Proyectos as Py
WHERE Prov.RFC
NOT IN 
(
SELECT E.RFC
FROM Proyectos AS Py
WHERE Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Educando en Coahuila'
) AND Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Televisa en acción'
GROUP BY Prov.RFC, Prov.RazonSocial, Py.Denominacion


/*
SELECT Prov.RFC, Prov.RazonSocial, Py.Denominacion
FROM Proveedores AS Prov, Entregan as E, Proyectos as Py
WHERE Prov.RFC
NOT IN 
(
SELECT E.RFC
FROM Proyectos AS Py
WHERE Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Educando en Coahuila'
) AND Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Televisa en acción'
GROUP BY Prov.RFC, Prov.RazonSocial, Py.Denominacion
*/

/*
SELECT DISTINCT M.Descripcion, SUM(E.Cantidad) AS total_e, SUM(E.Cantidad)*M.Costo AS absoluto
FROM Materiales AS M, Entregan AS E
WHERE M.Clave = E.Clave
GROUP BY M.Descripcion, M.Costo
*/

/*
SELECT Prov.RFC, Prov.RazonSocial, Py.Denominacion
FROM Proveedores AS Prov, Entregan as E, Proyectos as Py
WHERE Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Televisa en acción'
GROUP BY Prov.RFC, Prov.RazonSocial, Py.Denominacion
*/

/*
SELECT E.RFC, Prov.RazonSocial, Py.Denominacion
FROM Proveedores AS Prov, Entregan AS E, Proyectos AS Py
WHERE Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Educando en Coahuila'
*/

/*
SELECT Prov.RFC, Prov.RazonSocial, Py.Denominacion
FROM Proveedores AS Prov, Entregan as E, Proyectos as Py
WHERE Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Televisa en acción'
GROUP BY Prov.RFC, Prov.RazonSocial, Py.Denominacion

SELECT Prov.RFC, Prov.RazonSocial, Py.Denominacion
FROM Proveedores AS Prov, Entregan as E, Proyectos as Py
WHERE Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Educando en Coahuila'
GROUP BY Prov.RFC, Prov.RazonSocial, Py.Denominacion
*/


/*
SELECT * FROM televisa

EXCEPT

SELECT T.RFC, T.RazonSocial, T.Denominacion
FROM televisa AS T, coahuila C
WHERE T.RFC=C.RFC
*/

/*
CREATE VIEW televisa AS
SELECT Prov.RFC, Prov.RazonSocial, Py.Denominacion
FROM Proveedores AS Prov, Entregan as E, Proyectos as Py
WHERE Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Televisa en acción'
GROUP BY Prov.RFC, Prov.RazonSocial, Py.Denominacion
*/

/*
CREATE VIEW coahuila AS
SELECT Prov.RFC, Prov.RazonSocial, Py.Denominacion
FROM Proveedores AS Prov, Entregan as E, Proyectos as Py
WHERE Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Educando en Coahuila'
GROUP BY Prov.RFC, Prov.RazonSocial, Py.Denominacion
*/


/*
SELECT Prov.RFC, Prov.RazonSocial, Py.Denominacion
FROM Proveedores AS Prov, Entregan as E, Proyectos as Py
WHERE Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Televisa en acción'
AND EXISTS(
SELECT Prov.RFC, Prov.RazonSocial, Py.Denominacion
FROM Proveedores AS Prov, Entregan as E, Proyectos as Py
WHERE Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Educando en Coahuila'
)
GROUP BY Prov.RFC, Prov.RazonSocial, Py.Denominacion
*/

/*
SELECT Prov.RFC, Prov.RazonSocial, Py.Denominacion
FROM Proveedores AS Prov, Entregan as E, Proyectos as Py
WHERE Prov.RazonSocial 
NOT IN
(SELECT E.RFC
FROM ENTREGAN AS E
WHERE Py.Denominacion LIKE 'Educando en Coahuila'
)AND Prov.RFC=E.RFC AND Py.Numero=E.Numero AND Py.Denominacion LIKE 'Televisa en acción'
*/

/*
SELECT E.RFC, Cantidad, Fecha, Numero
FROM Entregan AS E	
WHERE E.RFC
NOT IN 
(SELECT RFC
FROM Proveedores as P
WHERE P.RazonSocial NOT LIKE 'La%'
) AND E.Numero BETWEEN 5000 AND 5010 
*/

/*
SELECT P.Denominacion, SUM(cost_materiales) AS absoluto 
FROM Proyectos as P, costos_proy_mat as C
WHERE P.Numero = C.Numero
GROUP BY P.Denominacion
*/

/*
SELECT * FROM costos_proy_mat
*/

/*
CREATE VIEW costos_proy_mat AS
SELECT P.Numero, P.Denominacion, E.Cantidad, M.Costo , M.Descripcion,
E.Cantidad * M.Costo AS cost_materiales
FROM Proyectos AS P, Entregan AS E, Materiales AS M
WHERE P.Numero=E.Numero AND E.Clave = M.Clave
GROUP BY P.Numero, P.Denominacion, M.Costo, E.Cantidad, M.Descripcion
*/


/*
SELECT RFC,Cantidad, Fecha, Numero 
FROM [Entregan] 
WHERE [Numero] Between 5000 AND 5010 AND 
EXISTS ( SELECT [RFC] 
FROM [Proveedores] 
WHERE RazonSocial LIKE 'La%' AND [Entregan].[RFC] = [Proveedores].[RFC] )
*/





/*SELECT * FROM Entregan*/

/*
SELECT M.Descripcion, COUNT(M.Clave) AS num_materiales, 
E.Cantidad * M.Costo AS cost_materiales
FROM Entregan AS E, Materiales AS M
WHERE  E.Clave = M.Clave
GROUP BY M.Costo, E.Cantidad, M.Descripcion
*/

/*
SELECT M.Descripcion, COUNT(E.Numero) AS num_materiales, 
E.Cantidad * M.Costo AS cost_materiales
FROM Proyectos AS P, Entregan AS E, Materiales AS M
WHERE P.Numero=E.Numero AND E.Clave = M.Clave
GROUP BY M.Costo, E.Cantidad, M.Descripcion
*/

/*
SELECT *
FROM ventas_materiales_2001
WHERE Entregados_en_el_2001 IN (SELECT MAX(Entregados_en_el_2001) FROM ventas_materiales_2001)



CREATE VIEW ventas_materiales_2001 AS
SELECT M.Clave, M.Costo, M.PorcentajeImpuesto, Descripcion,
COUNT(E.Clave) AS Entregados_en_el_2001
FROM Materiales as M, Entregan as E
WHERE M.Clave=E.Clave AND E.Fecha BETWEEN '2001/01/01' AND '2001/31/12'	
GROUP BY E.Clave, M.Clave, M.Descripcion, M.Costo, M.PorcentajeImpuesto
*/

/*
SELECT M.Clave, M.Costo, M.PorcentajeImpuesto, Descripcion,
COUNT(E.Clave) AS Entregados_en_el_2000
FROM Materiales as M, Entregan as E
WHERE M.Clave=E.Clave AND E.Fecha BETWEEN '2000/01/01' AND '2000/31/12'	
GROUP BY E.Clave, M.Clave, M.Descripcion, M.Costo, M.PorcentajeImpuesto

SET DATEFORMAT dmy
*/

/*
SELECT P.RFC, P.RazonSocial,
COUNT(E.RFC) AS Entregados
FROM Proveedores as P, Entregan as E
WHERE P.RFC=E.RFC AND E.Cantidad<300 AND E.Fecha BETWEEN '2000/01/01' AND '2000/31/12'	
GROUP BY P.RFC, P.RazonSocial

SET DATEFORMAT dmy
*/

/*
SELECT RFC,Cantidad, Fecha, Numero 
FROM [Entregan] 
WHERE [Numero] Between 5000 AND 5010 AND 
NOT EXISTS ( SELECT [RFC] 
FROM [Proveedores] 
WHERE RazonSocial NOT LIKE 'La%' AND [Entregan].[RFC] = [Proveedores].[RFC] )
*/

/*
SELECT RFC, Cantidad, Fecha, Numero 
FROM Entregan AS E
WHERE E.RFC
NOT IN ( SELECT RFC
FROM Proveedores AS P
WHERE RazonSocial NOT LIKE 'La%' AND E.Numero BETWEEN 5000 AND 5010)
*/


/*
CREATE VIEW proveedoresLA5000a5010 AS
SELECT RFC, Cantidad, Fecha, Numero 
FROM Entregan AS E
WHERE E.RFC
IN ( SELECT RFC
FROM Proveedores AS P
WHERE RazonSocial LIKE 'La%' AND E.Numero BETWEEN 5000 AND 5010 )
*/

/*
SELECT Clave, Descripcion, Costo, PorcentajeImpuesto, 
Costo + PorcentajeImpuesto AS Importe
FROM Materiales
*/


/*
SELECT RFC, Cantidad, Fecha, Numero 
FROM Entregan AS E
WHERE E.RFC
 IN ( SELECT RFC
FROM Proveedores AS P
WHERE RazonSocial LIKE 'La%' AND E.Numero BETWEEN 5000 AND 5010)
*/

/*
SELECT RFC, Cantidad, Fecha, Numero
FROM Entregan AS E
WHERE E.RFC=SOME (
SELECT RFC
FROM Proveedores 
WHERE RazonSocial LIKE 'La%' AND E.Numero BETWEEN 5000 AND 5010
)
*/
