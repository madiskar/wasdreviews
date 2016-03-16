<!DOCTYPE html> 
<html lang="et">
        <head>
        		<meta charset="utf-8"/>
                <title>WASDreviews | <?php echo $title; ?></title>
                <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>public/css/style.css">
                
                <script src="<?php echo $base_url; ?>public/js/jquery.js" type="text/javascript"></script>
                <script src="<?php echo $base_url; ?>public/js/script.js" type="text/javascript"></script>
        </head>
        <body>
<ul>
  <li><a href="<?php echo $base_url; ?>index.php">AVALEHT</a></li>
  <li><a href="#news">SIRVI MANGE</a></li>
  <li class="dropdown">
		<?php if($this->session->userdata('username') == FALSE) { ?>
		  	<a href="#">
				<img class="fitImage" alt="LOGI SISSE" src="<?php echo $base_url; ?>public/images/login.png">
					<div class="dropdown-content">
						<a href="<?php echo $base_url; ?>index.php/login">LOGI SISSE</a>
						<a href="<?php echo $base_url; ?>index.php/register_controller">
							REGISTREERU
						</a>
					</div>
		  	</a>
		<?php } else {?>
			<a href="<?php echo $base_url; ?>index.php/login/logout">
				<img class="fitImage" alt="LOGI V�LJA" src="<?php echo $base_url; ?>public/images/logout.png">
			</a>
		<?php }?>
	</li>
  <li class="right">
  	<?php echo form_open('games/search')?>
  		<input class="searchForm" type="text" id="searchQuery" name="searchQuery" size="25" placeholder="OTSING"/>

  	</form>
  </li>
  <li class="right">
  	<?php if($this->session->userdata('is_admin') == TRUE) { ?>
		<a href="<?php echo $base_url; ?>index.php/management">
			HALDA KASUTAJAID
		</a>
	<?php } ?>
   </li>
  <li class="right">
  	<?php if($this->session->userdata('is_admin') == TRUE) { ?>
		<a href="<?php echo $base_url; ?>index.php/games/add">
			LISA MANG
		</a>
		<?php } ?>
	</li>
</ul>