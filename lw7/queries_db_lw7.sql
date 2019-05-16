USE rental
GO

SELECT dvd.title
FROM dvd
	WHERE YEAR(dvd.production_year) = 2010
	ORDER BY dvd.title;

SELECT dvd.title
FROM offer
	LEFT JOIN dvd ON offer.dvd_id = dvd.dvd_id
WHERE offer.return_date IS NULL;

SELECT customer.customer_id, customer.first_name, customer.last_name, dvd.title
FROM offer
	LEFT JOIN customer ON offer.customer_id = customer.customer_id
	LEFT JOIN dvd ON offer.dvd_id = dvd.dvd_id
WHERE YEAR(offer.offer_date) = 2019;