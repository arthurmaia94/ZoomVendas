CREATE TABLE `cadastros` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `expectativa` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cadastro` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `termos` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `protocolo` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cadastros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
