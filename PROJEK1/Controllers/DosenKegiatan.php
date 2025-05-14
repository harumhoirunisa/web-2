<?php
require_once 'Config/Connection.php';

class DosenKegiatan
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function index()
    {
        $stmt = $this->pdo->query("SELECT 
            dk.id, 
            d.nama as nama_dosen, k.nama as nama_kegiatan
            LEFT JOIN dosen d ON d.id = dk.dosen_id
            LEFT JOIN kegiatan k ON k.id = dk.kegiatan_id
        ");
        $data = $stmt->fetchAll();

        return $data;
    }

    public function show($id)
    {
        $stmt = $this->pdo->query("SELECT 
            dk.id, 
            d.nama as nama_dosen, k.nama as nama_kegiatan
            LEFT JOIN dosen d ON d.id = dk.dosen_id
            LEFT JOIN kegiatan k ON k.id = dk.kegiatan_id
            WHERE dk.id=$id
        ");
        $data = $stmt->fetch();
        return $data;
    }

    public function create($data)
    {
        $sql = "INSERT INTO dosen_kegiatan (dosen_id, kegiatan_id) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $data['dosen_id'],
            $data['kegiatan_id']
        ]);
        return $this->pdo->lastInsertId();
    }

    public function update($id, $data)
    {
        $sql = "UPDATE dosen_kegiatan SET dosen_id=:dosen_id, kegiatan_id=:kegiatan_id WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':dosen_id', $data['dosen_id']);
        $stmt->bindParam(':kegiatan_id', $data['kegiatan_id']);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return $this->show($id);
    }

    public function delete($id)
    {
        $row = $this->show($id);
        $sql = "DELETE FROM dosen_kegiatan WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return $row;
    }
}

$dosenkegiatan = new DosenKegiatan($pdo);
