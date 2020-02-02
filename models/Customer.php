<?php

class Customer {

    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function addCustomer($data) {

        //prepare Query 
        $this->db->query('INSERT INTO customers (id, name_on_card, email) 
        VALUES(:id, :name_on_card, :email)');

        //bind values 

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name_on_card', $data['name_on_card']);
        $this->db->bind(':email', $data['email']);

        //Execute 
        if($this->db->execute()) {
            return true;

        }else {
            return false;
        }
    }

    public function getCustomers() {
        $this->db->query('SELECT * FROM customers ORDER BY created_at DESC ');

        $results = $this->db->resultSet();
        
        return $results;
    }
}