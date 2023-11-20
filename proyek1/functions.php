<?php
//koneksi ke database
$conn = mysqli_connect("127.0.0.1:3307
","root","","proyek_latihan");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;

    }
    return $rows;
}

function hapus ($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM type WHERE id = $id");
    return mysqli_affected_rows($conn);
}

?>