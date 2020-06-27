

    

                <li class="">
                    <a href="#" class="text-center" style="font-size: 1.5em;background-color: #8bf79cc4;font-weight: 600;" >
                        <span class="title">
                        <?=$level;?>
                        </span>
                    </a>
                </li>
                <li ><a href="<?php echo base_url('welcome') ?>"><i class="fa fa-tachometer"></i><span class="title">Dashboard</span></a></li>
                
                <li id="master" class="">
                    <a href='javascript:void(0)'>
                        <i class='fa fa-bars'></i>
                        <span class='title'> Master </span>
                        <i class='fa fa-angle-down' aria-hidden='true'></i>
                        <span class='selected'></span>
                    </a>
                    <ul class='sub-menu '>
                        <li id="gelombang" class="">
                            <a href="<?=site_url('gelombang');?>"><i class='fa fa-cubes'></i><span class='title'> Gelombang</a></span>
                        </li>
                        <li id="jurusan">
                            <a href="<?=site_url('jurusan');?>"><i class='fa fa fa-th-large'></i><span class='title'> Jurusan</a></span>
                        </li>
                        <li id="kelas">
                            <a href="<?=site_url('kelas');?>"><i class='fa fa-building'></i><span class='title'> Kelas</a></span>
                        </li >
                        <li id="potongan">
                            <a href="<?=site_url('potongan');?>"><i class='fa fa-ticket'></i><span class='title'> Potongan</a></span>
                        </li>
                        <li id="users">
                            <a href="<?=site_url('users');?>"><i class='fa fa fa-users'></i><span class='title'> Data Personal</a></span>
                        </li>
                        <li id="siswa">
                            <a href="<?=site_url('siswa');?>"><i class='fa fa-user-circle-o'></i><span class='title'> Data Siswa</a></span>
                        </li>

                    </ul>
                </li> 
                <li id="informasi">
                    <a href='javascript:void(0)'>
                        <i class='fa fa-info'></i>
                        <span class='title'> Informasi </span>
                        <i class='fa fa-angle-down' aria-hidden='true'></i>
                        <span class='selected'></span>
                    </a>
                    <ul class='sub-menu'>
                        <li id="pengumuman">
                            <a href="<?=base_url('pengumuman');?>"><i class='fa fa-book'></i><span class='title'> pengumuman</a></span>
                        </li>
                        <li id="validasi">
                            <a href="<?=base_url();?>validasi"><i class='fa fa-id-card'></i><span class='title'> Validasi</a></span>
                        </li>
                        <li id="pilihkelas">
                            <a href="<?=base_url()?>pilihkelas"><i class='fa fa-id-badge'></i><span class='title'> Pilih Kelas</a></span>
                        </li>
                        

                    </ul>
                </li> 
                <li>
                    <a href='javascript:void(0)'>
                        <i class='fa fa-mortar-board'></i>
                        <span class='title'> Akademik </span>
                        <i class='fa fa-angle-down' aria-hidden='true'></i>
                        <span class='selected'></span>
                    </a>
                    <ul class='sub-menu'>
                        <li>
                            <a href="#"><i class='fa fa-file-o'></i><span class='title'> Buat Mapel</a></span>
                        </li>
                        <li>
                            <a href="#"><i class='fa fa-file-text'></i><span class='title'> Buat Soal</a></span>
                        </li>
                        <li>
                            <a href="#"><i class='fa fa-file-zip-o'></i><span class='title'> Atur Ujian</a></span>
                        </li>
                        <li>
                            <a href="#"><i class='fa fa-file-code-o'></i><span class='title'> Rekap Nilai</a></span>
                        </li>
                        

                    </ul>
                </li> 
                <li>
                    <a href='javascript:void(0)'>
                        <i class='fa fa-comments'></i>
                        <span class='title'> Wawancara </span>
                        <i class='fa fa-angle-down' aria-hidden='true'></i>
                        <span class='selected'></span>
                    </a>
                    <ul class='sub-menu'>
                        <li>
                            <a href="#"><i class='fa fa-book'></i><span class='title'> Buat Wawancara</a></span>
                        </li>
                        <li>
                            <a href="#"><i class='fa fa-files-o'></i><span class='title'> Hasil Wawancara</a></span>
                        </li>
                        
                    </ul>
                </li> 
                <li>
                    <a href='javascript:void(0)'>
                        <i class='fa fa-credit-card'></i>
                        <span class='title'> Pembayaran </span>
                        <i class='fa fa-angle-down' aria-hidden='true'></i>
                        <span class='selected'></span>
                    </a>
                    <ul class='sub-menu'>
                        <li>
                            <a href="#"><i class='fa fa-book'></i><span class='title'> Siswa Mutasi</a></span>
                        </li>
                        <li>
                            <a href="#"><i class='fa fa-keyboard-o'></i><span class='title'> Biaya Pendaftaran</a></span>
                        </li>
                        <li>
                            <a href="#"><i class='fa fa-keyboard-o'></i><span class='title'> Biaya Pengembangan</a></span>
                        </li>
                        <li>
                            <a href="#"><i class='fa fa-keyboard-o'></i><span class='title'> Biaya Seragam</a></span>
                        </li>
                        <li>
                            <a href="#"><i class='fa fa-keyboard-o'></i><span class='title'> Biaya SPP</a></span>
                        </li>
                        <li>
                            <a href="#"><i class='fa fa-keyboard-o'></i><span class='title'> Transaksi Pemabayaran</a></span>
                        </li>
                        
                    </ul>
                </li> 
                <li>
                    <a href='javascript:void(0)'>
                        <i class='fa fa-wrench'></i>
                        <span class='title'> Pengaturan </span>
                        <i class='fa fa-angle-down' aria-hidden='true'></i>
                        <span class='selected'></span>
                    </a>
                    <ul class='sub-menu'>
                        <li>
                            <a href="#"><i class='fa fa-book'></i><span class='title'> Backup dan Restore</a></span>
                        </li>
                        
                    </ul>
                </li> 