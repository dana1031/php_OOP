<?php
namespace App\Drinks;
class Drink {
	/**
	 * @var array
	 */
	private $data = [];
	public function __construct(array $data = null) {
		if ($data) {
			$this->setData($data);
		} else {
			$this->data = [
				'id' => null,
				'name' => null,
				'email' => null,
				'password' => null
			];
		}
	}
	/**
	 * Sets all data from array
	 * @param type $array
	 */
	public function setData(array $array) {
		if (isset($array['id'])) {
			$this->setID($array['id']);
		} else {
			$this->data['id'] = null;
		}
		$this->setName($array['name'] ?? null);
		$this->setAmount($array['email'] ?? null);
		$this->setAbarot($array['password'] ?? null);
	}
	/**
	 * Gets all data as array
	 * @return array
	 */
	public function getData(): array {
		return [
			'id' => $this->getID(),
			'name' => $this->getName(),
			'email' => $this->getEmail(),
			'password' => $this->getPassword(),
		];
	}
	/**
	 * Sets ID
	 * @param int $id
	 */
	public function setID(int $id) {
		$this->data['id'] = $id;
	}
	
	/**
	 * Set data name
	 * @param string $name
	 */
	public function setName(string $name) {
		$this->data['name'] = $name;
	}
	
	/**
	 * Set data email
	 * @param string $email
	 */
	public function setEmail(string $email) {
//		if ($amount >= 0) {
//			$this->data['amount_ml'] = $amount;
//		} else {
//			$this->data['amount_ml'] = 0;
//		}
	}
	
	/**
	 * Set data passord
	 * @param int $password
	 */
	public function setPassword(int $password) {
		if ($password >= 0 && $password < 100) {
			$this->data['password'] = $password;
		} else {
			throw new Exception('password invalid');
		}
	}
	
	
	
	/**
	 * Gets ID
	 * @return int|null
	 */
	public function getID() {
		return $this->data['id'];
	}
	
	/**
	 * Returns name
	 * @return string|null
	 */
	public function getName() {
		return $this->data['name'];
	}
	
	/**
	 * Returns email
	 * @return int|null
	 */
	public function getEmail()  {
		return $this->data['email'];
	}
	/**
	 * Returns alcohol percentage
	 * @return float|null
	 */
	public function password()  {
		return $this->data['password'];
	}
	
}