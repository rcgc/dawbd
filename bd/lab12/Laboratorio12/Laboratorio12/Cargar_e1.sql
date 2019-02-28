BULK INSERT a1702388.a1702388.[Materiales]
   FROM 'e:\wwwroot\a1702388\materiales.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT a1702388.a1702388.[Proyectos] 
  FROM 'e:\wwwroot\a1702388\proyectos.csv' 
  WITH 
  ( 
    CODEPAGE = 'ACP', 
    FIELDTERMINATOR = ',', 
    ROWTERMINATOR = '\n' 
  ) 

BULK INSERT a1702388.a1702388.[Proveedores] 
  FROM 'e:\wwwroot\a1702388\proveedores.csv' 
  WITH 
  ( 
    CODEPAGE = 'ACP', 
    FIELDTERMINATOR = ',', 
    ROWTERMINATOR = '\n' 
  ) 

SET DATEFORMAT dmy -- especificar formato de la fecha 

BULK INSERT a1702388.a1702388.[Entregan] 
  FROM 'e:\wwwroot\a1702388\entregan.csv' 
  WITH 
  ( 
    CODEPAGE = 'ACP', 
    FIELDTERMINATOR = ',', 
    ROWTERMINATOR = '\n' 
  ) 