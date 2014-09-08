         <div class="col-sm-3 col-lg-3">

         	 <div class="dash-unit">
	      		<dtitle>Профиль Пользователя</dtitle>
	      		<hr>
				<div class="thumbnail">
					<img src="<?=base_url();?>assets/img/face80x80.jpg" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->
				<h1>ФИО</h1>
				<h3>ГОРОД</h3>
				<br>
					<div class="info-user">
						<span aria-hidden="true" class="li_user fs1"></span>
						<span aria-hidden="true" class="li_settings fs1"></span>
						<span aria-hidden="true" class="li_mail fs1"></span>
						<a href="<?=base_url();?>admin/logout"><span aria-hidden="true" class="li_key fs1" title="Выход"></span></a>
					</div>
			</div>

      <!-- LOCAL TIME BLOCK -->
      		<div class="half-unit">
	      		<dtitle>Локальное время</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<digiclock>12:45:25</digiclock>
		      		</div>
			</div>

        </div>




<!-- add product -->     
			<div class="col-sm-12 col-lg-12">
				<?php echo $output; ?>
			</div>