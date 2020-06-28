
    <li class="">
        <a href="#" class="text-center" style="font-size: 1.5em;background-color: #8bf79cc4;font-weight: 600;" >
            <span class="title">
            Personal
            </span>
        </a>
    </li>
    <li class="active"><a href="<?php echo base_url('welcome') ?>"><i class="fa fa-tachometer"></i><span class="title">Dashboard</span></a></li>
    
    <li id="informasi">
        <a href='javascript:void(0)'>
            <i class='fa fa-info'></i>
            <span class='title'> Informasi </span>
            <i class='fa fa-angle-down' aria-hidden='true'></i>
            <span class='selected'></span>
        </a> 
        <ul class='sub-menu'>
            <li id="siswa">
                <a href="<?=site_url('siswa');?>"><i class='fa fa-user-circle-o'></i><span class='title'> Data Siswa</a></span>
            </li>
            <li id="pengumuman">
                <a href="<?=base_url('pengumuman');?>"><i class='fa fa-book'></i><span class='title'> Pengumuman</a></span>
            </li>
            <li id="validasi">
                <a href="<?=base_url('validasi')?>"><i class='fa fa-id-card'></i><span class='title'> Validasi</a></span>
            </li>
            <li id="pilihkelas">
                <a href="<?=base_url('pilihkelas')?>"><i class='fa fa-id-badge'></i><span class='title'> Pilih Kelas</a></span>
            </li>
            

        </ul>
    </li> 
    <li id="akademik">
        <a href='javascript:void(0)'>
            <i class='fa fa-mortar-board'></i>
            <span class='title'> Akademik </span>
            <i class='fa fa-angle-down' aria-hidden='true'></i>
            <span class='selected'></span>
        </a>
        <ul class='sub-menu'>
            <li id="buat-soal">
                <a href="<?=base_url('Buat_soal')?>"><i class='fa fa-file-text'></i><span class='title'> Buat Soal</a></span>
            </li>
            <li id="rekap-nilai">
                <a href="<?=base_url('Rekap_nilai')?>"><i class='fa fa-file-code-o'></i><span class='title'> Rekap Nilai</a></span>
            </li>
            

        </ul>
    </li> 
    <li id="wawancara">
        <a href='javascript:void(0)'>
            <i class='fa fa-comments'></i>
            <span class='title'> Wawancara </span>
            <i class='fa fa-angle-down' aria-hidden='true'></i>
            <span class='selected'></span>
        </a>
        <ul class='sub-menu'>
            <li id="buat-wawancara">
                <a href="<?=base_url()?>Buat_wawancara"><i class='fa fa-book'></i><span class='title'> Buat Wawancara</a></span>
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
                <a href="#"><i class='fa fa-user'></i><span class='title'> Edit Profile</a></span>
            </li>
            
        </ul>
    </li> 