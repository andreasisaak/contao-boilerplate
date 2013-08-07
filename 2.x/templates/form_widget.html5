<?php if (!$this->tableless): ?>
  <tr class="<?php echo $this->rowClass; ?>">
    <td class="col_0 col_first"><?php echo $this->generateLabel(); ?></td>
    <td class="col_1 col_last"><?php echo $this->generateWithError(); ?></td>
  </tr>
<?php else: ?>
  <div class="entry <?php echo $this->class; ?>">   
  <?php if ($this->label): ?>
        <label for="ctrl_<?php echo $this->id; ?>">
        <?php echo $this->label; ?>
        <?php if ($this->mandatory): ?><span class="mandatory">*</span><?php endif; ?> 
        </label>
  <?php endif; ?>
        <?php echo $this->generateWithError('true'); ?>
  </div>
<?php endif; ?>