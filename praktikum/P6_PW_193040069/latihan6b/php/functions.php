<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040069") or die("Database Salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama_alatmusik = htmlspecialchars($data['nama_alat_musik']);
    $asal = htmlspecialchars($data['asal']);
    $tahun_ditemukan = htmlspecialchars($data['tahun_ditemukan']);
    $warna = htmlspecialchars($data['cara_dimainkan']);

    $query = "INSERT INTO 
                musik
              VALUES
              ('', '$gambar', '$nama_alat_musik', '$asal', '$tahun_ditemukan', '$cara_dimainkan')
              ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
