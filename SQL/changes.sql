ALTER TABLE `poem` ADD `home` TEXT NOT NULL AFTER `poem`;
ALTER TABLE `news` ADD `home` TEXT NOT NULL AFTER `description`;
ALTER TABLE `speech` ADD `home` TEXT NOT NULL AFTER `description`;
ALTER TABLE `interview` ADD `home` TEXT NOT NULL AFTER `description`;
ALTER TABLE `awards` ADD `home` TEXT NOT NULL AFTER `description`;
ALTER TABLE `tunein` ADD `home` TEXT NOT NULL AFTER `description`;