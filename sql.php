
Table: users and column: phone

UPDATE `users` SET `phone`= REPLACE(`phone`, '009665', '+9665') WHERE `phone` LIKE '009665%';
And

UPDATE `users` SET `phone`= REPLACE(`phone`, '05', '+9665') WHERE `phone` LIKE '05%';
