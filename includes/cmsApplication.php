<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase {
	//Semua kode yang ada disini dapat diakses melalui fungsi utama dalam CMS
	//disini kita dapat membuat fungsi yg dapat
	//dipanggil oleh USER secara langsung

	function run ()
	{
		//disini akan dibuat kode
		//untuk mengatur seluruh proses dalam cmsAppliaction
		//fungsi ini akan dipanggil dari TemplateFunction
	}
	function addcontent ()
	{
		echo 'Disini akan dibuat fungsi menambah konten';
	}

	function viewcontent ()
	{
		echo 'Disini akan dibuat fungsi untuk menampilkan konten';
	}

	function anyothertask ()
	{
		echo 'Disini akan ditulis fungsi yang lainnya';
	}
}