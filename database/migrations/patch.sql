USE jumoyo;

-- Add date_time column to jumoyo.posts
ALTER TABLE `posts` ADD IF NOT EXISTS `date_time` DATETIME NOT NULL AFTER `text`;

-- Add phone_number column to jumoyo.posts
ALTER TABLE `businesses` ADD  IF NOT EXISTS `phone_number` VARCHAR(255) NOT NULL AFTER `client`;

-- Add token column to jumoyo.businesses
ALTER TABLE `businesses` ADD  IF NOT EXISTS `token` VARCHAR(255) NOT NULL;

ALTER TABLE `services` CHANGE `price_hourly` `price_hourly` FLOAT NOT NULL DEFAULT '0', CHANGE `price` `price` FLOAT NOT NULL DEFAULT '0';

ALTER TABLE `bookings` ADD `customerId` VARCHAR(255) NOT NULL AFTER `chargeId`;