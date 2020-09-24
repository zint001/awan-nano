
<!DOCTYPE html>
<html lang="en">

<form class action="<?php base_url('/home/edit') ?>" method="post">

<input type="hidden" name="id" value="<?php echo $id ?>">

<div class="form-group">
  <label for="title"><strong>TAJUK:</strong></label>
  <input type="text" class="form-control font-italic" name="tajuk" id="tajuk" placeholder="E.g: Kursus Kewangan" value="" required>
</div>

<div class="form-group">
  <label for="title"><strong>MASA & TARIKH:</strong></label>
  <input type="datetime-local" class="form-control font-italic" name="mstkh" id="mstkh" value="" required>
</div>
<div class="form-group">
  <label for="title"><strong>TARIKH TUTUP PENDAFTARAN:</strong></label>
  <input type="date" class="form-control font-italic" name="tkhtutup" id="tkhtutup" value="" required>
</div>
<div class="form-group">
    <label for="title"><strong>SASARAN:</strong></label>

    <select class="font-italic" name="sasaran" id="sasaran">
      <option value="Staf">Staf</option>
      <option value="Pelajar">Pelajar</option>
      <option value="Staf & Pelajar">Staf & Pelajar</option>
    </select>
</div>
<div class="form-group">
  <label for="title"><strong>DIREKOD OLEH (NRIC):</strong></label>
  <input type="text" class="form-control font-italic" name="oleh" id="oleh" value="" minlength="14" maxlength="14" placeholder="E.g: 000712-11-0561" required>
</div>
<div class="form-group">
  <label for="title"><strong>TEMPAT:</strong></label>
  <input type="text" class="form-control font-italic" name="tempat" id="tempat" placeholder="E.g: Dewan Canselori" value="" required>
</div>
<div class="form-group">
  <label for="title"><strong>KETERANGAN:</strong></label>
  <textarea type="text" class="form-control font-italic" name="keterangan" id="keterangan" placeholder="E.g: Makanan disediakan, Pengangkutan percuma" value=""></textarea>
</div>
        <div class="form-group">
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-md font-italic">Simpan</button>
          </div>
        </div>
    </form>