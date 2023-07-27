<?php $this->extend('template'); ?>
<?php $this->section('content'); ?>

<main>
     <div class="title">
          <h1>Edit data Mahasiswa</h1>
     </div>
     <div class="form">
          <form action="/crud/editan" method="post">
               <div class="input">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" value="<?= $edit['nim']; ?>">
               </div>
               <div class="input">
                    <label for="nim">NIM yang baru</label>
                    <input type="text" name="newNim" id="nim">
               </div>
               <div class="input">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" value="<?= $edit['nama']; ?>">
               </div>
               <div class="input">
                    <label for="prodi">Prodi</label>
                    <input type="text" name="prodi" id="prodi" value="<?= $edit['prodi']; ?>">
               </div>
               <div class="input">
                    <label for="univ">Universitas</label>
                    <input type="text" name="univ" id="univ" value="<?= $edit['universitas']; ?>">
               </div>
               <div class="input">
                    <label for="no_hp">Nomor Handphone</label>
                    <input type="text" name="no_hp" id="no_hp" value="<?= $edit['nomor']; ?>">
               </div>
               <div class="button">
                    <button type="submit" value="Submit">Submit</button>
               </div>
          </form>
     </div>
</main>

<?php $this->endsection();
?>