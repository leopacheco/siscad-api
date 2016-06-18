<?php

$app->get('/usuario(/)', function ($id = null) use ($app) {
  $users = UsuarioQuery::create()->find();
  $app->render('list_user.phtml', array('users' => $users));
});

$app->get('/usuario/editar/:id', function ($id = null) use ($app) {
  $user = UsuarioQuery::create()->findPK($id);
  $perfis = PerfilQuery::create()->find();
  $app->render('form_user.phtml', array('perfis' => $perfis, 'user'=>$user));
});

$app->post('/usuario/editar/:id', function () use ($app) {
  $params = $app->request->params();
  $user = UsuarioQuery::create()->findPK($params['id']);
  $user->setNome($params['nome']);
  $user->setDescricao($params['descricao'])->setSecret($params['secret']);
  $user->setPerfilId($params['perfil_id'])->save();
  $app->render('form_user.phtml', array('perfis' => $perfis, 'user'=>$user));
});

$app->get('/usuario/novo(/)', function () use ($app) {
  $perfis = PerfilQuery::create()->find();
  $app->render('form_user.phtml', array('perfis' => $perfis));
});

$app->post('/usuario/novo(/)', function () use ($app) {
  $params = $app->request->params();
  $user = new Usuario;
  $user->setNome($params['nome'])->setAtivo(1);
  $user->setDescricao($params['descricao'])->setSecret($params['secret']);
  $user->setPerfilId($params['perfil_id'])->save();
  $app->render('form_user.phtml', array('perfis' => $perfis, 'user'=>$user));
});
