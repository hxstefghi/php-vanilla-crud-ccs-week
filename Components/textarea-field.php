<div class="flex flex-col space-y-1 mt-2">
  <label for="<?= $attribute['label'] ?>" class="text-sm text-gray-500"><?= $attribute['label'] ?></label>
  <textarea name="<?= $attribute['name'] ?>" id="<?= $attribute['name'] ?>" rows="5" placeholder="<?= $attribute['label'] ?>" class="outline outline-gray-300 focus:outline-2 focus:outline-black rounded-lg py-2 px-4 w-full"></textarea>
</div>

<?php

if (isset($errors[$attribute['name']])) {
  echo '<span class="text-red-500 text-sm">' . $errors[$attribute['name']] . '</span>';
}

?>