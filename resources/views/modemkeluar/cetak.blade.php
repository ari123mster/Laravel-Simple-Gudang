<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>
    <table style="width: 100%; border: none;">
        <tr>
            <td style="border: none; text-align: left; width: 30%;">
                <img src="https://csbs.powertelsolo.net/images/logo_print.png" alt="logo">


            </td>
            <td style="border: none; text-align: center; width: 30%;">
                <div style="font-size: 15px; font-weight: bold; ">Laporan Barang Keluar</div>

                <div style="font-size: 12px; margin-top: 7px; margin-bottom: 0px">Tanggal:{{ date('d-m-y') }}</div>
            </td>
            <td style="border: none; text-align: right; width: 30%;">
                <span
                    style="font-weight: bold; display: inline-block;-webkit-transform: scale(1.1, 1); -moz-transform: scale(1.1, 1); -o-transform: scale(1.1, 1); transform: scale(1.1, 1); margin-right:5.5px">
                    PT. POWER TELECOM
                </span><br>
                <span style="font-size: 11px">Ruko Beteng Blok B6-7<br>
                    Solo - Indonesia<br>
                    Telp. (0271) 643547, 645199</span>
            </td>

        </tr>
    </table>


    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>stock</th>
                <th>Tanggal Masuk</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($modemkeluar as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->modem->nama }}</td>
                    <td>{{ $p->qty }}</td>
                    <td>{{ $p->tgl_keluar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
