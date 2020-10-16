<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Comments Controller
 *
 * @property \App\Model\Table\CommentsTable $Comments
 *
 * @method \App\Model\Entity\Comment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommentsController extends AppController
{

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['add']);

        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            // Added this line
            'authorize'=> 'Controller',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
             // If unauthorized, return them to page they were just on
            'unauthorizedRedirect' => $this->referer()
        ]);
    
        // Allow the display action so our pages controller
        // continues to work. Also enable the read only actions.
        $this->Auth->allow(['display', 'view', 'index']);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tasks'],
        ];
        $comments = $this->paginate($this->Comments);

        $this->set(compact('comments'));
    }


    /**
     * View method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comment = $this->Comments->get($id, [
            'contain' => ['Tasks'],
        ]);

        $this->set('comment', $comment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    { 
        if($this->request->session()->read('Task.id') == false){
            $this->Flash->error(__('Comment must be added from an task'));
            return $this-redirect(['controller' => 'tasks', 'action' => 'index']);
        }
        else{
            $comment = $this->Comments->newEntity();
        if ($this->request->is('post')) {
            $comment = $this->Comments->patchEntity($comment, $this->request->getData());
            $comment->task_id = $this->request->session()->read('Task.id');
            $this->request->session()->delete('Task.id');

            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));
                $task_id = $this->request->session()->read('Tasks.id');
                
                return $this->redirect(['controller' => 'tasks', 'action' => 'view', $comment->task_id]);
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }
        $tasks = $this->Comments->Tasks->find('list', ['limit' => 200]);
        $this->set(compact('comment', 'tasks'));
        }
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comment = $this->Comments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comment = $this->Comments->patchEntity($comment, $this->request->getData());
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));

                return $this->redirect(['controller' => 'tasks', 'action' => 'view', $comment->task_id]);
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }
        $tasks = $this->Comments->Tasks->find('list', ['limit' => 200]);
        $this->set(compact('comment', 'tasks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comment = $this->Comments->get($id);
        if ($this->Comments->delete($comment)) {
            $this->Flash->success(__('The comment has been deleted.'));
        } else {
            $this->Flash->error(__('The comment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller' => 'tasks', 'action' => 'view', $comment->task_id]);
    }

    public function isAuthorized($user)
    {
        
        $action = $this->request->getParam('action');
        
    
        // All other actions require a id.
        $id = $this->request->getParam('pass.0');
        if (!$id) {
            return false;
        }
    
        // Check that the task belongs to the current user.
        $comment = $this->Comments->get($id);


        if($comment->user_id == $user['id']){
            return true;
        }

    
        return $comment->user_id === $user['id'];
        
    
        
    }
}
