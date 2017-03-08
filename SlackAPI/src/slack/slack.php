<?php

namespace slack;

class slack{

	/**
	*@param String $token
	*@param bool $user
	*	true => user
	*	false => bot
	*/
	function __construct($token,$user=true){
		$this->token = $token;
		$this->user = $user;
	}

	function isUser(){
		return $this->user;
	}

	function getToken(){
		return $this->token;
	}

	function sendMessage($channel,$message){
		$token = $this->token;
		$message = urlencode($message);
		$user = $this->user;
		$url = "https://slack.com/api/chat.postMessage?token=${token}&channel=%23${channel}&text=${message}&as_user=${user}";
		file_get_contents($url);
	}
}