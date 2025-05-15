<?php
require_once 'Config/DB.php';

class dosen
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function index()
    {
        $stmt = $this->pdo->query("SELECT * FROM dosen");
        return $stmt->fetchAll(); 
    }

    public function show($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM dosen WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO dosen (id,nidn,nama,gelar_belakang,gelar_depan,jenis_kelamin,tempat_lahir,tanggal_lahir,alamat,email,tahun_masuk,prodi_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        return $stmt->execute([$data['id'], $data['nidn'], $data['nama'], $data['gelar_belakang'], $data['gelar_depan'], $data['jenis_kelamin'], $data['tempat_lahir'], $data['tanggal_lahir'], $data['alamat'], $data['email'], $data['tahun_masuk'], $data['prodi']]);
    }

    public function update($id, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE prodi SET kode = ?, nama = ?, kaprodi = ? WHERE id=?");
        return $stmt->execute([$data['kode'], $data['nama'], $data['kaprodi']], $id);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM prodi WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

$prodi = new dosen($pdo);
