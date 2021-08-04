				<?php //$this->session->set_userdata('navaktif','beranda'); ?>
				<p></p>
				<form  method="post" action="<?php echo base_url(); ?>index.php/scbaructr/proses">
					<div class="form-group">
						<label for="tipelang">Source Code Tipe : </label>
						<select class="form-control" id="idtipelang" name="idtipelang">
							<option>C</option>
							<option>C++</option>
						</select>
						<textarea class="form-control" id="idcode" name="idcode" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-primary mb-2">Simpan</button>
				</form>

