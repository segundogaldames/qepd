<?php if(isset($this->_paginacion)):?>
	<ul class="pagination">
		<?php if($this->_paginacion['primero']):?>
			<li class="page-item">
				<a class="page-link" href="<?php echo $link . $this->_paginacion['primero'];?>">Inicio</a>
			</li>
			
		<?php else:?>
			<li class="page-item disabled"><a href="#" class="page-link">Inicio</a></li>
		<?php endif;?>

		&nbsp;

		<?php if($this->_paginacion['anterior']):?>
			<li class="page-item">
				<a href="<?php echo $link . $this->_paginacion['anterior'];?>" class="page-link">&laquo;</a>
			</li>
			
		<?php else:?>
			<li class="page-item disabled"><a href="#" class="page-link">&laquo;</a></li>
		<?php endif;?>

		&nbsp;

		<?php for($i = 0;$i < count($this->_paginacion['rango']);$i++):?>
			<?php if($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]):?>
				<li class="page-item disabled">
					<a href="#" class="page-link"><?php echo $this->_paginacion['rango'][$i];?></a>
				</li>
				
			<?php else:?>
				<li class="page-item">
					<a href="<?php echo $link . $this->_paginacion['rango'][$i];?>" class="page-link">
					<?php echo $this->_paginacion['rango'][$i];?></a>
				</li>
				
			<?php endif;?>
		<?php endfor;?>

		&nbsp;


		<?php if($this->_paginacion['siguiente']):?>
			<li class="page-item">
				<a class="page-link" href="<?php echo $link . $this->_paginacion['siguiente'];?>">&raquo;</a>
			</li>
			
		<?php else:?>
			<li class="page-item disabled"><a href="#" class="page-link">&raquo;</a></li>
		<?php endif;?>

		&nbsp;

		<?php if($this->_paginacion['ultimo']):?>
			<li class="page-item">
				<a href="<?php echo $link . $this->_paginacion['ultimo'];?>" class="page-link">Fin</a>
			</li>
			
		<?php else:?>
			<li class="page-item disabled"><a href="#" class="page-link">Fin</a></li>
		<?php endif;?>
	</ul>
<?php endif;?>