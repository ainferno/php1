<?php
class View
{
	protected $Data=[];
	public function assign($name, $value){
		$this->Data[$name] = $value;
	}
	public function display($template){
		foreach($this->Data as $i => $a){
			${$i} = $a;
		}
		echo $this->render($template);
	}
	public function render($template){
		foreach($this->Data as $i => $a){
			${$i} = $a;
		}
		ob_start();
		include $template;
		$str = ob_get_contents();
		ob_clean();
		return $str;
	}
}

class DB
{
	protected $db;
	public function __construct($file){
		$conf = file($file);
		$this->db = new PDO($conf[0],$conf[1]);
	}
	public function execute(string $sql){
		$sth = $this->db->prepare($sql);
		return $sth->execute();
	}
	public function query(string $sql, array $data){
		$sth = $this->db->prepare($sql);
		if($sth->execute($data)){
			return $sth->fetchAll();
		}
		else
			return false;
	}
}
?>