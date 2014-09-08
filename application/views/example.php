<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
  margin-top: 0;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
<style>
html{
  background: #E4E4E4;
}
  #header{
    background: #e3e3e3;
    height: 110px;
    vertical-align: middle;
    display: table-cell;
    width: 1374px;
  }
#logo{
  float:left;
  margin-left: 50px;
  margin-top: 10px;
  margin-right: 50px;
}
#menu{
  margin-top: 30px;
}
#menu ul{

margin: 0;

padding: 0;

float: left;}
#menu ul li{
 display: inline;
 margin-left: 25px;
 margin-top: 15px;
}
</style>
</head>
<body>
	<div id="header">
    <div id="logo"><img src="<?=base_url();?>assets/img/logo.png" alt=""></div>
    <div id="menu">
      <ul>
       <!--  <li><a href="<?php echo site_url('admin')?>">Главная</a></li>-->
        <li><a href="<?php echo site_url('admin/flor_management')?>">Этаж</a></li>
        <li><a href="<?php echo site_url('admin/cabinet_management')?>">Кабинет</a></li>
        <li><a href="<?php echo site_url('admin/techics_management')?>">Техника</a></li>
        <li><a href="<?php echo site_url('admin/usercard')?>">Сотрудники</a></li>
        <!--<li>Заказы</li>-->
       <!-- <li><a href="<?php echo site_url('admin/settings')?>">Настойки</a></li> -->
      </ul>

		</div>
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
