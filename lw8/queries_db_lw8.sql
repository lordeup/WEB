USE computer
GO

SELECT id, cpu, memory
FROM PC
	WHERE memory = 3000;

SELECT MIN(hdd) AS min_hdd 
FROM PC;

SELECT TOP 1 COUNT(hdd) AS count_min_hdd, hdd
FROM PC
GROUP BY hdd;