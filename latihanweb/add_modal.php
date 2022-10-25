<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="add.php">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">E-mel:</label>
            <input type="text" class="form-control" id="emel" name="emel"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">No.Telefon:</label>
            <input type="text" class="form-control" id="notel" name="notel"></textarea>
          </div>
          <label for="message-text" class="col-form-label">Sesi:</label>
            <select name="sesi" id="sesi" class="form-select">
              <option selected>Sila Pilih Sesi </option>
              <option id="sesi">1/2022</option>
              <option id="sesi">2/2022</option>
              <option id="sesi">1/2023</option>
              <option id="sesi">2/2023</option>
            </select>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">program:</label>
            <select name="program" id="program" class="form-select">
              <option selected>Sila Pilih Program </option>
              <option id="program">A12 - Teknologi Rekabentuk Produk Industri</option>
              <option id="program">A17 - Teknologi Minyak Dan Gas (Lukisan Perpaipan)</option>
              <option id="program">F01 - Teknologi Komputer Sistem</option>
              <option id="program">F02 - Teknologi Komputer Rangkaian</option>
              <option id="program">F04 - Teknologi Perisian (Pembangunan Aplikasi Web)</option>
            </select>

          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="add" >Simpan</button>
      </div>
      <
        </form>
      </div>
      
    </div>
    </div>
  </div>
</div>