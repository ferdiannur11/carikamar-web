 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Tambah User</h1>
                 </div>
                 <!-- <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Dashboard v1</li>
                     </ol>
                 </div>/.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="box">
                 <div class="box-header with-border">
                     <div class="row">
                         <div class="col-12">
                             <form action="<?php echo site_url('Welcome/AddUser'); ?>" method="post" role="form">
                                 <div class="card-body">

                                     <div class="form-group">
                                         <label>Username</label>
                                         <input name="username" type="text" class="form-control" placeholder="Username">
                                     </div>
                                     <div class="form-group">
                                         <label>Password</label>
                                         <input name="password" type="password" class="form-control" placeholder="Password">
                                     </div>
                                     <div class="form-group">
                                         <label>Fullname</label>
                                         <input name="fullname" type="text" class="form-control" placeholder="Fullname">
                                     </div>
                                     <div class="form-group">
                                         <label>ID Level</label>
                                         <select name="id_level" class="form-control ">
                                             <option value="">
                                                 Pilih ID Level
                                             </option>
                                             <option value="1">
                                                 Admin
                                             </option>
                                             <option value="2">
                                                 Warga
                                             </option>
                                             <option value="3">
                                                 Ketua RT
                                             </option>
                                             <option value="4">
                                                 Anonim
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>No HP</label>
                                         <input name="nohp" type="number" class="form-control" placeholder="No HP">
                                     </div>
                                     <div class="form-group">
                                         <label>Email</label>
                                         <input name="email" type="email" class="form-control" placeholder="Email">
                                     </div>
                                     <div class="form-group">
                                         <label>Status</label>
                                         <select name="status" class="form-control ">
                                             <option value="">
                                                 Pilih Status
                                             </option>
                                             <option value="0">
                                                 Pending
                                             </option>
                                             <option value="1">
                                                 Aktif
                                             </option>
                                             <option value="2">
                                                 Tidak Aktif
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Provinsi</label>
                                         <select name="prov_id" class="form-control ">
                                             <option selected disabled>Pilih Provinsi</option>
                                             <?php
                                                foreach ($provinsi as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['prov_id']; ?>"><?php echo $ReadDS['prov_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Kota</label>
                                         <select name="city_id" class="form-control ">
                                             <option selected disabled>Pilih Kota</option>
                                             <?php
                                                foreach ($kota as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['city_id']; ?>"><?php echo $ReadDS['city_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Kecamatan</label>
                                         <select name="dis_id" class="form-control ">
                                             <option selected disabled>Pilih Kecamatan</option>
                                             <?php
                                                foreach ($kecamatan as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['dis_id']; ?>"><?php echo $ReadDS['dis_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Kelurahan</label>
                                         <select name="subdis_id" class="form-control ">
                                             <option selected disabled>Pilih Kelurahan</option>
                                             <?php
                                                foreach ($kelurahan as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['subdis_id']; ?>"><?php echo $ReadDS['subdis_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Kode Pos</label>
                                         <select name="postal_id" class="form-control ">
                                             <option selected disabled>Pilih Kode Pos</option>
                                             <?php
                                                foreach ($kodepos as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['postal_id']; ?>"><?php echo $ReadDS['postal_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Alamat Lengkap</label>
                                         <input name="alamat_lengkap" type="text" class="form-control" placeholder="Alamat Lengkap">
                                     </div>
                                     <div class="form-group">
                                         <label>Pendidikan</label>
                                         <select name="id_pendidikan" class="form-control ">
                                             <option value="">
                                                 Pilih Sekolah
                                             </option>
                                             <option value="1">
                                                 Tidak Sekolah
                                             </option>
                                             <option value="2">
                                                 SD
                                             </option>
                                             <option value="3">
                                                 SMP
                                             </option>
                                             <option value="4">
                                                 SMA/SMK
                                             </option>
                                             <option value="5">
                                                 D1
                                             </option>
                                             <option value="6">
                                                 D2
                                             </option>
                                             <option value="7">
                                                 D3
                                             </option>
                                             <option value="8">
                                                 S1
                                             </option>
                                             <option value="9">
                                                 S2
                                             </option>

                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Status Pernikahan</label>
                                         <select name="id_status_pernikahan" class="form-control ">
                                             <option value="">
                                                 Pilih Status
                                             </option>
                                             <option value="1">
                                                 Single/Belum Nikah
                                             </option>
                                             <option value="2">
                                                 Sudah Menikah
                                             </option>
                                             <option value="3">
                                                 Cerai
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Status Tinggal</label>
                                         <select name="id_status_tinggal" class="form-control ">
                                             <option value="">
                                                 Pilih Status
                                             </option>
                                             <option value="1">
                                                 Kontrak/Kos
                                             </option>
                                             <option value="2">
                                                 Rumah Orang Tua
                                             </option>
                                             <option value="3">
                                                 Rumah Sendiri
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Agama</label>
                                         <select name="id_agama" class="form-control ">
                                             <option value="">
                                                 Pilih Status
                                             </option>
                                             <option value="1">
                                                 Islam
                                             </option>
                                             <option value="2">
                                                 Budha
                                             </option>
                                             <option value="3">
                                                 Katholik
                                             </option>
                                             <option value="4">
                                                 Protestan
                                             </option>
                                             <option value="5">
                                                 Konghuchu
                                             </option>
                                             <option value="6">
                                                 Hindu
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>NIK</label>
                                         <input name="nik" type="number" class="form-control" placeholder="Nik">
                                     </div>
                                     <div class="form-group">
                                         <label>Tanggal Lahir</label>
                                         <input name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                                     </div>
                                     <div class="form-group">
                                         <label>Tempat Kota Lahir</label>
                                         <select name="city_id" class="form-control ">
                                             <option selected disabled>Pilih Kota</option>
                                             <?php
                                                foreach ($kota as $ReadDS) {
                                                ?>
                                                 <option value="<?php echo $ReadDS['city_id']; ?>"><?php echo $ReadDS['city_name']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Blok</label>
                                         <input name="blok" type="text" class="form-control" placeholder="Blok">
                                     </div>
                                     <div class="form-group">
                                         <label>RW</label>
                                         <input name="rw" type="text" class="form-control" placeholder="Rw">
                                     </div>
                                     <div class="form-group">
                                         <label>Jenis Kelamin</label>
                                         <select name="jnskel" class="form-control ">
                                             <option value="">
                                                 Pilih Jenis Kelamin
                                             </option>
                                             <option value="1">
                                                 Pria
                                             </option>
                                             <option value="2">
                                                 Wanita
                                             </option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label>Pekerjaan</label>
                                         <select name="id_jenis_pekerjaan" class="form-control " onChange="NamaPekerjaan(this)" onclick="NamaPekerjaan(this)">
                                             <option selected disabled>Pilih Jenis Pekerjaan</option>
                                             <?php
                                                foreach ($pekerjaan as $ReadDS) {
                                                ?>
                                                 <option name="<?php echo $ReadDS['nama_pekerjaan']; ?>" value="<?php echo $ReadDS['id']; ?>"><?php echo $ReadDS['nama_pekerjaan']; ?></option>
                                             <?php
                                                }
                                                ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <!-- <label>Nama Jenis Pekerjaan</label> -->
                                         <input hidden name="nama_jenis_pekerjaan" type="text" class="form-control" placeholder="Nama Jenis Pekerjaan">
                                     </div>


                                     <input type="hidden" name="user_id" id="user_id" value="" class="form-control">
                                     <input type="hidden" name="userlogin" id="userlogin" value="" class="form-control">

                                     <div class="form-group">
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
     </section>
 </div>

 <script>

    function NamaPekerjaan(sel){
        
        var pekerjaan = document.getElementsByName("nama_jenis_pekerjaan")[0].value = sel.options[sel.selectedIndex].text;
    }
     window.onload = function() {
         /** Your code here. **/

         if (localStorage.getItem("user_id") != null) {
             var userID = document.getElementsByName("user_id");
             var username = document.getElementsByName("userlogin");
             for (var x = 0; x < userID.length; x++) // comparison should be "<" not "<="
             {
                 userID[x].value = localStorage.getItem("user_id");
             }

             for (var x = 0; x < username.length; x++) // comparison should be "<" not "<="
             {
                 username[x].value = localStorage.getItem("username");
             }

         }


     }
 </script>