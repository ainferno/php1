<?php
include 'lesson5.php';
class Article {
	protected $name, $title, $data;
	public function __construct($name, $title, $data){
		$this->name = $name;
		$this->data = $data;
		$this->title = $title;
	}
	public function getName(){
		return $this->name;
	}
	public function getData(){
		return $this->data;
	}
	public function getTitle(){
		return $this->title;
	}
}

class News {
	protected $news = [], $last;
	public function __construct($file_name){
		$this->last = 0;
		if(file_exists($file_name)){
			$res = file($file_name);
			foreach($res as $a){
				$b = explode('*', $a);
				$b[2] = explode(PHP_EOL,$b[2])[0];
				$this->news[] = new Article($b[0], $b[1], $b[2]);
				$this->last++;
			}
		}
	}
	public function getNews(){
		return $this->news;
	}
	public function getLast(){
		return $this->last;
	}
	public function append(Article $art){
		$this->news[] = $art;
		$this->last++;
	}
	public function save($file){
		$res = fopen($file,"w");
		foreach($this->news as $art){
			fwrite($res, $art->getName() . "*" . $art->getTitle() . "*" . $art->getData() . PHP_EOL);
		}
		fclose($res);
	}
}
?>