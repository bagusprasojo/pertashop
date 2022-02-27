<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-25 04:38:43 --> Severity: Notice --> Undefined index: periode1 C:\xampp\htdocs\saribuah\application\controllers\Laporan.php 44
ERROR - 2021-04-25 04:38:43 --> Severity: Notice --> Undefined index: periode2 C:\xampp\htdocs\saribuah\application\controllers\Laporan.php 45
ERROR - 2021-04-25 04:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NULL`
AND `pembayaran`.`tgl_transaksi` < `IS` `NULL`
ORDER BY `pembayaran`.`...' at line 4 - Invalid query: SELECT `pembayaran`.*, `pembeli`.`nama` as `nama_pembeli`
FROM `pembayaran`
JOIN `pembeli` ON `pembeli`.`pembeli_id` = `pembayaran`.`pembeli_id`
WHERE `pembayaran`.`tgl_transaksi` > `IS` `NULL`
AND `pembayaran`.`tgl_transaksi` < `IS` `NULL`
ORDER BY `pembayaran`.`no_pembayaran` ASC
ERROR - 2021-04-25 04:52:58 --> Query error: Table 'pengwili_saribuah.produk' doesn't exist - Invalid query: SELECT *
FROM `Produk`
ERROR - 2021-04-25 04:58:54 --> Severity: Notice --> Undefined property: Produk::$produk_id C:\xampp\htdocs\saribuah\system\core\Model.php 73
ERROR - 2021-04-25 04:58:54 --> Severity: Notice --> Undefined property: Produk::$alamat C:\xampp\htdocs\saribuah\system\core\Model.php 73
ERROR - 2021-04-25 05:01:21 --> Severity: Notice --> Undefined property: Produk::$produk_id C:\xampp\htdocs\saribuah\system\core\Model.php 73
ERROR - 2021-04-25 05:02:44 --> Severity: Notice --> Undefined property: Produk::$produk_id C:\xampp\htdocs\saribuah\system\core\Model.php 73
ERROR - 2021-04-25 05:03:50 --> Severity: Notice --> Undefined property: Produk::$produk_id C:\xampp\htdocs\saribuah\system\core\Model.php 73
ERROR - 2021-04-25 05:03:57 --> Severity: Notice --> Undefined property: Produk::$produk_id C:\xampp\htdocs\saribuah\system\core\Model.php 73
ERROR - 2021-04-25 05:04:39 --> Severity: Notice --> Undefined property: Produk::$produk_id C:\xampp\htdocs\saribuah\system\core\Model.php 73
ERROR - 2021-04-25 05:04:40 --> Severity: Notice --> Undefined property: Produk::$produk_id C:\xampp\htdocs\saribuah\system\core\Model.php 73
ERROR - 2021-04-25 05:04:43 --> Severity: Notice --> Undefined property: Produk::$produk_id C:\xampp\htdocs\saribuah\system\core\Model.php 73
ERROR - 2021-04-25 05:05:36 --> Severity: Notice --> Undefined index: Produk_id C:\xampp\htdocs\saribuah\application\models\Produk_model.php 56
ERROR - 2021-04-25 05:05:36 --> Severity: Notice --> Undefined property: stdClass::$produk_id C:\xampp\htdocs\saribuah\application\views\v_produk_list.php 58
ERROR - 2021-04-25 05:05:36 --> Severity: Notice --> Undefined property: stdClass::$produk_id C:\xampp\htdocs\saribuah\application\views\v_produk_list.php 60
ERROR - 2021-04-25 05:09:23 --> Severity: Notice --> Undefined index: Produk_id C:\xampp\htdocs\saribuah\application\models\Produk_model.php 56
ERROR - 2021-04-25 05:09:23 --> Query error: Duplicate entry '00001' for key 'produk_unique_kode' - Invalid query: INSERT INTO `Produk` (`produk_id`, `kode`, `nama`) VALUES ('6084dd63aa3d2', '00001', 'Apel Malang Lagi')
