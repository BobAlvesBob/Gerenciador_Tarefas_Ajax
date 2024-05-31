<?php if (isset($row["priority"])) { ?>
  <input type="hidden" name="task_id" value="<?php echo $row["task_id"] ?>">
<?php } ?>
<div class="form-group">
  <label for="taskBox">Task</label><br>
  <input type="text" id="taskBox" name="task" value="<?php if (isset($row["priority"])) echo $row["task"] ?>" />
</div>
<div class="form-group">
  <label for="prioritySelect">Prioridade</label><br>
  <select id="prioritySelect" name="priority">
    <option <?php if (isset($row["priority"]) && $row["priority"] == "1") echo('selecionado'); ?> value="1">1 (Baixa)</option>
    <option <?php if (isset($row["priority"]) && $row["priority"] == "2") echo('selecionado'); ?> value="2">2</option>
    <option <?php if (isset($row["priority"]) && $row["priority"] == "3") echo('selecionado'); ?> value="3">3</option>
    <option <?php if (isset($row["priority"]) && $row["priority"] == "4") echo('selecionado'); ?> value="4">4</option>
    <option <?php if (isset($row["priority"]) && $row["priority"] == "5") echo('selecionado'); ?> value="5">5 (Alta)</option>
  </select>
</div>