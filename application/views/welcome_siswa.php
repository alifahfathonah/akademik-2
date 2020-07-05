<style>
.baris{
    width: 100%;
    border-top: 4px solid black;
    margin-top: 9px;
}
</style>
<div class="col-md-12">
    <div style="margin-bottom: 10px;"></div>


    <div class="panel panel-success">
        <div class="panel-heading"><i class="fa fa-money"></i>PENGUMUMAN</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                PENGUMUMAN MASUK SEKOLAH
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading"><i class="fa fa-money"></i>DATA SISWA</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <p>  NO PENDAFTARAN....: [2020-01-001] </p>
                    <p>  NAMA SISWA........: [WAHYU ANDHIKA] </p>
                    <p>  NO HP.............: [098745362567] </p>
                    <p>  JENIS KELAMIN.....: [LAKI - LAKI] </p>
                    <p>  ASAL SEKOLAH......: [SMP NEGERI 1 KARANGANYAR] </p>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading"><i class="fa fa-money"></i>HASIL SELEKSI</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <p>  NILAI AKADEMIK     : [80] </p>
                    <p>  HASIL WAWANCARA    : [DITERIMA] </p>
                    <p>  JURUSAN            : [MULTIMEDIA] </p>
                    <p>  KELAS              : [X O1] </p>
                    <p>  WALI KELAS         : [UPI SUNDARI, S.Pd] </p>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading"><i class="fa fa-money"></i>BIAYA</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <!-- <p>  BIAYA PENDAFTARAN     : [Rp.50.000] </p>
                    <p>  BIAYA PENGEMBANGAN    : [Rp.1.500.000] </p>
                    <p>  BIAYA SERAGAM         : [Rp.1.250.000] </p>
                    <p>  BIAYA SPP             : [Rp.2.050.000] </p> -->
                    <p>  TOTAL BIAYA           : [Rp.4.850.000] </p>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading"><i class="fa fa-money"></i>STATISTIK JURUSAN</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr class="active text-danger">
                                <td><strong style="font-size: 1.2em;">TKRO</strong></td>
                            </tr>
                            <tr>
                                <td>KUOTA {<?=kuota('tb_jurusan','2')?>}</td>
                            </tr>
                            <tr>
                                <td>DAFTAR {<?=daftar('tb_pendaftaran','2')?>}</td>
                            </tr>
                            <tr>
                                <td>DU {243}</td>
                            </tr>
                            <tr>
                                <td>MUTASI {3}</td>
                            </tr>
                            <tr>
                                <td>MASUK {240}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-4">
                    
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr class="active text-danger">
                                <td><strong style="font-size: 1.2em;">TBSM</strong></td>
                            </tr>
                            <tr>
                                <td>KUOTA {<?=kuota('tb_jurusan','3')?>}</td>
                            </tr>
                            <tr>
                                <td>DAFTAR {<?=daftar('tb_pendaftaran','3')?>}</td>
                            </tr>
                            <tr>
                                <td>DU {160}</td>
                            </tr>
                            <tr>
                                <td>MUTASI {0}</td>
                            </tr>
                            <tr>
                                <td>MASUK {160}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-4">
                
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr class="active text-danger">
                                <td><strong style="font-size: 1.2em;">TBO</strong></td>
                            </tr>
                            <tr>
                                <td>KUOTA {<?=kuota('tb_jurusan','4')?>}</td>
                            </tr>
                            <tr>
                                <td>DAFTAR {<?=daftar('tb_pendaftaran','4')?>}</td>
                            </tr>
                            <tr>
                                <td>DU {80}</td>
                            </tr>
                            <tr>
                                <td>MUTASI {0}</td>
                            </tr>
                            <tr>
                                <td>MASUK {80}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2">

                <table class="table table-bordered text-center">
                        <tbody>
                            <tr class="active text-danger">
                                <td><strong style="font-size: 1.2em;">TEI</strong></td>
                            </tr>
                            <tr>
                                <td>KUOTA {<?=kuota('tb_jurusan','5')?>}</td>
                            </tr>
                            <tr>
                                <td>DAFTAR {<?=daftar('tb_pendaftaran','5')?>}</td>
                            </tr>
                            <tr>
                                <td>DU {40}</td>
                            </tr>
                            <tr>
                                <td>MUTASI {0}</td>
                            </tr>
                            <tr>
                                <td>MASUK {40}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 ">

                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr class="active text-danger">
                                <td><strong style="font-size: 1.2em;">MM</strong></td>
                            </tr>
                            <tr>
                                <td>KUOTA {<?=kuota('tb_jurusan','6')?>}</td>
                            </tr>
                            <tr>
                                <td>DAFTAR {<?=daftar('tb_pendaftaran','6')?>}</td>
                            </tr>
                            <tr>
                                <td>DU {40}</td>
                            </tr>
                            <tr>
                                <td>MUTASI {0}</td>
                            </tr>
                            <tr>
                                <td>MASUK {40}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var isi = { type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow'],
        datasets: [{
            label: '# of Data',
            data: [12, 19, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
}
var tkro = $('.tkro');
var tkro2 = $('.tkro2');
var tkro3 = $('.tkro3');
var tbsm = $('.tbsm');
var tbsm2 = $('.tbsm2');
var tbsm3 = $('.tbsm3');
var tbo = $('.tbo');
var tbo2 = $('.tbo2');
var tbo3 = $('.tbo3');
var tei = $('.tei');
var tei2 = $('.tei2');
var tei3 = $('.tei3');
var mm = $('.mm');
var mm2 = $('.mm2');
var mm3 = $('.mm3');
var tkro = new Chart(tkro,  isi
);
var tkro2 = new Chart(tkro2,  isi
);
var tkro3 = new Chart(tkro3,  isi
);
var tbsm = new Chart(tbsm,  isi
);
var tbsm2 = new Chart(tbsm2,  isi
);
var tbsm3 = new Chart(tbsm3,  isi
);
var tbo = new Chart(tbo,  isi
);
var tbo2 = new Chart(tbo2,  isi
);
var tbo3 = new Chart(tbo3,  isi
);
var tei = new Chart(tei,  isi
);
var tei2 = new Chart(tei2,  isi
);
var tei3 = new Chart(tei3,  isi
);
var mm = new Chart(mm,  isi
);
var mm2 = new Chart(mm2,  isi
);
var mm3 = new Chart(mm3,  isi
);

</script>