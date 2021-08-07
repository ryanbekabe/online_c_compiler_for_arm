				<?php //$this->session->set_userdata('navaktif','beranda'); ?>
				<p></p>
				<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
				<form  method="post" action="<?php echo base_url(); ?>index.php/scbaructr/proses">
					<div class="form-group">
						<label for="tipelang">Source Code Tipe : </label>
						<select class="form-control" id="idtipelang" name="idtipelang">
							<option value="c">C</option>
							<option value="cpp">C++</option>
						</select>
						<textarea class="form-control" id="idcode" name="idcode" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-primary mb-2">Simpan</button>
					
					<div class="control-panel">
						Select Language:
						&nbsp; &nbsp;
						<select id="languages" class="languages" onchange="changeLanguage()">
							<option value="c"> C </option>
							<option value="cpp"> C++ </option>
							<option value="php"> PHP </option>
							<option value="python"> Python </option>
							<option value="node"> Node JS </option>
						</select>
					</div>
					<div class="editor" id="editor"></div>

					<div class="button-container">
						<button class="btn" onclick="executeCode()"> Run </button>
					</div>

					<div class="output"></div>
					
				</form>

				<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
				<script src="<?php echo base_url(); ?>js/lib/ace.js"></script>
				<script src="<?php echo base_url(); ?>js/lib/theme-monokai.js"></script>
				<script src="<?php echo base_url(); ?>js/ide.js"></script>

