<?php
namespace jeremy;
/**
 * Class User
 */
class User
{
    /** @var string  */
    private $firstName;
    /** @var string  */
    private $lastName;
    /** @var string  */
    private $address;
    /** @var string  */
    private $birthDay;
    /**
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->birthDay;
    }
    /**
     * user constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $address
     * @param string $birthDay
     */
    public function __construct($firstName, $lastName, $address, $birthDay)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->birthDay = $birthDay;
    }
    /**
     * @return string
     */
    public function age()
    {
        $from = new DateTime($this->birthDay);
        $to   = new DateTime('today');
        $age =  $from->diff($to)->y;
        return $age;
    }
    /**
     * @return string
     */
    public function displayWhoIs()
    {
        $returnText = "Nom : " . $this->firstName . "<br />";
        $returnText .= "Prenom : " . $this->lastName . "<br />";
        $returnText .= "Adresse : " . $this->address . "<br />";
        $returnText .= "Date de Naissance : " . $this->birthDay . "<br />";
        return $returnText;
    }
}


$jeremy = new User("Martin", "Jeremy", "1295 Avenue de la Wild", "20-12-1989");

var_dump($jeremy->age());
var_dump($jeremy->displayWhoIs());
var_dump($jeremy->setAddress("103 Rue de la School"));

