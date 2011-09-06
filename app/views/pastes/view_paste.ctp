<h2 class="title">Viewing Paste :: <?php echo $paste['Paste']['baseid'] ?></h2>
<p>Posted by <?php if (!empty($paste['Paste']['username'])): ?> <?php echo $paste['Paste']['username'] ?> <?php else: ?> Anonymous <?php endif;?> on <time><?php echo $paste['Paste']['datetime'] ?></time></p>
<?php echo $this->Geshi->highlight('<pre>'.$paste['Paste']['paste'].'</pre>'); ?>