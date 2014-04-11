<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login_gauth");?>

  <p>
    <?php echo "Token: "/*lang('login_identity_label', 'identity')*/;?>
    <?php echo form_input($token);?>
  </p>

  <p>
    <?php echo form_hidden($identity);?>
  </p>

  <p>
    <?php echo form_hidden($remember);?>
  </p>

  <p>
    <?php echo form_hidden($gauth_login_key);?>
  </p>

  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>