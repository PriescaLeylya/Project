<!DOCTYPE html>
        <html>
        <head>
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
        </head>
        <body>
        <style type="text/css">
        table tr td,
        table tr th{
        font-size: 9pt;
        }
        </style>
        <h4 align="center">PELANGGAN REPORT</h4>
        Tanggal Booking : {{ $pelanggans->tanggal_booking}} <br>

        <b>Name</b> : {{ $pelanggans->nama }} <br>
        <b>Jenis_Kelamin</b> : {{ $pelanggans->jenis_kelamin }} <br>
        <b>Phone_Number</b> : {{ $pelanggans->phone_number }} <br><br>
        <b>Alamat</b> : {{ $pelanggans->alamat }} <br>
        <b>Tujuan</b> : {{ $pelanggans->tourtravels->Tujuan }} <br><br>
        <b>Destinasi </b> : {{ $pelanggans->tourtravels->Destinasi }} <br><br>
        </body>
</html>