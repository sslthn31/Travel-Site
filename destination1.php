<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container{
            padding: 150px 0;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        .form{
            width: 500px;
            height: auto;
            border: 1px solid black;
            padding: 0.5rem;
            border-radius: 10px;
            display: block;
        }
        .form h2{
            text-align: center;
        }
        form{
            padding: 1rem 0;
        }
        .input{
            display: flex;
            justify-content: space-between;
            margin: 1rem;
        }
        .input input{
            width: 250px;
            padding: 0 5px;
        }
        .submit{
            padding: 1rem;
            display: flex;
            justify-content: end;
        }
        .submit input{
            width: 90px;
            height: auto;
            font-weight: bold;
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Form Pemesanan</h2>
            <form action="destination1.php" method="post" name="form1">
                <div class="input">
                    <label for="">Nama Lengkap</label>
                    <input type="text" required name="nama_lengkap">
                </div>
                <div class="input">
                    <label for="">Nomor Identitas</label>
                    <input type="text" name="no_identitas">
                </div>
                <div class="input">
                    <label for="">Nomor Hp</label>
                    <input type="text" name="no_hp">
                </div>
                <div class="input">
                    <label for="">Tanggal Kunjungan</label>
                    <input type="date" name="tgl_kunjungan">
                </div>
                <div class="input">
                    <label for="">Jumlah Tiket</label>
                    <input type="number" name="total">
                </div>
                <div class="submit">
                    <input type="submit" value="Pesan" name="submit">
                </div>
            </form>
        </div>
    </div>
<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $namaLengkap = $_POST['nama_lengkap'];
        $noIdentitas = $_POST['no_identitas'];
        $noHp = $_POST['no_hp'];
        $tglKunjungan = $_POST['tgl_kunjungan'];
        $total = $_POST['total'];
        
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_ragunan(nama_lengkap, no_identitas, no_hp, tgl_kunjungan, total) VALUES('$namaLengkap','$noIdentitas','$noHp', '$tglKunjungan', '$total')");
        
        // Show message when user added
        
    }
    ?>
</body>
</html>