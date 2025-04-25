<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Halo, Saya [juliawan Ashari]</title>
  <script>
    function validateForm() {
      var nama = document.forms["formBiodata"]["nama"].value;
      var email = document.forms["formBiodata"]["email"].value;
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (nama == "") {
        alert("Nama tidak boleh kosong");
        return false;
      }
      if (!emailRegex.test(email)) {
        alert("Email tidak valid");
        return false;
      }
      return true;
    }
  </script>
</head>
<body>

  <h1>Halo, Saya [juliawan Ashari]</h1>
  
  <p>
    Biodata saya:<br>
    Nama: [juliawan ashari]<br>
    Jurusan: [sistem informasi]<br>
    Minat: [Minat Anda, contoh: baca, UI/UX]
  </p>

  <form name="formBiodata" method="POST" onsubmit="return validateForm();">
    <label>Nama:</label><br>
    <input type="text" name="nama"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email"><br><br>

    <input type="submit" value="Kirim">
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = htmlspecialchars($_POST['nama']);
      $email = htmlspecialchars($_POST['email']);

      echo "<h3>Hasil Input:</h3>";
      echo "Nama: $nama <br>";
      echo "Email: $email";
    }
  ?>

</body>
</html>