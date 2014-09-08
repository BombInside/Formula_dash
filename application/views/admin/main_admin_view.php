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
<!--			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
	      		<dtitle>Быстрое добавление товара</dtitle>
	      		<hr>
	      		<div class="cont">
                	<form action="<?=base_url();?>products/add" method="POST" id="add_prod">
                		<input type="text" id="article" name="article" placeholder="Артикул">
                    	<input type="text" id="name" name="name" placeholder="Название товара">
                    	<input type="text" id="img_s" name="img_s" placeholder="Маленькая картинка">
                    	<input type="text" id="img_b" name="img_b" placeholder="Большая картинка">
                    	<input type="text" id="old_price" name="old_price" placeholder="Старая цена">
                    	<input type="text" id="new_price" name="new_price" placeholder="Новая цена">
                    	<input type="text" id="date" name="date" placeholder="Дата добавления">
                    	<select class="form-control">
                    		<option id="cat_id" name="cat_id">Выбор Категории Товара</option>
                    		<?php foreach ($all_cat as $cat) {?>
                    		<option><?=$cat['id']?> <?=$cat['name']?></option>
                    	<?php } ?>
                    	</select>
                    	<br><br>
                    	<input type="submit" id="submit" name="submit" value="Сохранить">
                    </form>
				</div>
				</div>
			</div> -->

<div class="col-sm-9 col-lg-9">
				<div class="dash-unit">
	      		<dtitle>Товары</dtitle>
	      		<hr>
	      			<?php echo $output; ?>
				</div>
			</div>

