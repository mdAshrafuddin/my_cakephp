<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{

    public function login()
    {
        $this->viewBuilder()->setLayout('admin');
        if ($this->request->is('post')){
            $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Incorrect name or password'));
            }
        }
    }

    public function singup()
    {
        $this->viewBuilder()->setLayout('admin');

        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Your user has been saved.'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Unable to add your user.'));
        }
        $this->set('user', $user);
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
       $users = $this->Paginator->paginate($this->Users->find());
       $this->set(compact('users'));
    }

    public function add() 
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Your user has been saved.')); 
                return $this->redirect(['action' => 'index']); 
            } else {
                $this->Flash->error(__('Unable to add your user.'));
            }
        }
        $this->set('user', $user);
    }

    public function edit() 
    {

    }
}