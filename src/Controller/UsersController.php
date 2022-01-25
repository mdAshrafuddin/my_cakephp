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
            $user = $this->Users->patchEntity($user, $this->request->getData(),['validate' => true]);

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Your user has been saved.'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Unable to add your user.'));
        }
        $this->set(compact("user"));
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function index()
    {
        $this->paginate = [
            'limit' => 1
        ];
       $users = $this->paginate($this->Users);
       $this->set(compact('users'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);

        $this->set(compact('user'));
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

    public function edit($id) 
    {
        $user = $this->Users->get($id);

        if ($this->request->is(['post', 'put'])) {
            $this->Users->patchEntity($user, $this->request->getData());

            if($this->Users->save($user)) {
                $this->Flash->success(__('Your user has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('user', $user);
    }

    public function delete($id) 
    {
        // $this->request->allowMethod(['post','delete']);

        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The {0} user has been deleted.', $user->name));
            return $this->redirect(['action' => 'index']);
        }
    }

    public function userStatus($id = null, $status) 
    {
        $this->request->allowMethod(['post']);
        $user = $this->Users->get($id);

        if ($status == 'Active') {
            $user->status = 'InActive';
        } else {
            $user->status = 'Active';
        }

        if ($this->Users->save($user)) {
            $this->Flash->success(__('The user has been Changed.')); 
        }

        return $this->redirect(['action' => 'index']);
    }
}