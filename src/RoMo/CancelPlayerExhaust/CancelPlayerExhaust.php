<?php

namespace RoMo\CancelPlayerExhaust;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\plugin\PluginBase;

class CancelPlayerExhaust extends PluginBase{
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents(new class implements Listener{
            public function onExhaust(PlayerExhaustEvent $event){
                $event->setCancelled();
            }
        }, $this);
    }
}