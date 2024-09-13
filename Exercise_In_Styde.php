<?php 
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

echo $person1->fullName() . "es amigo de " . $person2->fullName();

?>