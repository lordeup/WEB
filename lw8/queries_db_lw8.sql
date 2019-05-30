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

SELECT track_downloads_subquery.download_count, COUNT(track_downloads_subquery.download_count) AS user_count 
FROM
(
    SELECT user_id, COUNT(download_id) AS download_count 
    FROM track_downloads
	WHERE download_time = '20101119'
    GROUP BY user_id
) AS track_downloads_subquery
GROUP BY track_downloads_subquery.download_count;