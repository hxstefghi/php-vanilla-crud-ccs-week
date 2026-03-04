<div class="flex flex-col space-y-1">
  <label for="<?= $attribute['name'] ?>" class="text-gray-500 text-sm"><?= $attribute['label'] ?></label>
  <input type="<?= $attribute['type'] ?>" name="<?= $attribute['name'] ?>" placeholder="<?= $attribute['label'] ?>" class="border border-gray-300 text-sm text-black rounded-lg py-2 px-4">
</div>

<?php
if (isset($errors[$attribute['name']])) {
  echo '<span class="text-red-500 text-sm">' . $errors[$attribute['name']] . '</span>';
}
?>