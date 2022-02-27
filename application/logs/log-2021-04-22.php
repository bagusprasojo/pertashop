<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-22 00:29:30 --> 404 Page Not Found: Laporan/rekaptransaksi
ERROR - 2021-04-22 00:40:14 --> 404 Page Not Found: Laporan/rekaptransaksi
ERROR - 2021-04-22 00:40:20 --> 404 Page Not Found: Laporan/rekaptransaksi
ERROR - 2021-04-22 00:43:48 --> Severity: Notice --> Undefined index: periode1 C:\xampp\htdocs\saribuah\application\controllers\Laporan.php 44
ERROR - 2021-04-22 00:43:48 --> Severity: Notice --> Undefined index: periode2 C:\xampp\htdocs\saribuah\application\controllers\Laporan.php 45
ERROR - 2021-04-22 00:43:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `pembayaran`.`tgl_transaksi` < `IS` `NULL`
ORDER BY `pembayaran`.`...' at line 4 - Invalid query: SELECT `pembayaran`.*, `pembeli`.`nama` as `nama_pembeli`
FROM `pembayaran`
JOIN `pembeli` ON `pembeli`.`pembeli_id` = `pembayaran`.`pembeli_id`
WHERE `pembayaran`.`tgl_transaksi` > `IS` `NULL`
AND `pembayaran`.`tgl_transaksi` < `IS` `NULL`
ORDER BY `pembayaran`.`no_pembayaran` ASC
