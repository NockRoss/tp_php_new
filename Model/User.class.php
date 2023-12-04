<?php
class User {

	private int $idUser;
	private string $email;
	private string $password;
	private string $firstName;
	private string $lastName;
	private string $adress;
	private string $postalCode;
	private string $city;
	private bool $admin;
	
     public function __construct(array $data) {
        $this->idUser = isset($data['idUser']) ? $data['idUser'] : 0;
        $this->email = isset($data['email']) ? $data['email'] : '';
        $this->password = isset($data['password']) ? $data['password'] : '';
        $this->firstName = isset($data['firstName']) ? $data['firstName'] : '';
        $this->lastName = isset($data['lastName']) ? $data['lastName'] : '';
        $this->adress = isset($data['adress']) ? $data['adress'] : '';
        $this->postalCode = isset($data['postalCode']) ? $data['postalCode'] : '';
        $this->city = isset($data['city']) ? $data['city'] : '';
    }

	//setters et Getters ID
	public function setIdUser($idUser)
	{
		$this->idUser = $idUser;
		return $this;
	}
	public function getIdUser() 
    { 
        return $this->idUser; 
    }

    //setters et Getters Email
    public function setEmail($email)
    {
    	$this->email = $email;
    	return $this;
    }

    public function getEmail()
    {
    	return $this->email;
    }

    //setters et Getters Passwd
    public function setPassword($password)
    {
    	$this->password = $password;
    	return $this;
    }

    public function getPassword(){
    	return $this->password;
    }

    //setters et Getters firstName
    public function setFirstName($firstName)
    {
    	$this->firstName = $firstName;
    	return $this;
    }

    public function getFirstName(){
    	return $this->firstName;
    }

    //setters et Getters LastName
    public function setLastName($lastName)
    {
    	$this->lastName = $lastName;
    	return $this;
    }

    public function getLastName(){
    	return $this->lastName;
    }

    //setters et Getters Adress
    public function setAdress($adress)
    {
    	$this->adress = $adress;
    	return $this;
    }

    public function getAdress(){
    	return $this->adress;
    }

    //setters et Getters PostalCode
    public function setPostalCode($postalCode)
    {
    	$this->postalCode = $postalCode;
    	return $this;
    }

    public function getPostalCode(){
    	return $this->postalCode;
    }

    //setters et Getters City
    public function setCity($city)
    {
    	$this->city = $city;
    	return $this;
    }

    public function getCity(){
    	return $this->city;
    }

    //setters et Getters Admin
    public function setAdmin(bool $admin){
        $this->admin = $admin;
        return $this;
    }

    public function isAdmin(){
        return $this->admin;
    }
}

?>