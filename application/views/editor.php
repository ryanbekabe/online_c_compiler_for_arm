
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Codeboard Online IDE - HanyaJasa.Com</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_text.css">
</head>
<body>

    <div class="header"> Codeboard Online IDE - HanyaJasa.Com</div>
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

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/ace.js">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/theme-monokai.js">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/ide.js">

</body>
</html>