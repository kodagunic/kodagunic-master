<?php
include "header1.php"; ?>
<input type="file"  accept="image/*" name="image" id="imgfile"  onchange="loadFile(event)">

<p><img id="output" width="200" /></p>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>