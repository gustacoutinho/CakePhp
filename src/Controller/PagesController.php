<?php

namespace App\Controller; //sempre uma linha me branco após a tag

class PagesController extends AppController //toda classe precisa extender a AppController
{
  public function index()
  {
    $pages = $this->Pages->Find()->all();
    $this->set(compact('pages'));
  }
  public function view($id = null)
  {
    $page = $this->Pages->get($id, [
      'contain' => []
  ]);

  $this->set('page', $page);
  }
  public function add()
  {
    $page = $this->Pages->newEntity();
    if($this->request->is('post')){
      $page = $this->Pages->patchEntity($page,  $this->request->getData());
      if($this->Pages->save($page)){
        $this->Flash->success(__('Salvo com sucesso!'));

        return $this->redirect(['controller' => 'pages', 'action' => 'index']);
      }
      $this->Flash->warning(__('Não foi possível salvar os dados!'));
    }
    $this->set('page', $page);
  }
  public function edit($id)
  {
    $page = $this->Pages->get($id);
      if($this->request->is('post', 'put', 'patch')){
      $page = $this->Pages->patchEntity($page,  $this->request->getData());
      if($this->Pages->save($page)){
        $this->Flash->success(__('Salvo com sucesso!'));

        return $this->redirect(['controller' => 'pages', 'action' => 'index']);
      }
      $this->Flash->warning(__('Não foi possível salvar os dados!'));
    }
    $this->set('page', $page);
  }

  public function delete($id)
  {
    $this->request->allowMethod(['post', 'delete']);
    $page = $this->Pages->get($id);
    $this->Pages->delete($page);
    return $this->redirect(['action' => 'index']);
  }
}