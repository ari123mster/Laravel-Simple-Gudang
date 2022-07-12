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

<body class="A5 landscape">
    <div style="margin: 0 auto; display: table;">

        <div class="sheet padding-5mm">

            <table style="width: 100%; border: none;">
                <tr>
                    <td style="border: none; text-align: left; width: 30%;">
                        <img src="https://csbs.powertelsolo.net/images/logo_print.png" alt="logo">


                    </td>
                    <td style="border: none; text-align: center; width: 30%;">
                        <div style="font-size: 15px; font-weight: bold; ">Laporan Barang Keluar</div>

                        <div style="font-size: 12px; margin-top: 7px; margin-bottom: 0px">Tanggal : 07 April 2022</div>
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

            {{-- <div style="margin-top: 12px">

                <table style="width: 100%; border: none;">
                    <tr>

                        <td style="border: none; width: 33%;">
                            <table style="width: 100%;  border: none;">
                                <tr>
                                    <td style="height: 98px; padding: 3px; vertical-align: top; border-right: none;">
                                        <div style="font-weight: bold; border-right: none;"><u>Kepada / <em>To</em></u>
                                            :</div>
                                        <div style="font-weight: bold; margin-top:6px; border-right: none;">Riyan
                                            Hidayat</div>
                                        <div style="margin-top:8px; border-right: none;">
                                            Asmil Yonif 413
                                            Palur, Mojolaban, Sukoharjo, Jawa Tengah, 57554 </div>
                                    </td>
                                </tr>

                            </table>

                        </td>
                        <td style="border: none; width: 33%; ">
                            <table style="width: 100%;  border: none;">
                                <tr>
                                    <td style="width: 16%; border-right: none; padding: 3px;"><strong>Nomor
                                            SPK</strong><br /><em>WOL No</em></td>
                                    <td style="width: 2%; border-left: none; border-right: none;">:</td>
                                    <td style="width: 30%; border-left: none;  border-right: none;">PWR202204073</td>

                                </tr>
                                <tr>
                                    <td style="border-right: none; border-right: none; padding: 3px;"><strong>Telepon
                                            Seluler</strong><br /><em>Cell Phone</em></td>
                                    <td style="border-left: none; border-right: none;">:</td>
                                    <td style="border-top: none; border-left: none;  border-right: none;">081247028041
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" border-right: none; padding: 3px;"><strong>No
                                            Pelanggan</strong><br /><em>Acc. Number</em></td>
                                    <td style="border-left: none; border-right: none;">:</td>
                                    <td style="border-left: none;  border-right: none;">2204062</td>
                                </tr>

                            </table>
                        </td>
                        <td style="border: none; width: 33%;">
                            <table style="width: 100%;  border: none;">
                                <tr>
                                    <td style="height: 98px; padding: 3px; vertical-align: top;">
                                        <div style="font-weight: bold;">Alamat Pemasangan /<br><u><em>Installation
                                                    Address</em></u> :</div>
                                        <div style="margin-top:8px; margin-top:12px;">
                                            Asmil Yonif 413
                                            Palur, Mojolaban, Sukoharjo, Jawa Tengah, 57554 </div>
                                    </td>
                                </tr>

                            </table>

                        </td>


                    </tr>
                </table>
            </div> --}}


            <div style="margin-top: 15px">
                <table style="width: 100%; border: none;">
                    @foreach ($keluar as $keluar)
                        <tr>
                            <td style="width: 20%; height: 30px; padding: 3px;"><strong>Nama Barang</strong><br></td>
                            <td style="width: 80%; padding: 3px; text-align: left">{{ $keluar->nama }}</em></td>
                        </tr>
                        <tr>
                            <td style="width: 20%; height: 30px; padding: 3px;"><strong>Team teknisi</strong><br></td>
                            <td style="width: 80%; padding: 3px; text-align: left">{{ $keluar->team }}</em></td>
                        </tr>
                        <tr>
                            <td style="width: 20%; height: 30px; padding: 3px;"><strong>Jumlah Barang
                                    Keluar</strong><br>
                            </td>
                            <td style="width: 80%; padding: 3px; text-align: left">{{ $keluar->qty }}</td>
                        </tr>
                        <tr>
                            <td style="width: 20%; height: 30px; padding: 3px;"><strong>Keterangan</strong><br></td>
                            <td style="width: 80%; padding: 3px; text-align: left">{{ $keluar->keterangan }}</td>
                        </tr>
                    @endforeach
                </table>
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
