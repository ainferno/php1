<html>
<head>
	<style>
		.ramka
		{
			border: 2px solid red;
			width: 200px;
			
		}
		.ramka input
		{
			margin: 5px;
		}
		.ramka h2
		{
			text-align: center;
		}
	</style>
	<meta charset="utf-8">
	<title>Гостевая книга</title>
</head>
<?php
class TextFile
{
	protected $file_name;
	
	public function __construct($file) {
		$this->file_name = $file;
	}
	
	public function save($text) {
		$res = fopen($this->file_name,'w');
		fwrite($res,$text);
		fclose($res);
	}
}
class GuestBook 
	extends TextFile {
	protected $GuestBookData = [];
	protected $text_file;
	public function __construct($file) {
		$this->text_file = new TextFile($file);
		
		if(file_exists($this->text_file->file_name)){
			$res = fopen($file,'r');
			while( !feof($res)) {
				$this->GuestBookData[] = fgets($res);
			}
			fclose($res);
		}
	}
	public function getData() {
		return $this->GuestBookData;
	}
	public function append($text) {
		$this->GuestBookData[] = $text;
		//------------------------------------//
		//echo "POINT_START<br>";
		//foreach($this->GuestBookData as $a){
		//	echo $a . "<br>";
		//}
		//echo "POINT_STOP<br>";
		//------------------------------------//
	}
	public function saveBook() {
		$b = "\0";
		foreach($this->GuestBookData as $a){
			$b = $b . $a;
		}
		$this->text_file->save($b);
	}
}
?>
<body>
<h1> Гостевая книга </h1>
<div class="ramka">
	<form action="lesson5.php" method="post">
		<h2>Оставьте ваш комментарий</h2>
		<input type="text" name="user" value="user name">
		<input type="text" name="text" value="text">
		<input type="submit" value="SUBMIT">
	</form>
</div>
<?php 
$guest_book = new GuestBook(__DIR__ . '/guest_book.txt');
if(isset($_POST['text']) && $_POST['text'] != null){
	if(isset($_POST['user']) && $_POST['user'] != null)
		$text = "\r\n".$_POST['user']." - ".$_POST['text'];
	else
		$text = "\r\nUNKNOWN - ".$_POST['text'];
	$guest_book->append($text);
	$guest_book->saveBook();
}
foreach($guest_book->getData() as $a){
	echo '<p>' . $a . '<p>';
}
?>


</body>
</html>