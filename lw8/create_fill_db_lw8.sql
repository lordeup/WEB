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
( 
	download_id BIGINT PRIMARY KEY IDENTITY NOT NULL, 
    track_id BIGINT NOT NULL, 
    user_id BIGINT NOT NULL, 
    download_time TIMESTAMP NOT NULL)
GO


INSERT PC ([cpu], [memory], [hdd]) VALUES (1600, 2000, 500);
INSERT PC ([cpu], [memory], [hdd]) VALUES (2400, 3000, 800);
INSERT PC ([cpu], [memory], [hdd]) VALUES (3200, 3000, 1200);
INSERT PC ([cpu], [memory], [hdd]) VALUES (2400, 2000, 500);