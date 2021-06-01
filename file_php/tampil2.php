<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin:auto;
        }

        table thead {
            background-color: #991010;
            color:white;
        }

        table tr td {
            background-color: #EDEFD3;
        }

        a {
            text-decoration: none;
            
        }

        h1 {
            text-align: center;
        }

        .navigation {
            display:flex;
            align-items:center;
            }

        button {
            background: #991010;
            border-radius: 20px;
            box-shadow: 0px 5px 10px -2px #991010;
            height: 50px;
            margin: 0 auto;
        }

        button a {
            color:white;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>DAFTAR PESERTA SRIWIJAYA BESANJO 2020</h1>

    <table border="1" cellpadding="5">
    <thead>
        <th>NAMA & EDIT</th>
        <th>EMAIL</th>
        <th>ASAL SEKOLAH</th>
        <th>HAPUS</th>
    </thead>
    
        
        <?php
            include_once( 'koneksi.php' );    
         
            $query = "SELECT * FROM bukutamu";
            $hasil = mysqli_query(  $koneksi,$query );
            
            if ( !$hasil )
                die( "Permintaan gagal!!!" );
                
            while ($tbl_bukutamu=mysqli_fetch_array($hasil))
            { 
        ?>                
            <tr>
                <td>
                <a href="bukutamu_ubah_form.php?MMM=<?php echo $tbl_bukutamu['id_bukutamu'];?>">
                <?php echo $tbl_bukutamu['nama']; ?></a>
                </td>
                <td>
                <?php echo $tbl_bukutamu['email']; ?>
                </td>
                <td>
                <?php echo $tbl_bukutamu['isi'];?>
                </td>
                <td>
                <a href="hapus.php?id=<?php echo $tbl_bukutamu['id_bukutamu']; ?>">YA HAPUS</a>
                </td>
            </tr>    
            
        <?php

            }
        ?>
        
    </tbody>
</table>
<br/>
      <div class="navigation">
            <button><a href="../index.php">KEMBALI KE HOME</a></button>
           <button> <a href="bukutamu.php">KEMBALI KE HALAMAN PENDAFTARAN</a><br></button>
      </div>

    
</body>
</html>