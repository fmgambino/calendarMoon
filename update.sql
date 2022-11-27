ALTER TABLE `datos`
CHANGE `imagen` `imagen` varchar(250) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `titulo7`,
CHANGE `imagen1` `imagen1` varchar(250) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `imagen`,
CHANGE `imagen2` `imagen2` varchar(250) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `imagen1`,
CHANGE `imagen3` `imagen3` varchar(250) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `imagen2`,
CHANGE `imagen4` `imagen4` varchar(250) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `imagen3`,
CHANGE `imagen5` `imagen5` varchar(250) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `imagen4`,
CHANGE `imagen6` `imagen6` varchar(250) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `imagen5`,
CHANGE `imagen7` `imagen7` varchar(250) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `imagen6`;

ALTER TABLE `glosario`
CHANGE `imagen` `imagen` varchar(1000) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `text2`;


ALTER TABLE `topday`
CHANGE `imagen` `imagen` varchar(1000) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `text2`;

ALTER TABLE `notificaciones`
CHANGE `imagen` `imagen` varchar(100) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `text2`;

ALTER TABLE `users`
CHANGE `imagen` `imagen` varchar(250) COLLATE 'utf8mb4_unicode_ci' NOT NULL DEFAULT '\'\'' AFTER `mail`;