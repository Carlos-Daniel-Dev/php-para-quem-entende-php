<?php   

require "../../../bootstrap.php";

 if(isEmpty()) {
    flash('message','Preencha todos os campos', 'danger');

    return redirect("create_user");
 }


  $validate = validate([
    'name' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'password' => 's',

  ]);
  $cadastro = create('users', $validate);

  if($cadastro) {
    flash('message', 'Cadastrado com sucesso', 'success');

    return redirect('create_user');
  }

  flash('message', 'Erro ao cadastrar');
  return redirect('create_user');