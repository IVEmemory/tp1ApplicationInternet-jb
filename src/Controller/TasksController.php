<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Tasks Controller
 *
 * @property \App\Model\Table\TasksTable $Tasks
 *
 * @method \App\Model\Entity\Task[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TasksController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Users', 'Files'],
        ];
        $tasks = $this->paginate($this->Tasks);

        $this->set(compact('tasks'));
    }


    /**
     * View method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $task = $this->Tasks->get($id, [
            'contain' => ['Users', 'Comments'],
        ]);

        $this->set('task', $task);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $task = $this->Tasks->newEntity();
        if ($this->request->is('post')) {
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            $task->user_id = $this->Auth->user('id');
            if ($this->Tasks->save($task)) {
                $this->Flash->success(__('The task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The task could not be saved. Please, try again.'));
        }
        // Get a list of tags.
        $tags = $this->Tasks->Tags->find('list');
        $files = $this->Tasks->Files->find('list');
        // Set tags to the view context
        $this->set('tags', $tags);
        $this->set('files', $files);
        //$this->set('task', $task);


        $users = $this->Tasks->Users->find('list', ['limit' => 200]);
        $this->set(compact('task', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $task = $this->Tasks->get($id, [
            'contain' => ['ObecCities'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            if ($this->Tasks->save($task)) {
                $this->Flash->success(__('The task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The task could not be saved. Please, try again.'));
        }

        // Get a list of tags.
        $tags = $this->Tasks->Tags->find('list');

        // Set tags to the view context
        $this->set('tags', $tags);

        $this->set('task', $task);


        $users = $this->Tasks->Users->find('list', ['limit' => 200]);
        $this->set(compact('task', 'users'));

    }

    /**
     * Delete method
     *
     * @param string|null $id Task id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $task = $this->Tasks->get($id);
        if ($this->Tasks->delete($task)) {
            $this->Flash->success(__('The task has been deleted.'));
        } else {
            $this->Flash->error(__('The task could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
{
    $action = $this->request->getParam('action');
    // The add and tags actions are always allowed to logged in users.
    if (in_array($action, ['add'])) {
        return true;
    }

    // All other actions require a id.
    $id = $this->request->getParam('pass.0');
    if (!$id) {
        return false;
    }

    // Check that the task belongs to the current user.
    $task = $this->Tasks->get($id);

    if($user['role_id'] === 1){
        return true;
    }

    return $task->user_id === $user['id'];
}

}
