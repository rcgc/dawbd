BULK INSERT a1702388.a1702388.[Proyectos]
   FROM 'e:\wwwroot\a1702388\proyectos.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )