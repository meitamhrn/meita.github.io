<?php
$koneksi = mysqli_connect("localhost", "root", "", "web_db");

if(isset($_POST["proses"])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO signup (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Data berhasil disimpan');
                window.location.href = 'Web.html'; 
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>