BULK INSERT a1702388.a1702388.[Materiales]
   FROM 'e:\wwwroot\a1702388\materiales.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )