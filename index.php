<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/db_config.php'; ?>
<?php require_once 'includes/db_query.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>MiniTask para PHP</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row clearfix">
      <div class="col-md-12 column">
        <?php include 'includes/navbar.php'; ?>
        <div class="list-group">
          <h1>Lista de Tarefas</h1>
          <?php  
          // Utiliza dados retornados se houver
          while($row = mysqli_fetch_assoc($result)){ ?>
          <div id="pri_<?php echo $row["priority"] ?>" class="list-group-item">
            <p><?php echo $row["task"] ?></p>
            <p>(Prioridade: <?php echo $row["priority"] ?>)</p>
            <a href="#"><img title="Excluir Tarefa" id="delete" task="<?php echo $row["task_id"] ?>" src="img/delete.png"></a>
            <a href="#"><img title="Editar Tarefa" id="edit" task="<?php echo $row["task_id"] ?>" src="img/edit.png"></a>
            <div role="edit" id="edit_<?php echo $row["task_id"] ?>" class="list-group-item">
              <h5 id="edit-header">Editar Tarefa</h5>
              <form action="includes/process.php" name="taskForm" role="form" method="post">
                <?php include 'includes/form.php'; ?>
                <input type="submit" class="btn btn-default" id="edit-btn" name="edit" value="Editar" /><br>
              </form>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php'; ?>
  <script src="js/todo.js"></script>
  <script src="js/navbar.js"></script>
</body>
</html>
