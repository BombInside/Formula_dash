    <div class="container">
        <div class="row">
   		<div class="col-lg-offset-4 col-lg-4" style="margin-top:100px">
   			<div class="block-unit" style="text-align:center; padding:8px 8px 8px 8px;">
   				<img src="<?=base_url();?>assets/img/face80x80.jpg" alt="" class="img-circle">
   				<br>
   				<br>
					<form class="cmxform" id="signupForm" method="post" action="<?=base_url();?>admin/login">
						<fieldset>
							<p>
								<input id="login" name="login" type="text" placeholder="Логин">
								<strong><?=form_error('login');?></strong>
								<input id="pass" name="pass" type="password" placeholder="Пароль">
								<strong><?=form_error('password')?></strong>
							</p>
								<input class="submit btn-success btn btn-large" name="enter_button" type="submit" value="Вход">
						</fieldset>
					</form>
   			</div>

   		</div>


        </div>
    </div>
    <br>
    <br><br>