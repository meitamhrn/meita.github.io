<?php
$koneksi = mysqli_connect("localhost", "root", "", "website");

if(isset($_POST["proses"])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO form (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Data berhasil disimpan');
                window.location.href = 'Web.php'; 
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>