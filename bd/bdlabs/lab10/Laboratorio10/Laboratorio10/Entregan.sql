SET DATEFORMAT dmy
BULK INSERT a1702388.a1702388.[Entregan]
   FROM 'e:\wwwroot\a1702388\entregan.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )