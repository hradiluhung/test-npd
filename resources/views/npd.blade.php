<style>
    html {
        margin: 40px;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: calibri, Helvetica, sans-serif;
        font-size: 16px;
    }

    .table__header {
        padding: 15px;
        text-align: center;
        border: 1px solid black;
        position: relative;
    }

    .table__header h2 {
        font-weight: normal;
        font-size: 20px;
    }

    .table__sub-header {
        border: 1px solid black;
        padding: 15px;
    }

    .table__dana-tujuan {
        padding: 0 15px;
        border: 1px solid black;
    }

    .clearfix::after {
        content: "";
        display: table;
        clear: both;
    }

    .table__dana-tujuan-num {
        float: left;
        border-right: 1px solid black;
        width: 2%;
    }

    .table__dana-tujuan-text {
        float: left;
        padding-left: 20px;
    }

    .table__dana-tujuan-jumlah-dana {
        float: right;
        font-weight: bold;
    }

    .table__sub-heading {
        text-align: center;
        border: 1px solid black;
    }

    .table__content {
        width: 100%;
    }

    .table__content tr,
    .table__content td {
        border: 1px solid black;
    }

    .table__content {
        border: 2px solid black;
    }

    .table__content tr {
        height: 30px;
    }

    .table__content tr.data-bold {
        font-weight: bold;
    }

    .table__content tr.data-highlighted {
        background: lightgrey;
    }

    .table__content td {
        padding: 3px;
    }

    tr.table__content-bottom,
    .table__content-bottom td {
        border: 0;
    }

    .no {
        width: 2%;
    }

    .rek {
        width: 10%;
    }

    .kegiatan {
        width: 18%;
    }

    .perubahan {
        width: 10%;
        text-align: right;
    }

    .pergeseran {
        width: 10%;
        text-align: right;
    }

    .anggaran {
        width: 10%;
        text-align: right;
    }

    .akumulasi {
        width: 10%;
        text-align: right;
    }

    .pencairan {
        width: 10%;
        text-align: right;
    }

    .sisa {
        width: 10%;
        text-align: right;
    }

    .pptk {
        width: 20%;
        text-align: right;
    }

    .table__footer {
        padding-top: 30px;
        width: 100%;
    }

    .table__tanggal {
        width: 100%;
        text-align: center
    }

    .table__sign-container {
        text-align: center;
        clear: right;
        margin-top: 30px;
    }

    .table__sign-left {
        float: left;
        width: 50%;
    }

    .table__sign-right {
        float: right;
        width: 50%;
    }

    .table__sign {
        height: 80px;
    }

</style>

<link rel="stylesheet" href="styles.css" />

<div class="table__container">
    <header class="table__header">
        <h2>NOTA PENCAIRAN DANA(NPD)</h2>
        <p>No.13/NPD/UMUM/III/2022</p>
    </header>
    <div class="table__sub-header">
        <p>BENDAHARA PENGELUARAN SETDA</p>
        <p>SKPD. SEKRETARIAT DAERAH KAB. PURWOREJO</p>
        <p>Supaya mencairkan dana kepada:</p>
    </div>
    <div class="table__dana-tujuan clearfix">
        <div class="table__dana-tujuan-num">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>&nbsp;</div>
        </div>
        <div class="table__dana-tujuan-text">
            <div>Bendahara Pengeluaran Pembantu Bagian Umum</div>
            <div>
                Nomor DPA/A.1/4.01.0.00.0.00.01.000/001/2022 Tanggal 3 Januari
                2022
            </div>
            <div>Tahun Anggaran 2022</div>
            <div>
                Jumlah dana yang diminta<span
                    class="table__dana-tujuan-jumlah-dana"
                    >Rp. 169.133.059</span
                >
            </div>
        </div>
    </div>
    <div class="table__sub-heading">Pembebanan pada kode rekening</div>
    <table class="table__content" style="border-collapse: collapse">
        @if($repeatHeader)
        <thead>
        @endif
            <tr>
                <th>No</th>
                <th>Kode Rek</th>
                <th>Nama Kegiatan dan Nama Rincian Objek Belanja</th>
                <th>Perubahan</th>
                <th>Pergeseran</th>
                <th>Anggaran Murni</th>
                <th>Akumulasi pencairan sebelumnya</th>
                <th>Pencairan saat ini</th>
                <th>Sisa</th>
                <th>Nama PPTK</th>
            </tr>
        @if($repeatHeader)
        </thead>
        @endif
        <tr class="data-bold">
            <td class="no"></td>
            <td class="rek">4</td>
            <td class="kegiatan">Unsur Pendukung Urusan Pemerintahan</td>
            <td class="perubahan">11.917.556.999</td>
            <td class="pergeseran">11.917.556.999</td>
            <td class="anggaran">11.917.556.999</td>
            <td class="akumulasi"></td>
            <td class="pencairan"></td>
            <td class="sisa"></td>
            <td class="pptk"></td>
        </tr>
        <tr class="data-bold">
            <td class="no"></td>
            <td class="rek">4.01</td>
            <td class="kegiatan">Sekretariat Daerah</td>
            <td class="perubahan">11.917.556.999</td>
            <td class="pergeseran">11.917.556.999</td>
            <td class="anggaran">11.917.556.999</td>
            <td class="akumulasi"></td>
            <td class="pencairan"></td>
            <td class="sisa"></td>
            <td class="pptk"></td>
        </tr>
        <tr class="data-bold">
            <td class="no"></td>
            <td class="rek">4.01.01</td>
            <td class="kegiatan">PROGRAM PENUNJANG URUSAN PEMERINTAHAN DAERAH KABUPATEN/KOTA</td>
            <td class="perubahan">11.917.556.999</td>
            <td class="pergeseran">11.917.556.999</td>
            <td class="anggaran">11.917.556.999</td>
            <td class="akumulasi"></td>
            <td class="pencairan"></td>
            <td class="sisa"></td>
            <td class="pptk"></td>
        </tr>
        <tr class="data-bold data-highlighted">
            <td class="no"></td>
            <td class="rek">4.01.01.2.01</td>
            <td class="kegiatan">Perencanaan, Penganggaran, dan Evaluasi Kinerja Perangkat Daerah</td>
            <td class="perubahan">107.700.936</td>
            <td class="pergeseran">107.700.936</td>
            <td class="anggaran">107.700.936</td>
            <td class="akumulasi"></td>
            <td class="pencairan"></td>
            <td class="sisa">107.700.936</td>
            <td class="pptk"></td>
        </tr>
        <tr class="data-bold">
            <td class="no"></td>
            <td class="rek">4.01.01.2.01.01</td>
            <td class="kegiatan">Penyusunan Dokumen Perencanaan Perangkat Daerah</td>
            <td class="perubahan">51.110.736</td>
            <td class="pergeseran">51.110.736</td>
            <td class="anggaran">51.110.736</td>
            <td class="akumulasi">13.824.100</td>
            <td class="pencairan">107.700.936</td>
            <td class="sisa">33.240.636</td>
            <td class="pptk"></td>
        </tr>
        <tr class="">
            <td class="no"></td>
            <td class="rek">5.1.02.01.01.0024</td>
            <td class="kegiatan">Belanja Alat/Bahan untuk Kegiatan Kantor- Alat Tulis Kantor</td>
            <td class="perubahan">8.859.800</td>
            <td class="pergeseran">8.859.800</td>
            <td class="anggaran">8.859.800</td>
            <td class="akumulasi">8.859.800</td>
            <td class="pencairan"></td>
            <td class="sisa">0</td>
            <td class="pptk"></td>
        </tr>
        <tr class="">
            <td class="no"></td>
            <td class="rek">5.1.02.01.01.0024</td>
            <td class="kegiatan">Belanja Alat/Bahan untuk Kegiatan Kantor- Alat Tulis Kantor</td>
            <td class="perubahan">8.859.800</td>
            <td class="pergeseran">8.859.800</td>
            <td class="anggaran">8.859.800</td>
            <td class="akumulasi">8.859.800</td>
            <td class="pencairan"></td>
            <td class="sisa">0</td>
            <td class="pptk"></td>
        </tr>
        <tr class="">
            <td class="no"></td>
            <td class="rek">5.1.02.01.01.0024</td>
            <td class="kegiatan">Belanja Alat/Bahan untuk Kegiatan Kantor- Alat Tulis Kantor</td>
            <td class="perubahan">8.859.800</td>
            <td class="pergeseran">8.859.800</td>
            <td class="anggaran">8.859.800</td>
            <td class="akumulasi">8.859.800</td>
            <td class="pencairan"></td>
            <td class="sisa">0</td>
            <td class="pptk"></td>
        </tr>
        <tr class="">
            <td class="no"></td>
            <td class="rek">5.1.02.01.01.0024</td>
            <td class="kegiatan">Belanja Alat/Bahan untuk Kegiatan Kantor- Alat Tulis Kantor</td>
            <td class="perubahan">8.859.800</td>
            <td class="pergeseran">8.859.800</td>
            <td class="anggaran">8.859.800</td>
            <td class="akumulasi">8.859.800</td>
            <td class="pencairan"></td>
            <td class="sisa">0</td>
            <td class="pptk"></td>
        </tr>
        <tr class="">
            <td class="no"></td>
            <td class="rek">5.1.02.01.01.0024</td>
            <td class="kegiatan">Belanja Alat/Bahan untuk Kegiatan Kantor- Alat Tulis Kantor</td>
            <td class="perubahan">8.859.800</td>
            <td class="pergeseran">8.859.800</td>
            <td class="anggaran">8.859.800</td>
            <td class="akumulasi">8.859.800</td>
            <td class="pencairan"></td>
            <td class="sisa">0</td>
            <td class="pptk"></td>
        </tr>
        <tr class="">
            <td class="no"></td>
            <td class="rek">5.1.02.01.01.0024</td>
            <td class="kegiatan">Belanja Alat/Bahan untuk Kegiatan Kantor- Alat Tulis Kantor</td>
            <td class="perubahan">8.859.800</td>
            <td class="pergeseran">8.859.800</td>
            <td class="anggaran">8.859.800</td>
            <td class="akumulasi">8.859.800</td>
            <td class="pencairan"></td>
            <td class="sisa">0</td>
            <td class="pptk"></td>
        </tr>
        <tr class="">
            <td class="no"></td>
            <td class="rek">5.1.02.01.01.0024</td>
            <td class="kegiatan">Belanja Alat/Bahan untuk Kegiatan Kantor- Alat Tulis Kantor</td>
            <td class="perubahan">8.859.800</td>
            <td class="pergeseran">8.859.800</td>
            <td class="anggaran">8.859.800</td>
            <td class="akumulasi">8.859.800</td>
            <td class="pencairan"></td>
            <td class="sisa">0</td>
            <td class="pptk"></td>
        </tr>
        <tr class="">
            <td class="" colspan="6" style="text-align: center;">JUMLAH</td>
            <td class="akumulasi">818.469.653</td>
            <td class="pencairan">169.133.049</td>
            <td class="sisa"></td>
            <td class="pptk"></td>
        </tr>
        <tr class="">
            <td class="" colspan="10">JUMLAH</td>
        </tr>
        <tr class="">
            <td class="" colspan="10">Potongan-potongan:</td>
        </tr>
        <tr class="">
            <td class="" colspan="2">PPN</td>
            <td class="" >Rp.</td>
            <td class="" colspan="7"></td>
        </tr>
        <tr class="">
            <td class="" colspan="2">PPh 21/22/23</td>
            <td class="" >Rp.</td>
            <td class="" colspan="7"></td>
        </tr>
        <tr class="table__content-bottom">
            <td class="" colspan="2">Jumlah yang diminta</td>
            <td class="" >Rp.</td>
            <td class="" colspan="7"></td>
        </tr>
        <tr class="table__content-bottom">
            <td class="" colspan="2">Potongan-potongan</td>
            <td class="" >Rp.</td>
            <td class="" colspan="7"></td>
        </tr>
        <tr class="table__content-bottom">
            <td class="" colspan="2">Jumlah yang dibayar</td>
            <td class="" >Rp.</td>
            <td class="" colspan="7"></td>
        </tr>
    </table>
    <table class="table__footer">
        <tr class="table__tanggal">
            <td></td>
            <td>
                Purworejo, 07 Maret 2022
            </td>
        </tr>
        <tr class="table__sign-container clearfix">
            <td class="table__sign-left">
                <h4 class="">KEPALA BAGIAN UMUM SETDA PURWOREJO</h4>
                <h4 class="">SELAKU KUASA PENGGUNA ANGGARAN</h4>
                <div class="table__sign"></div>
                <p class="">WORO SATIYO AJI, SE</p>
                <p class="">NIP. 19670813 198709 2 001</p>
            </td>
            <td class="table__sign-right">
                <h4 class="">Bendahara Pengeluaran Pembantu</h4>
                <h4 class="">Bagian Umum Setda</h4>
                <div class="table__sign"></div>
                <p class="">SRI NOVIANTI</p>
                <p class="">NIP. 19781102 199803 2 001</p>
            </td>
        </tr>

    </table>
</div>
