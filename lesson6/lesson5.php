<?php
class View{
	protected $Data=[];
	public function assign($name, $value){
		$this->Data[$name] = $value;
	}
	public function display($template){
		ob_start();
		
		extract($this->Data);
		
		include($template);
		
		
		$ob = ob_get_contents();
		
		ob_get_clean();
		echo $ob;
	}
	public function render($template){
		return $template;
	}
}
?>