<?php
    class Transformer {
        private $name;
        private $role;
        private $affiliation;
        // Constructor to initialize the properties
        public function __construct($name, $role, $affiliation) {
            $this->name = $name;
            $this->role = $role;
            $this->affiliation = $affiliation;
        }
        // Getter for name
        public function getName() {
            return $this->name;
        }
        // Getter for role
        public function getRole() {
            return $this->role;
        }
        // Getter for affiliation
        public function getAffiliation() {
            return $this->affiliation;
        }
        // Method to display transformer details
        public function displayDetails() {
            echo "Name: " . $this->getName() . "\n";
            echo "Role: " . $this->getRole() . "\n";
            echo "Affiliation: " . $this->getAffiliation() . "\n";
            echo '<br>';
        }
    }
    // Creating an instance of Transformer with Optimus Prime's data
    $optimusPrime = new Transformer("Optimus Prime", "Leader", "Autobot");
    $ratchet = new Transformer("Ratchet", "Healer", "Autobot");
    //Displaying the details of Optimus Prime
    $optimusPrime->displayDetails();
    $ratchet->displayDetails();
?>