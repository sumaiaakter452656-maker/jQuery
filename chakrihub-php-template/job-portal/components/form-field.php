<?php
/* Label + input + error in one line:
   component('form-field', ['name' => 'email', 'label' => 'Email', 'type' => 'email',
                            'required' => true, 'value' => '', 'placeholder' => '', 'error' => $errors['email'] ?? null])
   type can also be 'textarea' or 'select' (pass 'options' => [...]). */
$type  = $type ?? 'text';
$value = $value ?? ($_POST[$name] ?? '');
$error = $error ?? null;
$cls   = 'form-control' . ($error ? ' is-invalid' : '');
$req   = !empty($required) ? 'required' : '';
?>
<div class="form-group">
  <label class="form-label" for="f-<?= e($name) ?>"><?= e($label) ?><?= $req ? ' <span class="req">*</span>' : '' ?></label>
  <?php if ($type === 'textarea'): ?>
    <textarea class="<?= $cls ?>" id="f-<?= e($name) ?>" name="<?= e($name) ?>" placeholder="<?= e($placeholder ?? '') ?>" <?= $req ?>><?= e($value) ?></textarea>
  <?php elseif ($type === 'select'): ?>
    <select class="<?= $cls ?>" id="f-<?= e($name) ?>" name="<?= e($name) ?>" <?= $req ?>>
      <?php foreach ($options as $optValue => $optLabel): ?>
        <?php $v = is_int($optValue) ? $optLabel : $optValue; ?>
        <option value="<?= e($v) ?>" <?= selected($v, $value) ?>><?= e($optLabel) ?></option>
      <?php endforeach; ?>
    </select>
  <?php else: ?>
    <input class="<?= $cls ?>" id="f-<?= e($name) ?>" type="<?= e($type) ?>" name="<?= e($name) ?>" value="<?= e($value) ?>" placeholder="<?= e($placeholder ?? '') ?>" <?= $req ?>>
  <?php endif; ?>
  <?php if ($error): ?><div class="form-error"><?= e($error) ?></div><?php endif; ?>
  <?php if (!empty($hint)): ?><div class="form-hint"><?= e($hint) ?></div><?php endif; ?>
</div>
