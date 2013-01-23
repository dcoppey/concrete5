<?php $this->inc('elements/header.php'); ?>

 <div class="container">
		<div class="row">
		    <div class="span4">
		        <div class="hero-unit">
				  <?php
					$a = new Area('Contenu');
					$a->display($c); 
				  ?>
				</div>
		    </div>
			
			<div class="span4">
		        <div class="hero-unit">
				  <?php
					$a = new Area('Contenu');
					$a->display($c); 
				  ?>
				</div>
		    </div>
			
		    <div class="span4">
		        <div class="hero-unit">
				  <?php
					$a = new Area('Contenu');
					$a->display($c); 
				  ?>
				</div>
		    </div>
		</div>
		
		<div class="row">
		    <div class="span12">
		        <div class="hero-unit">
				  <?php
					$a = new Area('Contenu');
					$a->display($c); 
				  ?>
				</div>
		    </div>
		</div>
    </div>

<?php $this->inc('elements/footer.php'); ?>