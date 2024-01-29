<?php 
// ISSET PESQUISA
?>

<form action="./page/forms/contato_script.php" method="post" role="form">
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" id="email" name="email" naria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">escreva um email valido</div>
  </div>
  <div class="mb-3">
    <label for="Password1" class="form-label">password</label>
    <input type="password" class="form-control" id="password" name="password">
    <div id="emailHelp" class="form-text">senha deve ter 8 caracteres</div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="termo" name="termo">
    <label class="form-check-label" for="exampleCheck1">concorda com o termo</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>