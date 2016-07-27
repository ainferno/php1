<?php
class TextFile
{
	protected $file_name;
	
	public function __construct($file) {
		$file_name = $file;
	}
	
	public save($text) {
		$res = fopen($file_name,'w');
		fwrite($res,$text);
		fclose($res);
	}
}
class GuestBook 
	extends TextFil {
	protected $GuestBookData = [];
	protected $text_file;
	public function __construct($file) {
		$text_file = new TextFile($file);
		
		$res = fopen($file,'r');
		while( !feof($res)) {
			$GuestBookData[] = fgets($res);
		}
		fclose($res);
	}
	public function getData() {
		return $GuestBookData;
	}
	public function append($text) {
		$GuestBookData[] = $text;
	}
	public save() {
		$text_file->save($GuestBookData);
	}
}
?>