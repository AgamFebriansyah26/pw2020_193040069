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
    $nama_alatmusik = htmlspecialchars($data['nama_alatmusik']);
    $asal = htmlspecialchars($data['asal']);
    $tahun_ditemukan = htmlspecialchars($data['tahun_ditemukan']);
    $warna = htmlspecialchars($data['cara_dimainkan']);

    $query = "INSERT INTO 
                musik
              VALUES
              ('', '$gambar', '$nama_alatmusik', '$asal', '$tahun_ditemukan', '$cara_dimainkan')
              ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM musik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nama_alat_musik = htmlspecialchars($data['nama_alat_musik']);
    $asal = htmlspecialchars($data['asal']);
    $tahun_ditemukan = htmlspecialchars($data['tahun_ditemukan']);
    $warna = htmlspecialchars($data['cara_dimainkan']);

    $queryubah = "UPDATE musik
                    SET
                    gambar = '$gambar'
                    nama_alat_musik = '$nama_alat_musik'
                    asal = '$asal'
                    tahun_ditemukan = $tahun_ditemukan'
                    cara_dimainkan = '$cara_dimainkan'
                WHERE id = '$id' ";
    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result
}