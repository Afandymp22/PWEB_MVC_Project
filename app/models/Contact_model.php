<?php

class Contact_model
{
    private $table = 'pesan_user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahDataContact($data)
    {
        $query = "INSERT INTO pesan_user
                    VALUES 
                    ('', :fname, :lname, :email, :tentang, :pesan)";

        $this->db->query($query);
        $this->db->bind('fname', htmlspecialchars($data['fname']));
        $this->db->bind('lname', htmlspecialchars($data['lname']));
        $this->db->bind('email', htmlspecialchars($data['emailp']));
        $this->db->bind('tentang', htmlspecialchars($data['tentang']));
        $this->db->bind('pesan', htmlspecialchars($data['pesan']));

        $this->db->execute();

        return $this->db->rowCount();



    }





}

