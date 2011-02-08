<style type="text/css">
  div.login_wrapper
  {
    margin: 20px;
  }
  div.login_wrapper h1
  {
    margin: 10px;
  }
  div.login_wrapper input
  {
    margin: 10px;
  }
  
</style>

<div class="login_wrapper">

  <?php use_helper('I18N') ?>

  <h1><?php echo __('Signin', null, 'sf_guard') ?></h1>

  <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>

</div>
