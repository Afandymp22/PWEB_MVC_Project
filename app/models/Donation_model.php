<?php

class Donation_model
{
    private $table = 'daftar_donasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDonation()
    {

        $this->db->query('SELECT SUM(donasi) AS total FROM ' . $this->table);
        return $this->db->resultSet();

        // $this->stmt = $this->dbh->prepare('SELECT SUM(donasi) AS total FROM daftar_donasi');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function tambahDataDonasi($data)
    {
        $query = "INSERT INTO daftar_donasi
                    VALUES 
                    ('', :nama, :email, :bank, :donasi)";

        $this->db->query($query);
        $this->db->bind('nama', htmlspecialchars($data['nama']));
        $this->db->bind('email', htmlspecialchars($data['email']));
        $this->db->bind('bank', htmlspecialchars($data['bank']));
        $this->db->bind('donasi', htmlspecialchars($data['donasi']));

        $this->db->execute();

        return $this->db->rowCount();



    }





}
