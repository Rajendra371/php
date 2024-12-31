<?php

class Roshan {
    public string $name;    // Added type hint
    public string $address; // Added type hint
    public int $contact;    // Keeps int type for contact

    // Constructor to initialize the properties
    public function __construct(string $name, string $address, int $contact) {
        $this->name = $name;
        $this->address = $address;
        $this->contact = $contact;
    }

    // Getter for name
    public function get_name() {
        return $this->name;
    }

    // Getter for address
    public function get_address() {
        return $this->address;
    }

    // Getter for contact
    public function get_contact() {
        return $this->contact;
    }
}

// Create an object and pass valid arguments
$obj = new Roshan('Roshan Parajuli', 'Nijgad', 982345678); // Ensure contact is passed as an integer

// Output the properties using getter methods
echo "Name: " . $obj->get_name() . '<br>';
echo "Address: " . $obj->get_address() . '<br>';
echo "Contact: " . $obj->get_contact() . '<br>';

?>
