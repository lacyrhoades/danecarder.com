<?php echo $form->renderFormTag(url_for('@editable_content_service_update'), array('class' => 'editable_content_form')) ?>

  <div class="form_body">
  <?php include_partial('formInner',
    array(
      'model' => $model,
      'pk' => $pk,
      'formClass' => $formClass,
      'formPartial' => $formPartial,
      'fields' => $fields,
      'default_values' => $default_values,
      'partial' => $partial,
      'method' => $method,
      'form' => $form
      )
    );
  ?>
  </div>

  <input type="button" class="cancel" value="cancel" />
  <input type="submit" value="save" />
  <input type="button" class="done" value="done" />

</form>