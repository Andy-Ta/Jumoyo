USE jumoyo;

-- Add date_time column to jumoyo.posts
ALTER TABLE `posts` ADD IF NOT EXISTS `date_time` DATETIME NOT NULL AFTER `text`;

-- Add phone_number column to jumoyo.posts
ALTER TABLE `businesses` ADD  IF NOT EXISTS `phone_number` VARCHAR(255) NOT NULL AFTER `client`;

-- Add token column to jumoyo.businesses
ALTER TABLE `businesses` ADD  IF NOT EXISTS `token` VARCHAR(255) NOT NULL;

ALTER TABLE `services` CHANGE `price_hourly` `price_hourly` FLOAT NOT NULL DEFAULT '0', CHANGE `price` `price` FLOAT NOT NULL DEFAULT '0';

ALTER TABLE `bookings` ADD IF NOT EXISTS `chargeId` VARCHAR(255) NOT NULL;

ALTER TABLE `bookings` ADD IF NOT EXISTS `customerId` VARCHAR(255) NOT NULL AFTER `chargeId`;

ALTER TABLE `businesses` CHANGE `token` `token` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

ALTER TABLE `services` CHANGE `price` `price` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

ALTER TABLE `services` CHANGE `price_hourly` `price_hourly` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

ALTER TABLE `clients` ADD IF NOT EXISTS `mobile_token` VARCHAR(255) NULL;

ALTER TABLE `clients` CHANGE `image` `image` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'img/review-icon.png';