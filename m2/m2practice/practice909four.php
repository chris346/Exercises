

 <?php 
class Animal {
    public $foodType;
    public function __construct($type) {
        $this->foodType = $type;
    }
}

class ZooKeeper {
	private $meat = 10;
	private $veg = 10;

	public function feed($animal) {
			if($animal->foodtype == 'carnivore') {
				$this->meat -= 2;
			}elseif($animal->foodtype == 'herbivore') {
				$this->veg -=2;
			} elseif($animal->foodType == 'omnivore') {
				$this->meat--;
				$this->veg--;
			} else {
				die("invalid foodType: " . $animal->foodType) ;
			}
	}

	public function getFoodStatus() {

		return "meat: " . $this->meat . "veg: " . $this->veg;
	}
	
	$hip_lion = new Animal('herbivore');
	$lion = new Animal('carnivore');
	$bear = new Animal('omnivore');
	$lorax = new Animal('candivore');

	$zooguy = new ZooKeeper();
		echo $zooguy->getFoodStutus() "<br>";

	$zooguy->feed($hip_lion);
		echo $zooguy->getFoodStatus() "<br>";
}






  ?>