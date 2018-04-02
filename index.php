<h1>Test</h1>
<p>
	<?php echo "Hello World"; ?>
</p>



<!--  dynamic html example -->

<p>
	<?php echo date('m/d/Y'); ?>
</p>

<!-- loop exmaple note how peach color had no defined default so it comes up black -->

<?php 
$colors=[
'blue',
'red',
'peach',
'lightsalmon',
'orange']; ?>

<!-- unordered list -->
<!-- list-style-type: disc will give default bullets for unordered -->

<ul style="list-style-type: circle;">
	<?php foreach($colors as $color){ ?>
	<li style="color:<?php echo $color; ?>"> <?php echo $color; ?> </li>
	<?php } ?>
</ul>

<!-- ordered list -->
<ol>
	<?php foreach($colors as $color){ ?>
	<li> <?php echo $color; ?> </li>
	<?php } ?>
</ol>
