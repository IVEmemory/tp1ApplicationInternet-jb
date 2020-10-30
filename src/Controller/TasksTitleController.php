<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TasksTitle Controller
 *
 * @property \App\Model\Table\TasksTitleTable $TasksTitle
 *
 * @method \App\Model\Entity\TasksTitle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TasksTitleController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tasks', 'CommentsTasks'],
        ];
        $tasksTitle = $this->paginate($this->TasksTitle);

        $this->set(compact('tasksTitle'));
    }

    /**
     * View method
     *
     * @param string|null $id Tasks Title id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tasksTitle = $this->TasksTitle->get($id, [
            'contain' => ['Tasks', 'CommentsTasks', 'TasksTitle'],
        ]);

        $this->set('tasksTitle', $tasksTitle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tasksTitle = $this->TasksTitle->newEntity();
        if ($this->request->is('post')) {
            $tasksTitle = $this->TasksTitle->patchEntity($tasksTitle, $this->request->getData());
            if ($this->TasksTitle->save($tasksTitle)) {
                $this->Flash->success(__('The tasks title has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tasks title could not be saved. Please, try again.'));
        }
        $tasks = $this->TasksTitle->Tasks->find('list', ['limit' => 200]);
        $commentsTasks = $this->TasksTitle->CommentsTasks->find('list', ['limit' => 200]);
        $this->set(compact('tasksTitle', 'tasks', 'commentsTasks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tasks Title id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tasksTitle = $this->TasksTitle->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tasksTitle = $this->TasksTitle->patchEntity($tasksTitle, $this->request->getData());
            if ($this->TasksTitle->save($tasksTitle)) {
                $this->Flash->success(__('The tasks title has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tasks title could not be saved. Please, try again.'));
        }
        $tasks = $this->TasksTitle->Tasks->find('list', ['limit' => 200]);
        $commentsTasks = $this->TasksTitle->CommentsTasks->find('list', ['limit' => 200]);
        $this->set(compact('tasksTitle', 'tasks', 'commentsTasks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tasks Title id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tasksTitle = $this->TasksTitle->get($id);
        if ($this->TasksTitle->delete($tasksTitle)) {
            $this->Flash->success(__('The tasks title has been deleted.'));
        } else {
            $this->Flash->error(__('The tasks title could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
