				<?php //$this->session->set_userdata('navaktif','scku'); ?>
				<p></p>
				<form>
					<div class="form-group">
						<label for="exampleFormControlTextarea1b">Daftar Source Code : </label>
						<select class="form-control">
							<?php
							$no = 1;
							foreach($tb_sc as $datanya){
								echo "<option>".$no++.") ".$datanya->id."-".$datanya->un_user."</option>";
							}
							?>
						</select>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-primary mb-2">Simpan</button>
					<button type="submit" class="btn btn-primary mb-2">Compile ARM (.so)</button>
				</form>
