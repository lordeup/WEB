USE rental
GO

INSERT dvd ([title], [production_year]) VALUES ('Достучаться до небес', '2010-01-15');
INSERT dvd ([title], [production_year]) VALUES ('Эффект бабочки', '2017-01-12');
INSERT dvd ([title], [production_year]) VALUES ('Криминальное чтиво', '2015-02-21');
INSERT dvd ([title], [production_year]) VALUES ('Дэдпул', '2018-07-01');
INSERT dvd ([title], [production_year]) VALUES ('Грань будущего', '2015-06-22');
INSERT dvd ([title], [production_year]) VALUES ('Престиж', '2010-04-14');
INSERT dvd ([title], [production_year]) VALUES ('Форрест Гамп', '2018-05-28');
INSERT dvd ([title], [production_year]) VALUES ('Побег из Шоушенка', '2015-11-19');
INSERT dvd ([title], [production_year]) VALUES ('Начало', '2010-12-05');
INSERT dvd ([title], [production_year]) VALUES ('1+1', '2012-03-22');
INSERT dvd ([title], [production_year]) VALUES ('Зеленая миля', '2010-08-18');
INSERT dvd ([title], [production_year]) VALUES ('Бойцовский клуб', '2010-04-14');
INSERT dvd ([title], [production_year]) VALUES ('Назад в будущее', '2011-06-02');
INSERT dvd ([title], [production_year]) VALUES ('Большой куш', '2012-10-14');
INSERT dvd ([title], [production_year]) VALUES ('Темный рыцарь', '2014-12-25');

INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Ярослав', 'Достовалов', '1231-145687', '2018-01-10');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Федор', 'Токмаков', '1224-257536', '2017-02-11');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Борис', 'Парамонов', '1324-254768', '2015-03-25');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Станислав', 'Шаньгин', '1437-321475', '2016-05-30');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Радислав', 'Яшнов', '1325-759542', '2018-04-20');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Арсения', 'Хомколова', '1389-576321', '2016-09-01');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Вера', 'Зиновьева', '1285-821432', '2015-07-03');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Иннокентий', 'Чегодаев', '1423-654789', '2019-03-09');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Алиса', 'Трунина', '1971-103469', '2018-11-15');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Денис', 'Якурин', '1632-247936', '2013-01-14');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Август', 'Гришко', '1396-203547', '2017-04-12');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Млада', 'Махова', '1520-842365', '2014-04-13');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Августина', 'Торопова', '1560-479321', '2015-12-11');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Александр', 'Михайлов', '1682-245687', '2014-10-19');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Фома', 'Луньков', '1358-147965', '2018-08-17');
INSERT customer ([first_name], [last_name], [passport_code], [registration_date]) VALUES ('Катерина', 'Мальцева', '1368-365795', '2016-05-12');

INSERT offer ([dvd_id], [customer_id], [offer_date], [return_date]) VALUES (1, 1, '2018-01-10', '2018-01-20');
INSERT offer ([dvd_id], [customer_id], [offer_date], [return_date]) VALUES (5, 4, '2018-05-30', '2018-06-10');
INSERT offer ([dvd_id], [customer_id], [offer_date], [return_date]) VALUES (6, 7, '2019-05-01', NULL);
INSERT offer ([dvd_id], [customer_id], [offer_date], [return_date]) VALUES (11, 9, '2018-11-15', '2018-11-25');
INSERT offer ([dvd_id], [customer_id], [offer_date], [return_date]) VALUES (15, 6, '2016-09-01', '2016-09-15');
INSERT offer ([dvd_id], [customer_id], [offer_date], [return_date]) VALUES (9, 15, '2019-05-10', NULL);
INSERT offer ([dvd_id], [customer_id], [offer_date], [return_date]) VALUES (3, 12, '2017-05-15', '2017-05-26');
INSERT offer ([dvd_id], [customer_id], [offer_date], [return_date]) VALUES (12, 2, '2019-02-11', '2019-02-25');
INSERT offer ([dvd_id], [customer_id], [offer_date], [return_date]) VALUES (13, 9, '2019-04-29', NULL);