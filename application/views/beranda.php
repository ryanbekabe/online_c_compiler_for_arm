				<?php //$this->session->set_userdata('navaktif','beranda'); ?>
				<p></p>
				<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
				<form  method="post" action="<?php echo base_url(); ?>index.php/scbaructr/proses">
					<div class="form-group">
						<!--label for="tipelang">Source Code Tipe : </label>
						<select class="form-control" id="idtipelang" name="idtipelang">
							<option value="C">C</option>
							<option value="CPP">C++</option>
						</select-->
						<textarea class="form-control" id="idcode" name="idcode" rows="5" style="display:none;"></textarea>
						<!--textarea class="form-control" id="idcode2" name="idcode2" rows="5" style="display:none;"></textarea-->
					</div>
					
					<div class="control-panel">
						Source Code Tipe:
						&nbsp; &nbsp;
						<select id="languages" class="languages" name="languages" onchange="changeLanguage()">
							<option value="c"> C </option>
							<option value="cpp"> C++ </option>
							<!--option value="php"> PHP </option>
							<option value="python"> Python </option>
							<option value="node"> Node JS </option-->
						</select>
					</div>
					<div class="editor" id="editor" name="editor"></div>

					<!--div class="button-container">
						<button class="btn" onclick="executeCode()"> Run </button>
					</div>
					<div class="output"></div-->

					<button type="button" id="btn1" name="btn1" class="btn btn-primary mb-2" onclick="myFuncCopyidcodeToEditor()" style="display:none;">Parsing idCode to Editor ...</button>
					<button type="button" id="btn2" name="btn2" class="btn btn-primary mb-2" onclick="myFuncCopyEditorToidcode()">Parsing Editor to idCode, lalu Simpan ...</button><br/>
					<button type="submit" id="btn3" name="btn3" class="btn btn-primary mb-2" style="display:none;">Simpan</button>
					
				</form>

				<script>
				function myFuncCopyidcodeToEditor() {
					//window.onload = myFuncCopyidcodeToEditor;
					//document.getElementById("idcode").value = editor.getSession().getValue();
					editor.setValue(document.getElementById("idcode").value);
					//https://www.w3schools.com/jsref/prop_textarea_value.asp
					//https://stackoverflow.com/questions/8963855/how-do-i-get-value-from-ace-editor
					//https://stackoverflow.com/questions/27633885/auto-run-javascript-code-on-page-load
					//https://stackoverflow.com/questions/41428870/make-button-visible-by-js-variable/41428950
				}
				function myFuncCopyEditorToidcode() {
					document.getElementById("idcode").value = editor.getSession().getValue();
					document.getElementById("btn3").style.display = "block";
					document.getElementById("btn2").style.display = "none";
					//editor.setValue(document.getElementById("idcode").value);
				}
				</script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
				<script src="<?php echo base_url(); ?>js/lib/ace.js"></script>
				<script src="<?php echo base_url(); ?>js/lib/theme-monokai.js"></script>
				<script src="<?php echo base_url(); ?>js/ide.js"></script>

