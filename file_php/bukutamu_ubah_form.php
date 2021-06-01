<?php

    include_once('koneksi.php');
    $id = $_GET['MMM'];

    $query = "SELECT * FROM bukutamu where id_bukutamu='$id'";
    $hasil = mysqli_query($koneksi,$query);

    $tbl_bukutamu=mysqli_fetch_array($hasil);
    $nama=$tbl_bukutamu['nama'];
    $email=$tbl_bukutamu['email'];
    $isi=$tbl_bukutamu['isi'];

?>
<html>
<head>
<title>Form ubah html</title>
<style >
     .container{
        width:600px;
        height:180px;
        background-color: #EDEFD3;
        border-radius: 18px;
    }
        h1  {
            margin:50px 90px;
        }
</style>
</head>
<body>
    <h1>FORM PENGUBAHAN DATA</h1>

    <div class="container">
        <form action="ubah.php" method="POST">
    <input type="text" name="id" value="<?php echo $id;?>">

    <table>
        <tr>
            <td>Name : </td>
            <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
        </tr>
        <tr>
            <td>Isi : </td>
            <td><textarea name="isi" cols="55" rows="5"> <?php echo $isi; ?> </textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            <input type="submit" value="SUBMIT">
            <input type="reset" value="CANCEL">
            </td>
        </tr>
    </table>
    </form>
    </div>

</body>
</html>