BULK INSERT a1702388.a1702388.[Proveedores]
   FROM 'e:\wwwroot\a1702388\proveedores.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )