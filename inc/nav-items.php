<?php require "constants.php"; ?>

<ul class="flex flex-col gap-2 pb-4">
  <?php foreach ($NAV_ITEMS as $item): ?>
    <li class="flex flex-col gap-2">
      <div class="flex gap-2 items-center pr-10">
        <a href="<?= $item["url"] ?>" class="inline-block w-full pl-6 py-2 hover:bg-slate-900" onclick="openMenu()">
          <?= $item["label"] ?>
        </a>
        <?php if (array_key_exists("children", $item)): ?>
          <div class="w-5 h-5 rounded-full cursor-pointer hover:bg-slate-700" onclick="expandItem(this)">
            <?php require "icons/chevron-down.php"; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if (array_key_exists("children", $item)): ?>
        <ul class="ml-10 flex-col gap-2 hidden" data-children>
          <?php foreach ($item["children"] as $child): ?>
            <li>
              <a href="<?= $child["url"] ?>" class="inline-block w-full pl-6 py-2 hover:bg-slate-900" onclick="openMenu()">
                <?= $child["label"] ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>
