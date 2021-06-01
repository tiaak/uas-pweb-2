<html>

<head>
<title>Form Input HTML</title>
</head>
<style>
        .container{
        width:600px;
        height:160px;
        background-color: #EDEFD3;
        border-radius: 18px;
        padding-top: 10px;
        margin-left: 500px;
    }
        h1  {
            margin:50px 130px;
             margin-left: 630px;
        }
       
</style>

<body>
    <h1>FORM PENDAFTARAN</h1>

    <div class="container">

        <form action="simpan.php" method="POST">
    <table>
        <tr>
            <td>Name : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Asal Sekolah : </td>
            <td><textarea name="isi" cols="55" rows="5"></textarea></td>
        </tr>
        <tr>
           <div class="tombol">
                <td colspan="2" align="center">
                <input type="submit" value="SUBMIT">
                <input type="reset" value="CANCEL">
            </td>
           </div>
        </tr>
    
    </table>
    
    </form>
    </div>

</body>


</html>