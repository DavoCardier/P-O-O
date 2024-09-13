<?php 
ini_set('declare(strict_types', '1'); 
#recaudando datos de una persona: Nombre Apellido
#$_GET o $_POST; se obtiene la data que envia el usuario.

#funciona tambien con public, pero no con private (Porque los datos no estan dentro de la function)

class Person{

    private $firstName;  
    private $lastName;

    function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    } 

    function fullName() {
        return $this->firstName . " " . $this->lastName;
    }
}

$person1 = new Person('David', 'Cardier');

$person2 = new Person('Angy', 'Goycochea');

echo $person1->fullName() . "es Esposo de " . $person2->fullName();

//************************************************************************************************** */
class Person {
    protected $firstName; // public, protected <-> private
    protected $lastName;
    protected $nickname;
    protected $changedNickname = 0;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setNickname($nickname)
    {
        if ($this->changedNickname >= 2) {
            throw new Exception(
                "You can't change a nickname more than 2 times"
            );
        }

        $this->nickname = $nickname;

        $this->changedNickname++;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person1 = new Person('Duilio', 'Palacios');

$person1->setNickname('Silence');
$person1->setNickname('Sileence');

exit($person1->getNickname());




echo $person1->getFullName();
?>