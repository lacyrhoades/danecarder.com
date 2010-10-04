<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('paintingCMS/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields() ?>
          &nbsp;<a href="<?php echo url_for('paintingCMS/index') ?>">Cancel</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'paintingCMS/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['title']->renderLabel() ?></th>
        <td>
          <?php echo $form['title']->renderError() ?>
          <?php echo $form['title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['medium']->renderLabel() ?></th>
        <td>
          <?php echo $form['medium']->renderError() ?>
          <?php echo $form['medium'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['dimensions']->renderLabel() ?></th>
        <td>
          <?php echo $form['dimensions']->renderError() ?>
          <?php echo $form['dimensions'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['year']->renderLabel() ?></th>
        <td>
          <?php echo $form['year']->renderError() ?>
          <?php echo $form['year'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['description']->renderLabel() ?></th>
        <td>
          <?php echo $form['description']->renderError() ?>
          <?php echo $form['description'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['category']->renderLabel() ?></th>
        <td>
          <?php echo $form['category']->renderError() ?>
          <?php echo $form['category'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['subcategory']->renderLabel() ?></th>
        <td>
          <?php echo $form['subcategory']->renderError() ?>
          <?php echo $form['subcategory'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['order']->renderLabel() ?></th>
        <td>
          <?php echo $form['order']->renderError() ?>
          <?php echo $form['order'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['thumbnail']->renderLabel() ?></th>
        <td>
          <?php echo $form['thumbnail']->renderError() ?>
          <?php echo $form['thumbnail'] ?>  <?php echo image_tag('/uploads/thumbnails/'.$form['thumbnail']->getValue(), 'width=100') ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['image']->renderLabel() ?></th>
        <td>
          <?php echo $form['image']->renderError() ?>
          <?php echo $form['image'] ?> <?php echo image_tag('/uploads/'.$form['image']->getValue(), 'width=100') ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
