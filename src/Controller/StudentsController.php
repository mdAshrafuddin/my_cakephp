<?php
namespace App\Controller;

use App\Controller\AppController;

// Student Controller
class StudentsController extends AppController
{
    // Get all from student table
    public function index()
    {
        $this->paginate = [
            'limit' => 2
        ];
        $students = $this->paginate($this->Students);
        $this->set(compact('students'));
    }

    // Get single item from table
     public function view($slug)
    {
        $student = $this->Students->findBySlug($slug)->firstOrFail();
        $this->set(compact('student'));
    }

    // Add
    public function add()
    {
        $student = $this->Students->newEmptyEntity();

        if ($this->request->is('post')) {
            $student = $this->Students->patchEntity($student, $this->request->getData());

            if ($this->Students->save($student)) {
                $this->Flash->success(__('Your student has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $this->set(compact('student'));
    }

    // Edit 
    public function edit($slug) 
    {
        $student = $this->Students->findBySlug($slug)->firstOrFail();

        if($this->request->is(['post', 'put'])) {
            $this->Students->patchEntity($student, $this->request->getData());
            if ($this->Students->save($student)) {
                $this->Flash->success(__('Your student has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your student.'));
        }

        $this->set(compact('student'));
    }

    // Delete
    public function delete($slug) 
    {
        $this->request->allowMethod(['post', 'delete']);
        $student = $this->Students->findBySlug($slug)->firstOrFail();

        if ($this->Students->delete($student)) {
            $this->Flash->success(__('Your student has been Delete.'));
            return $this->redirect(['action' => 'index']);
        }
    }

    // Delete All
    public function deleteAll() 
    {
        $this->request->allowMethod(['post', 'delete']);

        $ids = $this->request->getData('ids');

        if ($this->Students->deleteAll(['Users.id IN' => $ids])) {
            $this->Flash->success(__('Your student has been Delete All.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}