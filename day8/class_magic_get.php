<?php
error_reporting(E_ALL);
class vehicle {
	
	public $engine;
	public $maxSpeed;
	public $manufacturer;
	
	/**
	 * @return the $engine
	 */
	public function getEngine() {
		return $this->engine;
	}

	/**
	 * @return the $speed
	 */
	public function getMaxSpeed() {
		return $this->maxSpeed;
	}

	/**
	 * @return the $manufacturer
	 */
	public function getManufacturer() {
		return $this->manufacturer;
	}

	/**
	 * @param $engine the $engine to set
	 */
	public function setEngine($engine) {
		$this->engine = $engine;
	}

	/**
	 * @param $speed the $speed to set
	 */
	public function setMaxpeed($speed) {
		$this->maxSpeed = $speed;
	}

	/**
	 * @param $manufacturer the $manufacturer to set
	 */
	public function setManufacturer($manufacturer) {
		$this->manufacturer = $manufacturer;
	}

	public function __get($propertyName)
	{
		if($propertyName=='safeSpeed')
		{
			return $this->getMaxSpeed()*.8;
		}
	}
	
}

$v = new vehicle();
$v->setMaxpeed(50);
echo $v->safeSpeed;