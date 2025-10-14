<?php

include(base_path('ROCHAO-RCCServiceSoap\Assemblies\Roblox\Grid\RCC_Include.php'));

$RCCServiceSoap = new Roblox\Grid\Rcc\RCCServiceSoap("127.0.0.1", 64989);

echo("HelloWorld(): ".($RCCServiceSoap->HelloWorld() ?? "Failed!")."\n");

?>