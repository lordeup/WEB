USE master;
GO

IF DB_ID ( N'computer' ) IS NOT NULL
DROP DATABASE computer;
GO
CREATE DATABASE computer;  
GO

USE computer
GO

DROP TABLE IF EXISTS dbo.PC;
CREATE TABLE dbo.PC
   (id BIGINT PRIMARY KEY IDENTITY NOT NULL,
    cpu INT NULL,
    memory INT NULL,
	hdd INT NULL)
GO

DROP TABLE IF EXISTS dbo.track_downloads;
CREATE TABLE dbo.track_downloads 
   (download_id BIGINT PRIMARY KEY IDENTITY NOT NULL, 
    track_id INT NOT NULL, 
    user_id BIGINT NOT NULL, 
    download_time DATETIME NOT NULL DEFAULT 0)
GO


INSERT PC ([cpu], [memory], [hdd]) VALUES (1600, 2000, 500);
INSERT PC ([cpu], [memory], [hdd]) VALUES (2400, 3000, 800);
INSERT PC ([cpu], [memory], [hdd]) VALUES (3200, 3000, 1200);
INSERT PC ([cpu], [memory], [hdd]) VALUES (2400, 2000, 500);


TRUNCATE TABLE track_downloads;

INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (99, 5, '20101119');
INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (1, 8, '20101119');
INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (20, 5, '20101119');
INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (2, 5, '20101119');
INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (7, 8, '20101119');
INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (14, 5, '20101119');
INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (15, 2, '20101119');
INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (20, 4, '20101119');
INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (1, 9, '20101119');
INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (19, 3, '20100830');
INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (11, 6, '20101121');
INSERT track_downloads ([track_id], [user_id], [download_time]) VALUES (31, 13, '20100615');