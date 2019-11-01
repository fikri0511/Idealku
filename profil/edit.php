<div class="masukan">
      <form method="POST" class="form-user_edit">
      <label class="inputbox">

          <input type="text" name="berat_edit"  autocomplete="off" required>
        <span>
      Berat Badan 
      </span>
      </label>

      <label class="inputbox">
      
      <input type="text" name="tinggi_edit" autocomplete="off" required>
      <span>
      Tinggi Badan  
      </span>
      </label>

   
      <select class="selectpicker show-menu-arrow" data-style="btn-info" name="aktivitas_edit"  required >
        <option value="">
          --Pilih Aktivitas--
        </option>
        
        <option value=1>
          Kurang Aktif
        </option>
        
        <option value=2>
          Cukup Aktif
        </option>
        
        <option value=3>
          Aktif 
        </option>

        <option value=4>
         Sangat Aktif 
        </option>

      </select></label>
      <input type="submit" name="submit" value="CEK IDEAL" id="submit" class="tombol-simpan_edit">
      
      <a class="tombol-simpan" style="cursor: pointer;">Simpan</a>
      </form>
    </div>