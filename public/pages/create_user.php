<?= get('message');?>
<form action="/pages/forms/create_user.php" method="POST" role="form">

    <legend>Form title</legend>

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="name" class="form-control" placeholder="input field">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control" placeholder="input field">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" placeholder="input field">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" class="form-control" placeholder="input field">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>