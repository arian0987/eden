<?php if($pages > 1): ?>
<div class="pagination">
<?php if($label): ?>
<span class="label"><?php echo $label; ?></span>
<?php endif; ?>
<?php for($i = $min; $i <= $max; $i++): ?>
<?php if($i == $page): ?>
<strong><?php echo $i; ?></strong>
<?php else: ?>
<?php $query['page'] = $i; ?>
<?php $string = http_build_query($query); ?>
<a class="<?php echo $class; ?>" 
	href="<?php echo $url; ?>?<?php echo $string; ?>"
	><?php echo $i; ?></a>
<?php endif; ?>
<?php endfor; ?>
</div>
<?php endif; ?>