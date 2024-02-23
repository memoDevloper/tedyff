<?php

class EMR{
	public function success($message){
		$x['type'] = "notify";
		$x['notify'] = "success";
		$x['position'] = "right";
		$x['message'] = $message;
		return $x;
	}
	public function error($message){
		$x['type'] = "notify";
		$x['notify'] = "error";
		$x['position'] = "right";
		$x['message'] = $message;
		return $x;
	}
	public function elementSuccess($message,$element){
		$x['type'] = "elementNotify";
		$x['notify'] = "success";
		$x['element'] = $element;
		$x['position'] = ($_SESSION['lang'] == 0) ? "right" : "left";
		$x['message'] = $message;
		return $x;
	}
	public function elementError($message,$element){
		$x['type'] = "elementNotify";
		$x['notify'] = "error";
		$x['element'] = $element;
		$x['position'] = ($_SESSION['lang'] == 0) ? "right" : "left";
		$x['message'] = $message;
		return $x;
	}
	public function func($function,$data){
		$x['type'] = "func";
		$x['func'] = $function;
		$x['selector'] = $data;
		return $x;
	}
	public function options($text, $value, $name, $class){
		$x['text'] = $text;
		$x['value'] = $value;
		$x['name'] = $name;
		$x['elementClass'] = $class;
		return $x;
	}
	public function send($emr){
		echo json_encode($emr);
	}
}