<!-- Modal edit-->
<div class="modal fade" id="edit_<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="edit.php">
          <div class="mb-3">
            <div>
          <input type="hidden" class="form-control"  name="id" value="<?php echo
             $row['id'];?>">
            <label >Nama:</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'];?>">
          </div>

          <div class="mb-3">
            <label >E-mel:</label>
            <input type="text" class="form-control" name="emel" value="<?php echo $row['emel'];?>">
          </div>

          <div class="mb-3">
            <label >No.Telefon:</label>
            <input type="text" class="form-control" name="notel" value="<?php echo $row['notel'];?>">
          </div>

          <div class="mb-3">
            <label >Sesi</label>
            <select name="sesi" id="sesi" class="form-select" value="<?php echo $row['sesi'];?>">
              <option selected><?php echo $row['sesi'];?></option>
              <option >1/2022</option>
              <option >2/2022</option>
              <option >1/2023</option>
              <option>2/2023</option>
            </select>
            
          </div>
          <div class="mb-3">
            <label >program:</label>
            <select name="program" id="program" class="form-select" value="<?php echo $row['program'];?>">
              <option selected><?php echo $row['program'];?></option>
              <option value="3">A12 - Teknologi Rekabentuk Produk Industri</option>
              <option value="1">A17 - Teknologi Minyak Dan Gas (Lukisan Perpaipan)</option>
              <option value="2">F01 - Teknologi Komputer Sistem</option>
              <option value="3">F02 - Teknologi Komputer Rangkaian</option>
              <option value="3">F04 - Teknologi Perisian (Pembangunan Aplikasi Web)</option>
            </select>
            <!-- <input type="text" class="form-control" name="program" value="<?php echo $row['program'];?>"> -->
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="edit" >Kemaskini</button>
      </div>
        </form>
      </div>
      
    </div>
    </div>
  </div>
</div>


<!-- Modal delete -->

<div class="modal fade" id="delete_<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Buang Rekod</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <center><p>Adakah anda pasti ingin membuang rekod &nbsp;<strong><?php echo $row['nama'];?></strong></p></center>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        <!-- <button type="submit" class="btn btn-primary" name="edit" >Ya</button> -->

        <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Ya</a>
    
       
     </div>
      

</div>