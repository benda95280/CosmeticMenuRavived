<?php

namespace CosmeticMenu;

use pocketmine\scheduler\Task;
use pocketmine\Player;
use pocketmine\level\Position;
use pocketmine\item\Item;
use pocketmine\item\ItemIds;



class TaskCosmeticMenuSetItem extends Task {

    public function __construct($plugin, Player $player) {
        $this->plugin = $plugin;
        $this->player = $player;
    }

    public function onRun($tick) {
    	$item = new Item(345,0,1);
		$this->player->getInventory()->addItem($item);

    }

}
