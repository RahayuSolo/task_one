<?php

class BattleRoyal {
	var $startmulai = start;

}
		
	$startmulai = fgets(STDIN);
		if ($startmulai == "new"){
			echo "new";
		}
		elseif ($startmulai == "start"){
			echo "start";	
		}
class Player {
    public $name;
    public $blood=100;
	public $manna=40;
	
    function set_name($name) {
      $this->name = $name;
    }

    function get_name() {
      return $this->name;
    }
	
	function get_manna(){
		return $this->manna;
	}
	function get_blood(){
		return $this->blood;
	}
  }		


echo "# ======================================================= #\n";

echo "# Welcome to the Battle Arena #\n";
echo "# ------------------------------------------------------- #\n";
echo "# Description: #\n";
echo "# 1 type \"new\" to create a character #\n";
echo "# 2. type \"start\" to begin the fight #\n";
echo "# ------------------------------------------------------- #\n";

$input = trim (fgets (STDIN));
if ($input=="new"){
	echo "-------------------------------------------------------------------------- \n";
	//minta masukan dari user
	 echo "Please input the player name: ";
	 //ambil masukan dari user dan simpan di var $playersatu
	 $playersatu =trim(fgets(STDIN));
	 //instant kan class Player 
	 $player_one = new Player;
	 //set nama melalui set_name di class player
	 $player_one->set_name($playersatu);
	 //tampilkan nama dengan get_name di class player
	 echo "Currrent Player: \n-" . $player_one->get_name() ."\n-";
	 $playerdua=trim(fgets(STDIN));
	 $player_two= new Player;
	 $player_two->set_name($playerdua);
	 $player_two->get_name();
	 
  		  
	echo "--------------------------------------------------------------------------- \n";
	echo "Do you want to start battle? Yes/ No \n";
	$choice = trim (fgets (STDIN));
		if ($choice == "yes"){
	
	echo "--------------------------------------------------------------------------- \n";

	$PlayerOneManna=$player_one->get_manna();
	$PlayerOneBlood=$player_one->get_blood();
	$PlayerTwoManna=$player_two->get_manna();
	$PlayerTwoBlood=$player_two->get_blood();
	
	while ($PlayerOneManna != 0 || $PlayerOneBlood != 0 || $PlayerTwoManna != 0 || $PlayerTwoBlood != 0){
	$PlayerOneManna= $PlayerOneManna -10 ;
	$PlayerTwoBlood= $PlayerTwoBlood - 25;
	
	echo $player_one->get_name() . ": Manna=" . $PlayerOneManna . "|| Blood= " . $PlayerOneBlood. "\n";
	echo $player_two->get_name() . ": Manna= " . $PlayerTwoManna . "|| Blood= " . $PlayerTwoBlood. "\n";

	echo "--------------------------------------------------------------------------- \n";
	
		if ($PlayerOneManna <=0 ) {
			echo "The Winner is ". $player_two->get_name() ;
		break;
		}
		
		else if ($PlayerTwoBlood <=0){
			echo  $player_one->get_name(). " Loser";
			break;
		}
		}
		
	}
else {
	echo "You must create a new Player\n";
	echo "Open again if you want";
}
}

?>