CREATE VIEW proveedoresLA5000a5010 AS
SELECT RFC, Cantidad, Fecha, Numero 
FROM Entregan AS E
WHERE E.RFC
IN ( SELECT RFC
FROM Proveedores AS P
WHERE RazonSocial LIKE 'La%' AND E.Numero BETWEEN 5000 AND 5010 )





/*
SELECT Clave, Descripcion, Costo, PorcentajeImpuesto, 
Costo + PorcentajeImpuesto AS Importe
FROM Materiales
*/


/*SELECT RFC, Cantidad, Fecha, Numero 
FROM Entregan AS E
WHERE E.RFC
 IN ( SELECT RFC
FROM Proveedores AS P
WHERE RazonSocial LIKE 'La%' AND E.Numero BETWEEN 5000 AND 5010)
*/

/*
SELECT RFC,Cantidad, Fecha, Numero 
FROM [Entregan] 
WHERE [Numero] Between 5000 AND 5010 AND 
EXISTS ( SELECT [RFC] 
FROM [Proveedores] 
WHERE RazonSocial LIKE 'La%' AND [Entregan].[RFC] = [Proveedores].[RFC] )
*/