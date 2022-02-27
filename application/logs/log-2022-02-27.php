<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-02-27 03:06:42 --> Query error: Unknown column 'tgl_transaksi' in 'where clause' - Invalid query: SELECT *
FROM `transaksi`
JOIN `produk` ON `produk`.`produk_id` = `transaksi`.`produk_id`
WHERE DATE(tgl_transaksi) >= '2022-02-01'
AND DATE(tgl_transaksi) <= '2022-02-27'
ERROR - 2022-02-27 03:18:51 --> Query error: Unknown column 'tgl_transaksi' in 'where clause' - Invalid query: SELECT *
FROM `transaksi`
JOIN `produk` ON `produk`.`produk_id` = `transaksi`.`produk_id`
WHERE DATE(tgl_transaksi) >= '2022-02-01'
AND DATE(tgl_transaksi) <= '2022-02-27'
ERROR - 2022-02-27 03:22:38 --> Query error: Unknown column 'tgl_transaksi' in 'where clause' - Invalid query: SELECT `transaksi`.*, `produk`.`nama` as `nama_produk`, `produk`.`kode` as `kode_produk`
FROM `transaksi`
JOIN `produk` ON `produk`.`produk_id` = `transaksi`.`produk_id`
WHERE DATE(tgl_transaksi) >= '2022-02-01'
AND DATE(tgl_transaksi) <= '2022-02-27'
ORDER BY `produk`.`nama` ASC
 LIMIT 25
ERROR - 2022-02-27 10:02:47 --> 404 Page Not Found: Transaksi/tutup
ERROR - 2022-02-27 10:12:30 --> Severity: Notice --> Undefined property: Transaksi::$produk_id C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:12:30 --> Severity: Notice --> Undefined property: Transaksi::$tgl_transaksi C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:12:30 --> Severity: Notice --> Undefined variable: nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_buka_input.php 38
ERROR - 2022-02-27 10:12:30 --> Severity: Notice --> Undefined variable: kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_buka_input.php 47
ERROR - 2022-02-27 10:12:30 --> Severity: Notice --> Undefined property: Transaksi::$stockawal C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:12:30 --> Severity: Notice --> Undefined property: Transaksi::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:12:30 --> Severity: Notice --> Undefined property: Transaksi::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:12:30 --> Severity: Notice --> Undefined property: Transaksi::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:12:30 --> Severity: Notice --> Undefined property: Transaksi::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:12:30 --> Severity: Notice --> Undefined property: Transaksi::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:14:14 --> Severity: Notice --> Undefined property: Transaksi::$produk_id C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:14:14 --> Severity: Notice --> Undefined property: Transaksi::$tgl_transaksi C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:14:14 --> Severity: Notice --> Undefined variable: nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 38
ERROR - 2022-02-27 10:14:14 --> Severity: Notice --> Undefined variable: kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 47
ERROR - 2022-02-27 10:14:14 --> Severity: Notice --> Undefined property: Transaksi::$stockawal C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:14:14 --> Severity: Notice --> Undefined property: Transaksi::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:14:14 --> Severity: Notice --> Undefined property: Transaksi::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:14:14 --> Severity: Notice --> Undefined property: Transaksi::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:14:14 --> Severity: Notice --> Undefined property: Transaksi::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:14:14 --> Severity: Notice --> Undefined property: Transaksi::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:21:11 --> 404 Page Not Found: Transaksi/add
ERROR - 2022-02-27 10:23:44 --> Severity: Notice --> Undefined property: Buka::$produk_id C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:23:44 --> Severity: Notice --> Undefined property: Buka::$tgl_transaksi C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:23:44 --> Severity: Notice --> Undefined variable: nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 38
ERROR - 2022-02-27 10:23:44 --> Severity: Notice --> Undefined variable: kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 47
ERROR - 2022-02-27 10:23:44 --> Severity: Notice --> Undefined property: Buka::$stockawal C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:23:44 --> Severity: Notice --> Undefined property: Buka::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:23:44 --> Severity: Notice --> Undefined property: Buka::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:23:44 --> Severity: Notice --> Undefined property: Buka::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:23:44 --> Severity: Notice --> Undefined property: Buka::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:23:44 --> Severity: Notice --> Undefined property: Buka::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:26:15 --> Severity: Notice --> Undefined property: Buka::$tgl_transaksi C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:26:15 --> Severity: Notice --> Undefined variable: nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 38
ERROR - 2022-02-27 10:26:15 --> Severity: Notice --> Undefined variable: kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 47
ERROR - 2022-02-27 10:26:15 --> Severity: Notice --> Undefined property: Buka::$stockawal C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:26:15 --> Severity: Notice --> Undefined property: Buka::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:26:15 --> Severity: Notice --> Undefined property: Buka::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:26:15 --> Severity: Notice --> Undefined property: Buka::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:26:15 --> Severity: Notice --> Undefined property: Buka::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:26:15 --> Severity: Notice --> Undefined property: Buka::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:23 --> Severity: Notice --> Undefined variable: nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 38
ERROR - 2022-02-27 10:27:23 --> Severity: Notice --> Undefined variable: kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 47
ERROR - 2022-02-27 10:27:23 --> Severity: Notice --> Undefined property: Buka::$stockawal C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:23 --> Severity: Notice --> Undefined property: Buka::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:23 --> Severity: Notice --> Undefined property: Buka::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:23 --> Severity: Notice --> Undefined property: Buka::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:23 --> Severity: Notice --> Undefined property: Buka::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:23 --> Severity: Notice --> Undefined property: Buka::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:24 --> Severity: Notice --> Undefined variable: nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 38
ERROR - 2022-02-27 10:27:24 --> Severity: Notice --> Undefined variable: kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 47
ERROR - 2022-02-27 10:27:24 --> Severity: Notice --> Undefined property: Buka::$stockawal C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:24 --> Severity: Notice --> Undefined property: Buka::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:24 --> Severity: Notice --> Undefined property: Buka::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:24 --> Severity: Notice --> Undefined property: Buka::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:24 --> Severity: Notice --> Undefined property: Buka::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:27:24 --> Severity: Notice --> Undefined property: Buka::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:29:31 --> Severity: Notice --> Undefined property: Buka::$stockawal C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:29:31 --> Severity: Notice --> Undefined property: Buka::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:29:31 --> Severity: Notice --> Undefined property: Buka::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:29:31 --> Severity: Notice --> Undefined property: Buka::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:29:31 --> Severity: Notice --> Undefined property: Buka::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:29:31 --> Severity: Notice --> Undefined property: Buka::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:32:08 --> Severity: Notice --> Undefined property: Buka::$stockawal C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:32:08 --> Severity: Notice --> Undefined property: Buka::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:32:08 --> Severity: Notice --> Undefined property: Buka::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:32:08 --> Severity: Notice --> Undefined property: Buka::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:32:08 --> Severity: Notice --> Undefined property: Buka::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:32:08 --> Severity: Notice --> Undefined property: Buka::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:15 --> Severity: Notice --> Undefined property: Buka::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:15 --> Severity: Notice --> Undefined property: Buka::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:15 --> Severity: Notice --> Undefined property: Buka::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:15 --> Severity: Notice --> Undefined property: Buka::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:15 --> Severity: Notice --> Undefined property: Buka::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:18 --> Severity: Notice --> Undefined property: Buka::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:18 --> Severity: Notice --> Undefined property: Buka::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:18 --> Severity: Notice --> Undefined property: Buka::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:18 --> Severity: Notice --> Undefined property: Buka::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:18 --> Severity: Notice --> Undefined property: Buka::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:19 --> Severity: Notice --> Undefined property: Buka::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:19 --> Severity: Notice --> Undefined property: Buka::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:19 --> Severity: Notice --> Undefined property: Buka::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:19 --> Severity: Notice --> Undefined property: Buka::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:33:19 --> Severity: Notice --> Undefined property: Buka::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:34:01 --> Severity: Notice --> Undefined property: Buka::$datang C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:34:01 --> Severity: Notice --> Undefined property: Buka::$baru C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:34:01 --> Severity: Notice --> Undefined property: Buka::$lama C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:34:01 --> Severity: Notice --> Undefined property: Buka::$stockakhir C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:34:01 --> Severity: Notice --> Undefined property: Buka::$hpj C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:36:22 --> 404 Page Not Found: Transaksi/add
ERROR - 2022-02-27 10:36:28 --> 404 Page Not Found: Transaksi/add
ERROR - 2022-02-27 10:36:43 --> Severity: Notice --> Undefined index: tutup C:\xampp\htdocs\pertashop\application\models\Transaksi_model.php 139
ERROR - 2022-02-27 10:36:43 --> Severity: Notice --> Undefined index: depan_tutup C:\xampp\htdocs\pertashop\application\models\Transaksi_model.php 147
ERROR - 2022-02-27 10:36:43 --> Severity: Notice --> Undefined index: digital_tutup C:\xampp\htdocs\pertashop\application\models\Transaksi_model.php 155
ERROR - 2022-02-27 10:36:43 --> Severity: Notice --> Undefined index: deep_stick_tutup C:\xampp\htdocs\pertashop\application\models\Transaksi_model.php 163
ERROR - 2022-02-27 10:36:43 --> Severity: Notice --> Undefined index: is_pengisian C:\xampp\htdocs\pertashop\application\models\Transaksi_model.php 167
ERROR - 2022-02-27 10:36:43 --> Query error: Unknown column 'belakang_tutup' in 'field list' - Invalid query: INSERT INTO `transaksi` (`transaksi_id`, `tanggal`, `buka`, `tutup`, `depan_buka`, `belakang_tutup`, `digital_buka`, `digital_tutup`, `deep_stick_buka`, `deep_stick_tutup`, `is_pengisian`, `create_at`, `last_update`, `user_id`, `depan_tutup`) VALUES ('621b462ba760f', '2022-02-27', NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, NULL, '', 0)
ERROR - 2022-02-27 10:36:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\pertashop\system\core\Exceptions.php:271) C:\xampp\htdocs\pertashop\system\core\Common.php 570
ERROR - 2022-02-27 10:43:32 --> Severity: Notice --> Undefined property: Buka::$depan_tutup C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:43:33 --> Severity: Notice --> Undefined property: Buka::$depan_tutup C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:43:34 --> Severity: Notice --> Undefined property: Buka::$depan_tutup C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:43:35 --> Severity: Notice --> Undefined property: Buka::$depan_tutup C:\xampp\htdocs\pertashop\system\core\Model.php 73
ERROR - 2022-02-27 10:45:52 --> Severity: Notice --> Undefined index: is_pengisian C:\xampp\htdocs\pertashop\application\models\Transaksi_model.php 167
ERROR - 2022-02-27 10:45:52 --> Query error: Unknown column 'belakang_tutup' in 'field list' - Invalid query: INSERT INTO `transaksi` (`transaksi_id`, `tanggal`, `buka`, `tutup`, `depan_buka`, `belakang_tutup`, `digital_buka`, `digital_tutup`, `deep_stick_buka`, `deep_stick_tutup`, `is_pengisian`, `create_at`, `last_update`, `user_id`, `depan_tutup`) VALUES ('621b48502a1f4', '2022-02-27', '04:46', NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, NULL, '', 0)
ERROR - 2022-02-27 10:46:31 --> Query error: Unknown column 'belakang_tutup' in 'field list' - Invalid query: INSERT INTO `transaksi` (`transaksi_id`, `tanggal`, `buka`, `tutup`, `depan_buka`, `belakang_tutup`, `digital_buka`, `digital_tutup`, `deep_stick_buka`, `deep_stick_tutup`, `is_pengisian`, `create_at`, `last_update`, `user_id`, `depan_tutup`) VALUES ('621b487737b99', '2022-02-27', NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, NULL, '', 0)
ERROR - 2022-02-27 10:48:02 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`pertashop`.`transaksi`, CONSTRAINT `fk_transaksi_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION) - Invalid query: INSERT INTO `transaksi` (`transaksi_id`, `tanggal`, `buka`, `tutup`, `depan_buka`, `depan_tutup`, `digital_buka`, `digital_tutup`, `deep_stick_buka`, `deep_stick_tutup`, `is_pengisian`, `create_at`, `last_update`, `user_id`) VALUES ('621b48d2a3a1d', '2022-02-27', '05:48', NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '')
ERROR - 2022-02-27 10:54:03 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 23
ERROR - 2022-02-27 10:54:04 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 23
ERROR - 2022-02-27 10:54:05 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 23
ERROR - 2022-02-27 10:54:05 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 23
ERROR - 2022-02-27 10:54:06 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 23
ERROR - 2022-02-27 10:54:06 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 23
ERROR - 2022-02-27 10:54:07 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 23
ERROR - 2022-02-27 10:54:07 --> Severity: error --> Exception: Object of class stdClass could not be converted to string C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 23
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 60
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 63
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$stockawal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 66
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$datang C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 69
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$baru C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 72
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$lama C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 76
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$total C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 80
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$laku C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 84
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$hpp C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 88
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$hpj C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 92
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$stockakhir C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 96
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$totalmodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 100
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$modal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 104
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$payon C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 108
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$laba C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 112
ERROR - 2022-02-27 10:54:55 --> Severity: Notice --> Undefined property: stdClass::$sisamodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 116
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 60
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 63
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$stockawal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 66
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$datang C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 69
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$baru C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 72
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$lama C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 76
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$total C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 80
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$laku C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 84
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$hpp C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 88
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$hpj C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 92
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$stockakhir C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 96
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$totalmodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 100
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$modal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 104
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$payon C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 108
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$laba C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 112
ERROR - 2022-02-27 10:55:04 --> Severity: Notice --> Undefined property: stdClass::$sisamodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 116
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 60
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 63
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$stockawal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 66
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$datang C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 69
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$baru C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 72
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$lama C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 76
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$total C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 80
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$laku C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 84
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$hpp C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 88
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$hpj C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 92
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$stockakhir C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 96
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$totalmodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 100
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$modal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 104
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$payon C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 108
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$laba C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 112
ERROR - 2022-02-27 10:55:06 --> Severity: Notice --> Undefined property: stdClass::$sisamodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 116
ERROR - 2022-02-27 10:56:31 --> Severity: Notice --> Undefined property: stdClass::$deep_stick_digital C:\xampp\htdocs\pertashop\application\views\v_transaksi_list_buka.php 72
ERROR - 2022-02-27 10:59:18 --> Query error: Unknown column 'transaksi.produk_id' in 'on clause' - Invalid query: SELECT `transaksi`.*, `produk`.`kode` as `kode_produk`, `produk`.`nama` as `nama_produk`
FROM `transaksi`
JOIN `produk` ON `produk`.`produk_id` = `transaksi`.`produk_id`
WHERE `transaksi_id` = '621b4b749f02a'
ERROR - 2022-02-27 11:01:08 --> Severity: Notice --> Undefined property: stdClass::$nama_produk C:\xampp\htdocs\pertashop\application\controllers\Buka.php 142
ERROR - 2022-02-27 11:01:08 --> Severity: Notice --> Undefined property: stdClass::$kode_produk C:\xampp\htdocs\pertashop\application\controllers\Buka.php 143
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 71
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 74
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$stockawal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 77
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$datang C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 80
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$baru C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 83
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$lama C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 87
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$total C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 91
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$laku C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 95
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$hpp C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 99
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$hpj C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 103
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$stockakhir C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 107
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$totalmodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 111
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$modal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 115
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$payon C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 119
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$laba C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 123
ERROR - 2022-02-27 11:01:50 --> Severity: Notice --> Undefined property: stdClass::$sisamodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 127
ERROR - 2022-02-27 11:22:34 --> Severity: Notice --> Undefined variable: row C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 43
ERROR - 2022-02-27 11:22:34 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 43
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 71
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 74
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$stockawal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 77
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$datang C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 80
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$baru C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 83
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$lama C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 87
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$total C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 91
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$laku C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 95
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$hpp C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 99
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$hpj C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 103
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$stockakhir C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 107
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$totalmodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 111
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$modal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 115
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$payon C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 119
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$laba C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 123
ERROR - 2022-02-27 11:23:45 --> Severity: Notice --> Undefined property: stdClass::$sisamodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 127
ERROR - 2022-02-27 11:35:07 --> Severity: error --> Exception: syntax error, unexpected '{', expecting '(' C:\xampp\htdocs\pertashop\application\controllers\Buka.php 85
ERROR - 2022-02-27 11:35:10 --> Severity: error --> Exception: syntax error, unexpected '{', expecting '(' C:\xampp\htdocs\pertashop\application\controllers\Buka.php 85
ERROR - 2022-02-27 11:35:11 --> Severity: error --> Exception: syntax error, unexpected '{', expecting '(' C:\xampp\htdocs\pertashop\application\controllers\Buka.php 85
ERROR - 2022-02-27 11:35:17 --> Severity: error --> Exception: syntax error, unexpected '{', expecting '(' C:\xampp\htdocs\pertashop\application\controllers\Buka.php 85
ERROR - 2022-02-27 11:35:18 --> Severity: error --> Exception: syntax error, unexpected '{', expecting '(' C:\xampp\htdocs\pertashop\application\controllers\Buka.php 85
ERROR - 2022-02-27 11:35:20 --> Severity: error --> Exception: syntax error, unexpected '{', expecting '(' C:\xampp\htdocs\pertashop\application\controllers\Buka.php 85
ERROR - 2022-02-27 11:35:26 --> Severity: error --> Exception: syntax error, unexpected '{', expecting '(' C:\xampp\htdocs\pertashop\application\controllers\Buka.php 85
ERROR - 2022-02-27 11:35:48 --> Severity: Notice --> Undefined variable: post C:\xampp\htdocs\pertashop\application\controllers\Buka.php 86
ERROR - 2022-02-27 11:35:48 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\pertashop\application\controllers\Buka.php 86
ERROR - 2022-02-27 11:44:01 --> Severity: Notice --> Undefined variable: depan_buka C:\xampp\htdocs\pertashop\application\views\v_transaksi_input_buka.php 53
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$kode_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 71
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$nama_produk C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 74
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$stockawal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 77
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$datang C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 80
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$baru C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 83
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$lama C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 87
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$total C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 91
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$laku C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 95
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$hpp C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 99
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$hpj C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 103
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$stockakhir C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 107
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$totalmodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 111
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$modal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 115
ERROR - 2022-02-27 11:47:10 --> Severity: Notice --> Undefined property: stdClass::$payon C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 119
ERROR - 2022-02-27 11:47:11 --> Severity: Notice --> Undefined property: stdClass::$laba C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 123
ERROR - 2022-02-27 11:47:11 --> Severity: Notice --> Undefined property: stdClass::$sisamodal C:\xampp\htdocs\pertashop\application\views\v_transaksi_list.php 127
