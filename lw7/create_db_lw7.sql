USE master;
GO

IF DB_ID ( N'rental' ) IS NOT NULL
DROP DATABASE rental;
GO
CREATE DATABASE rental;  
GO

USE rental
GO

DROP TABLE IF EXISTS dbo.dvd;
CREATE TABLE dbo.dvd
   (dvd_id BIGINT PRIMARY KEY IDENTITY NOT NULL,
    title NVARCHAR(100) NULL,
	production_year DATE NULL)
GO

DROP TABLE IF EXISTS dbo.customer;
CREATE TABLE dbo.customer
   (customer_id BIGINT PRIMARY KEY IDENTITY NOT NULL,
    first_name NVARCHAR(100) NOT NULL,
    last_name NVARCHAR(100) NOT NULL,
	passport_code NVARCHAR(11) NULL,
	registration_date DATE NULL)
GO

DROP TABLE IF EXISTS dbo.offer;
CREATE TABLE dbo.offer
   (offer_id BIGINT PRIMARY KEY IDENTITY NOT NULL,
    dvd_id BIGINT NOT NULL,
    customer_id BIGINT NOT NULL,
	offer_date DATE NULL,
	return_date DATE NULL)
GO