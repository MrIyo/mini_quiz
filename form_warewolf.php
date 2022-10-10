<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>

  <h1>Form Werewolf</h1>
  <form action="" method="post" name="formWW" onsubmit="return validateForm()">
      <label>Nama :</label>
      <input type="text" name="nama" placeholder="Input Nama">
        <br><br>

      <label for="role">Role :</label>
      <select name="role" id="role">
        <option value="">----- Pilih Role -----</option>
        <option value="penyihir">Penyihir</option>
        <option value="guard">Guard</option>
        <option value="werewolf">Werewolf</option>
      </select>
    <br><br>
    <div class="row">
      <input type="submit" name="submit" value="Simpan">
    </div>

    <script>
        function validateForm() {
            if (document.forms["formWW"]["nama"].value == "") {
                alert("Nama Tidak Boleh Kosong");
                document.forms["formWW"]["nama"].focus();
                return false;
            }
            if (document.forms["formWW"]["role"].selectedIndex < 1) {
                alert("Role Tidak Boleh Kosong.");
                document.forms["formWW"]["role"].focus();
                return false;
            }
        }
    </script>

  </form>

  <?php 


    if (isset($_POST['submit'])) {
      $nama   = $_POST['nama'];
      $role   = $_POST['role'];
      

      echo "Nama : $nama <br>";
      echo "Role : $role <br>";
      
    }
  ?>

</body>
</html>





