<?php

namespace slack;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

	private $token = "xxxxxxxxxxxxxxxxxx";
	//token

	function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	function join(PlayerJoinEvent $event){
		$name = $event->getPlayer()->getName();
		$slack = new slack($this->token);
		$slack->sendMessage("random","join : ".$name);
	}

}
