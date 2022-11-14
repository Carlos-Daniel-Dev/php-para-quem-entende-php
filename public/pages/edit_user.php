<?= get('message');?>

<?php
    $user = find('users', 'id', $_GET['id']);
?>
<form action="/pages/forms/update_user.php" method="POST" role="form">

    <legend>Form title</legend>

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="name" class="form-control" placeholder="input field" value="<?= $user->name ?>">
    </div>

    <input type="hidden" name="id" value="<?= $user->id ?>">

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control" placeholder="input field" value="<?= $user->sobrenome ?>">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" placeholder="input field" value="<?= $user->email ?>">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>