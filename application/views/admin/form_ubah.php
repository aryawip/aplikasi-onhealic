<html>
  <head>
    <link rel="icon" href="../onhealic/assets/images/logo-onhealic.png">
    <title>Database On-Healic | Online Health Clinic</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  </head>
  <body style="background-color: #F0F8FF">
    <h1>Form Ubah Data Admin</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("adminuser/ubah/".$id->id); ?>
      <table cellpadding="8">
        <tr>
          <td>Username</td>
          <td><input type="text" name="input_username" value="<?php echo set_value('input_username', $id->usernama); ?>" readonly></td>
        </tr>
        <td>Password</td>
          <td><input type="text" name="input_password" value="<?php echo set_value('input_password', $id->password); ?>" readonly></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Ubah">
      <a href="<?php echo base_url('adminuser'); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>