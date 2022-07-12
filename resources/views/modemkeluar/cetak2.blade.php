<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan Barang-Keluar</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <style>
        body {
            font-family: Tahoma;
            font-size: 12px;
            margin: 0;
        }

        a {
            color: #000000;
        }

        table,
        th,
        td {
            padding: 0;
            border: 1px solid black;
            border-collapse: collapse;
            /* width: 700px;  weight of receipt 8.6 inches*/
        }

        .sheet {
            margin: 0;
            overflow: hidden;
            position: relative;
            box-sizing: border-box;
            page-break-after: always;
        }

        /** Paper sizes **/
        body.A3 .sheet {
            width: 297mm;
            height: 419mm
        }

        body.A3.landscape .sheet {
            width: 420mm;
            height: 296mm
        }

        body.A4 .sheet {
            width: 210mm;
            height: 296mm
        }

        body.A4.landscape .sheet {
            width: 297mm;
            height: 209mm
        }

        body.A5 .sheet {
            width: 148mm;
            height: 209mm
        }

        body.A5.landscape .sheet {
            width: 210mm;
            height: 147mm
        }

        /** Padding area **/
        .sheet.padding-5mm {
            padding: 5mm
        }

        .sheet.padding-10mm {
            padding: 10mm
        }

        .sheet.padding-15mm {
            padding: 15mm
        }

        .sheet.padding-20mm {
            padding: 20mm
        }

        .sheet.padding-25mm {
            padding: 25mm
        }

        /** For screen preview **/
        @media screen {
            body {
                background: #e0e0e0
            }

            .sheet {
                background: white;
                box-shadow: 0 .5mm 2mm rgba(0, 0, 0, .3);
                margin: 5mm;
            }
        }

        /** Fix for Chrome issue #273306 **/
        @media print {
            body.A3.landscape {
                width: 420mm
            }

            body.A3,
            body.A4.landscape {
                width: 297mm
            }

            body.A4,
            body.A5.landscape {
                width: 210mm
            }

            body.A5 {
                width: 148mm
            }


        }

        @page {
            size: auto;
            /* this affects the margin in the printer settings */
            margin: 0;

        }

    </style>
</head>

<body class="A5">
    <div style="margin: 0 auto; display: table;">

        <div class="sheet padding-5mm">

            <table style="width: 100%; border: none;">
                <tr>
                    <td style="border: none; text-align: left; width: 30%;">
                        <img src="https://csbs.powertelsolo.net/images/logo_print.png" alt="logo">


                    </td>
                    <td style="border: none; text-align: center; width: 30%;">
                        <div style="font-size: 15px; font-weight: bold; ">Laporan Barang Keluar</div>

                        <div style="font-size: 12px; margin-top: 7px; margin-bottom: 0px">Tanggal:{{ date('d-m-y') }}
                        </div>
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



            <div style="margin-top: 15px">
                <form action="{{ route('ModemKeluar.show', $modemkeluar->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <table style="width: 100%; border: none;">

                        <tr>
                            <td style="width: 20%; height: 30px; padding: 3px;"><strong>Nama modem</strong><br>
                            </td>
                            <td style="width: 80%; padding: 3px; text-align: left">
                                {{ $modemkeluar->modem->nama }}</em></td>

                        </tr>
                        <tr>
                            <td style="width: 20%; height: 30px; padding: 3px;"><strong>Team teknisi</strong><br>
                            </td>
                            <td style="width: 80%; padding: 3px; text-align: left">{{ $modemkeluar->team }}</em></td>
                        </tr>
                        <tr>
                            <td style="width: 20%; height: 30px; padding: 3px;"><strong>Jumlah
                                    Modem</strong><br>
                            </td>
                            <td style="width: 80%; padding: 3px; text-align: left">{{ $modemkeluar->qty }}</td>
                        </tr>
                        <tr>
                            <td style="width: 20%; height: 30px; padding: 3px;"><strong>Keterangan</strong><br></td>
                            <td style="width: 80%; padding: 3px; text-align: left">{{ $modemkeluar->keterangan }}</td>
                        </tr>

                    </table>
                </form>
            </div>

            <div style="margin-top: 15px">


                <table style="width: 100%; border: none;">

                    <tr>
                        <td style="height: 95px; padding: 5px; text-align: left; width: 56%; vertical-align:top">
                            <div style="font-size: 13px">
                                <strong>Keterangan Lain:</strong>
                            </div>

                        </td>
                        <td style="padding: 5px; text-align: center; width: 22%; font-weight: bold; vertical-align:top">
                            <div style="font-size: 12px"><strong><u>Petugas Gudang</u></strong></div>
            </div><br><br><br><br><br>
            <div style="">
                <strong>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</strong>
            </div>
            </td>

            <td style="padding: 5px; text-align: center; width: 22%; font-weight: bold; vertical-align:top">
                <div style="font-size: 12px"><strong><u>Teknisi</u></strong></div><br><br><br><br><br>
                <div style="">
                    <strong>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</strong>
                </div>
            </td>

            </tr>
            </table>
        </div>

    </div>
    </div>

</body>

</html>
