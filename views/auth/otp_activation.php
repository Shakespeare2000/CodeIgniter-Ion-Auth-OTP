<div id="infoMessage"><?php echo $message;?></div>
<div id="otp">
	<h2>Multi-factor activation</h2>
	<img src="<?php echo $google_chart_url; ?>" alt="QR Code"><br>
	<p>
		Scan QR-code on Google Authenticator or Authy<br>
		or enter key: <span id="otp_secret_key"><?php echo $otp_secret_key; ?></span>
	</p>
	<p>
		Backup codes (Save these in case you loose your multi-factor authentication):
		<div id="backup_codes">
			<?php foreach ($backup_codes as $backup_code):?>
			<?php echo $backup_code.'<br>';?>
			<?php endforeach?>
		</div>
	</p>
</div>