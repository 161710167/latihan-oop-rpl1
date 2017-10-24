<?php
class penjumlahan{
	public $bil1,$bil2;

	function set_nilai ($bilangan1,$bilangan2){
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}
	function get_nilai1(){
		return $this->bil1 + $this->bil2;
	}
	function get_nilai2(){
		return $this->bil1 - $this->bil2;
	}
	function get_nilai3(){
		return $this->bil1 * $this->bil2;
	}
	function get_nilai4(){
		return $this->bil1 / $this->bil2;
	}
}
?>