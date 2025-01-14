@extends('layouts/main')

@section('isihalaman')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Perusahaan Bongkar Muat</h1>
        </div>
    </div>
    <!-- Page Header End -->


    {{-- Tabel Konten --}}
    <div style="margin-left: 20%">
        <table cellspacing="0" cellpadding="0" style="width:562.05pt; border-collapse:collapse; float:left;">
            <tbody>
                <tr style="height:26.7pt;">
                    <td style="width:13.25pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-left:0.05pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">No.</span></strong></p>
                    </td>
                    <td style="width:44.9pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-right:0.3pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Nama</span></strong></p>
                        <p style="margin-top:0pt; margin-left:0.95pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Perusahaan</span></strong></p>
                    </td>
                    <td style="width:43.95pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Jenis Perusahaan</span></strong></p>
                    </td>
                    <td style="width:47.3pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-right:0.3pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">NIB</span></strong></p>
                    </td>
                    <td style="width:18.2pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-left:1.65pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">KBLI</span></strong></p>
                    </td>
                    <td style="width:39.3pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-right:0.35pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Sektor</span></strong></p>
                    </td>
                    <td style="width:42.9pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-left:1.85pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Modal Usaha</span></strong></p>
                    </td>
                    <td style="width:22.4pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Luas Lahan</span></strong></p>
                    </td>
                    <td style="width:32.8pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Jenis Kegiatan</span></strong></p>
                    </td>
                    <td style="width:36.85pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-right:0.2pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Alamat</span></strong></p>
                    </td>
                    <td style="width:27.45pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-left:2.8pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Resiko</span></strong></p>
                    </td>
                    <td style="width:35.75pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:top; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-right:0.3pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Nama</span></strong></p>
                        <p style="margin-top:0pt; margin-left:7.25pt; margin-bottom:0pt; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Tenaga</span></strong></p>
                        <p style="margin-top:0pt; margin-right:0.05pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Ahli</span></strong></p>
                    </td>
                    <td style="width:48.45pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-right:0.25pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">Pendidikan</span></strong></p>
                    </td>
                    <td style="width:86.05pt; border:1.5pt solid #ffffff; padding-top:3.2pt; vertical-align:middle; background-color:#4472c4;">
                        <p style="margin-top:0pt; margin-left:0.45pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:9pt;"><strong><span style="color:#ffffff;">No. Surat KSOP</span></strong></p>
                    </td>
                </tr>
                <tr style="height:70.3pt;">
                    <td style="width:13.25pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-left:3.8pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">1</p>
                    </td>
                    <td style="width:44.9pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas (PT)</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">SUBANG</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">SAMUDERA</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">PELABUHAN</p>
                    </td>
                    <td style="width:43.95pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Badan Usaha</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas</p>
                    </td>
                    <td style="width:47.3pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">0810210034591</p>
                    </td>
                    <td style="width:18.2pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-left:2.8pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">52240</p>
                    </td>
                    <td style="width:39.3pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Perhubungan</p>
                    </td>
                    <td style="width:42.9pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Rp300,000,000</p>
                    </td>
                    <td style="width:22.4pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">1000</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">M&sup2;</p>
                    </td>
                    <td style="width:32.8pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Utama</p>
                    </td>
                    <td style="width:36.85pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">JALAN BALI</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">KOMPLEK</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">PELABUHAN</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">II CIREBON</p>
                    </td>
                    <td style="width:27.45pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Menengah</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tinggi</p>
                    </td>
                    <td style="width:35.75pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Suradi</p>
                    </td>
                    <td style="width:48.45pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Pendidikan dan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Latihan Ahli</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Pelayaran</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Ketatalaksanaan</p>
                    </td>
                    <td style="width:86.05pt; border-top:1.5pt solid #ffffff; border-right:1.5pt solid #4472c4; border-left:1.5pt solid #4472c4; border-bottom:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top; background-color:#ffffff;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">AL.003/1/2/KSOP-Cbn-2022</p>
                    </td>
                </tr>
                <tr style="height:71.3pt;">
                    <td style="width:13.25pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:3.8pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">2</p>
                    </td>
                    <td style="width:44.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas (PT)</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">PBM SUBANG</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">SEJAHTERA</p>
                    </td>
                    <td style="width:43.95pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Badan Usaha</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas</p>
                    </td>
                    <td style="width:47.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">2609220060004</p>
                    </td>
                    <td style="width:18.2pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:2.8pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">52240</p>
                    </td>
                    <td style="width:39.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Perhubungan</p>
                    </td>
                    <td style="width:42.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Rp2,200,000,000</p>
                    </td>
                    <td style="width:22.4pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">200 M&sup2;</p>
                    </td>
                    <td style="width:32.8pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Utama</p>
                    </td>
                    <td style="width:36.85pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Jalan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Kawasan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Marunda</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Center</p>
                    </td>
                    <td style="width:27.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Menengah</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tinggi</p>
                    </td>
                    <td style="width:35.75pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Muzammil</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Akbar</p>
                    </td>
                    <td style="width:48.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Diploma IV</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:98%; font-size:7pt;">Ketatalaksanaan Pelayaran Niaga dan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Kepelabuhanan</p>
                    </td>
                    <td style="width:86.05pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">AL.003/1/11/KSOP.Mrd-</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">2022</p>
                    </td>
                </tr>
                <tr style="height:101.25pt;">
                    <td style="width:13.25pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:3.8pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">3</p>
                    </td>
                    <td style="width:44.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas (PT)</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">MULIA</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">BERSAMA MARITIM</p>
                    </td>
                    <td style="width:43.95pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Badan Usaha</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas</p>
                    </td>
                    <td style="width:47.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">1210220078854</p>
                    </td>
                    <td style="width:18.2pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:2.8pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">52240</p>
                    </td>
                    <td style="width:39.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Perhubungan</p>
                    </td>
                    <td style="width:42.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Rp1,200,000,000</p>
                    </td>
                    <td style="width:22.4pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">120 M&sup2;</p>
                    </td>
                    <td style="width:32.8pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Utama</p>
                    </td>
                    <td style="width:36.85pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Ruko Rose</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Garden, Grand</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Galaxy City,</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Jalan Rose</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Garden 5</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:101%; font-size:6pt;">Nomor 101, RT/RW:</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">002/017</p>
                    </td>
                    <td style="width:27.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Menengah</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tinggi</p>
                    </td>
                    <td style="width:35.75pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Bayu Wisnu</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Aji</p>
                    </td>
                    <td style="width:48.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:98%; font-size:7pt;">D III Pendidikan dan Pelatihan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Ahli Nautika Tingkat III</p>
                    </td>
                    <td style="width:86.05pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">AL.003/1/13/KSOP-Mrd-</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">2022</p>
                    </td>
                </tr>
                <tr style="height:71.25pt;">
                    <td style="width:13.25pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:3.8pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">4</p>
                    </td>
                    <td style="width:44.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:101%; font-size:6pt;">Terbatas (PT) ECHIBI</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">LOGISTIK</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">UTAMA</p>
                    </td>
                    <td style="width:43.95pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Badan Usaha</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan Terbatas</p>
                    </td>
                    <td style="width:47.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">0202220008369</p>
                    </td>
                    <td style="width:18.2pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:2.8pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">52240</p>
                    </td>
                    <td style="width:39.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Perhubungan</p>
                    </td>
                    <td style="width:42.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Rp2,200,000,000</p>
                    </td>
                    <td style="width:22.4pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">200 M&sup2;</p>
                    </td>
                    <td style="width:32.8pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Utama</p>
                    </td>
                    <td style="width:36.85pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Jalan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:101%; font-size:6pt;">Kawasan Marunda</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Center</p>
                    </td>
                    <td style="width:27.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Menengah</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tinggi</p>
                    </td>
                    <td style="width:35.75pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Muzammil</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Akbar</p>
                    </td>
                    <td style="width:48.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Diploma IV</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:98%; font-size:7pt;">Ketatalaksanaan Pelayaran Niaga dan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Kepelabuhanan</p>
                    </td>
                    <td style="width:86.05pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">AL.003/1/11/KSOP.Mrd-</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">2022</p>
                    </td>
                </tr>
                <tr style="height:62.35pt;">
                    <td style="width:13.25pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:3.8pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">5</p>
                    </td>
                    <td style="width:44.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas (PT)</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">ARBAA</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">DULUR</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">SAWARGI</p>
                    </td>
                    <td style="width:43.95pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Badan Usaha</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan Terbatas</p>
                    </td>
                    <td style="width:47.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">1219000320792</p>
                    </td>
                    <td style="width:18.2pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">52240</p>
                    </td>
                    <td style="width:39.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Perhubungan</p>
                    </td>
                    <td style="width:42.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Rp335,000,000</p>
                    </td>
                    <td style="width:22.4pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">200 M&sup2;</p>
                    </td>
                    <td style="width:32.8pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Utama</p>
                    </td>
                    <td style="width:36.85pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:101%; font-size:6pt;">Komplek Pelabuhan Jl.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Lombok No.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">73 RT 003 RW</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">006</p>
                    </td>
                    <td style="width:27.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Menengah</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tinggi</p>
                    </td>
                    <td style="width:35.75pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Muchsin</p>
                    </td>
                    <td style="width:48.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Badan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Pendidikan dan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Pelatihan Ahli Pelayaran</p>
                    </td>
                    <td style="width:86.05pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">AL.003/1/1/KSOP-Crb/2023</p>
                    </td>
                </tr>
                <tr style="height:85.75pt;">
                    <td style="width:13.25pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:3.8pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">6</p>
                    </td>
                    <td style="width:44.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas (PT)</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:101%; font-size:6pt;">MAKMUR MANDIRI</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">SEJAHTERA</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">ABADI</p>
                    </td>
                    <td style="width:43.95pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Badan Usaha</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan Terbatas</p>
                    </td>
                    <td style="width:47.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">1245000122273</p>
                    </td>
                    <td style="width:18.2pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">52240</p>
                    </td>
                    <td style="width:39.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Perhubungan</p>
                    </td>
                    <td style="width:42.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Rp4,350,000,000</p>
                    </td>
                    <td style="width:22.4pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">2000</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">M&sup2;</p>
                    </td>
                    <td style="width:32.8pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Utama</p>
                    </td>
                    <td style="width:36.85pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Jalan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Kawasan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Marunda</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Center , Jalan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Marunda</p>
                        <p style="margin-top:0pt; margin-right:1.4pt; margin-bottom:0pt; line-height:101%; font-size:6pt;">Makmur Blok B No 21.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tarumajaya</p>
                    </td>
                    <td style="width:27.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Menengah</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tinggi</p>
                    </td>
                    <td style="width:35.75pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Heddy P</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Arindra</p>
                    </td>
                    <td style="width:48.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Dirjen Hubla Ahli</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Nautika Tngkat</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">II</p>
                    </td>
                    <td style="width:86.05pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">AL.003/1/10/KSOP.Mrd/2022</p>
                    </td>
                </tr>
                <tr style="height:109.2pt;">
                    <td style="width:13.25pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:3.8pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">7</p>
                    </td>
                    <td style="width:44.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas (PT)</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">PATIMBAN</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">JASA PRIMA</p>
                    </td>
                    <td style="width:43.95pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Badan Usaha</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan Terbatas</p>
                    </td>
                    <td style="width:47.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">1101230046406</p>
                    </td>
                    <td style="width:18.2pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:2.8pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">52240</p>
                    </td>
                    <td style="width:39.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Perhubungan</p>
                    </td>
                    <td style="width:42.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Rp4,000,000,000</p>
                    </td>
                    <td style="width:22.4pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">100 M&sup2;</p>
                    </td>
                    <td style="width:32.8pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Utama</p>
                    </td>
                    <td style="width:36.85pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Jl. Gempol</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">No.88 RT/RW</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:101%; font-size:6pt;">003/001 Desa Gempol, Kec.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Pusakanagara,</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Kab. Subang Jawa Barat</p>
                    </td>
                    <td style="width:27.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Menengah</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tinggi</p>
                    </td>
                    <td style="width:35.75pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Kusmagandi</p>
                    </td>
                    <td style="width:48.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">AMI</p>
                    </td>
                    <td style="width:86.05pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">AL.001/1/25/KSOP-</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">PMB/2023</p>
                    </td>
                </tr>
                <tr style="height:54.35pt;">
                    <td style="width:13.25pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:3.8pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">8</p>
                    </td>
                    <td style="width:44.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas (PT)</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">ATTHA</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">DHARMA KARANA</p>
                    </td>
                    <td style="width:43.95pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Badan Usaha</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan Terbatas</p>
                    </td>
                    <td style="width:47.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">0606230066401</p>
                    </td>
                    <td style="width:18.2pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:2.8pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">52240</p>
                    </td>
                    <td style="width:39.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Perhubungan</p>
                    </td>
                    <td style="width:42.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Rp1,469,000,000</p>
                    </td>
                    <td style="width:22.4pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">200 M&sup2;</p>
                    </td>
                    <td style="width:32.8pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Utama</p>
                    </td>
                    <td style="width:36.85pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Ruka Cirebon</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Maritim Center</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">No. 1 J</p>
                    </td>
                    <td style="width:27.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Menengah</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tinggi</p>
                    </td>
                    <td style="width:35.75pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Syaiful</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Syahrir</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Tanjung</p>
                    </td>
                    <td style="width:48.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">AMN Cilacap</p>
                    </td>
                    <td style="width:86.05pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">AL.003/1/4/KSOP.Crb-2023</p>
                    </td>
                </tr>
                <tr style="height:54.35pt;">
                    <td style="width:13.25pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:3.8pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">9</p>
                    </td>
                    <td style="width:44.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas (PT)</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">BANDAR</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">KRIDA JALA</p>
                    </td>
                    <td style="width:43.95pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Badan Usaha</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan Terbatas</p>
                    </td>
                    <td style="width:47.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">1209000122102</p>
                    </td>
                    <td style="width:18.2pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">52240</p>
                    </td>
                    <td style="width:39.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Perhubungan</p>
                    </td>
                    <td style="width:42.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Rp</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">2.000.000.000</p>
                    </td>
                    <td style="width:22.4pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">780 M&sup2;</p>
                    </td>
                    <td style="width:32.8pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Utama</p>
                    </td>
                    <td style="width:36.85pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Kab. Subang</p>
                    </td>
                    <td style="width:27.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Menengah</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tinggi</p>
                    </td>
                    <td style="width:35.75pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">-</p>
                    </td>
                    <td style="width:48.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">-</p>
                    </td>
                    <td style="width:86.05pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">-</p>
                    </td>
                </tr>
                <tr style="height:91.85pt;">
                    <td style="width:13.25pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:1.7pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">10</p>
                    </td>
                    <td style="width:44.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas (PT)</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">PERUSAHAAN</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">BONGKAR</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">MUAT ALFA</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">BUANA</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">SEJAHTERA</p>
                    </td>
                    <td style="width:43.95pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Badan Usaha</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas</p>
                    </td>
                    <td style="width:47.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">2209210042684</p>
                    </td>
                    <td style="width:18.2pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:2.8pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">52240</p>
                    </td>
                    <td style="width:39.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Perhubungan</p>
                    </td>
                    <td style="width:42.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Rp</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">4.000.000.000</p>
                    </td>
                    <td style="width:22.4pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">300 M&sup2;</p>
                    </td>
                    <td style="width:32.8pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Utama</p>
                    </td>
                    <td style="width:36.85pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Dusun</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Mekarjaya RT.</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">008 RW. 002</p>
                    </td>
                    <td style="width:27.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Menengah</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tinggi</p>
                    </td>
                    <td style="width:35.75pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Effendi</p>
                    </td>
                    <td style="width:48.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Dirjen Hubla Ahli</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Nautika Tngkat I</p>
                    </td>
                    <td style="width:86.05pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">AL.006/50/9/KSOP-</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">PMB/2023</p>
                    </td>
                </tr>
                <tr style="height:91.85pt;">
                    <td style="width:13.25pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:1.65pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">11</p>
                    </td>
                    <td style="width:44.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Terbatas (PT)</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">SINAR</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">BERLIAN</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">PANTURA</p>
                    </td>
                    <td style="width:43.95pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Badan Usaha</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Perseroan Terbatas</p>
                    </td>
                    <td style="width:47.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">0267010141638</p>
                    </td>
                    <td style="width:18.2pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-left:2.8pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">52240</p>
                    </td>
                    <td style="width:39.3pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Perhubungan</p>
                    </td>
                    <td style="width:42.9pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Rp 500.000.000</p>
                    </td>
                    <td style="width:22.4pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">100 M&sup2;</p>
                    </td>
                    <td style="width:32.8pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Utama</p>
                    </td>
                    <td style="width:36.85pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Jl. Pantura</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">KM.27 No. 168</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">RT.001</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">RW.001</p>
                    </td>
                    <td style="width:27.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:6pt;">Menengah</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:6pt;">Tinggi</p>
                    </td>
                    <td style="width:35.75pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Rd. Deddy</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:108%; font-size:7pt;">Hernandang</p>
                    </td>
                    <td style="width:48.45pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Dirjen Hubla</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">Mualim II</p>
                    </td>
                    <td style="width:86.05pt; border:1.5pt solid #4472c4; padding-top:3.2pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">AL.001/2/17/KSOP-</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:7pt;">PMB/2023</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p style="margin-top:0pt; margin-left:113.85pt; margin-bottom:0pt;"><br style="page-break-before:always; clear:both;"></p>
    </div>
    <p><br style="page-break-before:always; clear:both; mso-break-type:section-break;"></p>
    <div>
        <p style="margin-top:0pt; margin-bottom:0pt;">&nbsp;</p>
    </div>
    {{-- end Tabel Konten --}}

    
@endsection