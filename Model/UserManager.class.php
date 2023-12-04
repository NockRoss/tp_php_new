<?php
class UserManager
{
	private PDO $db;
    private $table = 'user';

	public function __construct(PDO $db)
	{
		$this->db = $db;
	}


	public function create(User $user): void
	{
		$req = $this->db->prepare("INSERT INTO $this->table (email, password, firstName, lastName, adress, postal_code, city) VALUES(:password, :email, :firstName, :lastName, :adress, :postalCode, :city, :admin)");
		$req->bindValue(':email', $user->getEmail());
        $req->bindValue(':password', hash("sha256", $user->getPassword()));
		$req->bindValue(':firstName', $user->getFirstName());
		$req->bindValue(':lastName', $user->getLastName());
		$req->bindValue(':adress', $user->getAdress());
		$req->bindValue(':postalCode', $user->getPostalCode());
		$req->bindValue(':city', $user->getCity());
		$req->bindValue(':admin', 0);
		$req->execute();
	}


	public function findAll(): array
    {
        $users = [];
        $req = $this->db->query("SELECT * FROM $this->table ORDER BY idUser");

        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new User($donnees);
        }
        return $users;
    }

	public function findOne(int $id): User
	{
    	$req = $this->db->prepare("SELECT * FROM $this->table WHERE idUser = :idUser");
    	$req->bindValue(':idUser', $idUser);
    	$req->execute();
    
    	$donnees = $req->fetch(PDO::FETCH_ASSOC);
    
    	if (!$donnees) {
        	throw new RuntimeException("User not found");
    	}
    
   	 return new User($donnees);
	}

	public function update(User $user): void
	{
    	$req = $this->db->prepare("UPDATE $this->table SET 
        	password = :password,
        	email = :email,
        	firstName = :firstName,
        	lastName = :lastName,
        	adress = :adress,
        	postalCode = :postalCode,
        	city = :city,
        	admin = :admin
        	WHERE idUser = :idUser");

    	$req->bindValue(':idUser', $user->getIdUser());
    	$req->bindValue(':password', hash("sha256", $user->getPassword()));
    	$req->bindValue(':email', $user->getEmail());
    	$req->bindValue(':firstName', $user->getFirstName());
    	$req->bindValue(':lastName', $user->getLastName());
    	$req->bindValue(':adress', $user->getAddress());
    	$req->bindValue(':postalCode', $user->getPostalCode());
    	$req->bindValue(':city', $user->getCity());
    	$req->bindValue(':admin', $user->isAdmin() ? 1 : 0);
    	$req->execute();
	}	

	public function delete(User $user): void
	{
    	$req = $this->db->prepare("DELETE FROM $this->table WHERE idUser = :idUser");
    	$req->bindValue(':idUser', $user->getId());
    	$req->execute();
	}

	public function findByEmailAndPassword($email, $password) {
    $req = $this->db->prepare("SELECT * FROM $this->table WHERE email = :email");
    $req->bindValue(':email', $email);
    $req->execute();

    $user = $req->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        return new User($user);
    }

    return null;
}
    public function findByEmail($email) {
        $req = $this->db->prepare("SELECT * FROM USER WHERE email = :email");
        $req->bindValue(':email', $email);
        $req->execute();

        $user = $req->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            return new User($user);
        }

        return null;
    }

}