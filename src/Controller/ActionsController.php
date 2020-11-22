<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Actions Controller
 *
 * @property \App\Model\Table\OkresCountiesTable $Actions
 *
 * @method \App\Model\Entity\OkresCounty[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActionsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['getByProduit', 'add', 'edit', 'delete']);
    }

    public function getByProduit() {
        $produit_id = $this->request->query('produit_id');

        $actions = $this->Actions->find('all', [
            'conditions' => ['Actions.produit_id' => $produit_id],
        ]);
        /**/        $this->set('actions', $actions);
                  $this->set('_serialize', ['actions']);
        /**/
        /*      $data = '';
                foreach ($actions as $action) {
                    $data .= '<option value="' . $action->id . '">' . $action->actionPro . '</option>';
                }
                $this->autoRender = false; // ligne ajoutée
                echo $data;
         */
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Produits'],
        ];
        $actions = $this->paginate($this->Actions);

        $this->set(compact('actions'));
    }

    /**
     * View method
     *
     * @param string|null $id Okres County id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $action = $this->Actions->get($id, [
            'contain' => ['Produits', 'EmplacementProduits'],
        ]);

        $this->set('action', $action);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $action = $this->Actions->newEntity();
        if ($this->request->is('post')) {
            $action = $this->Actions->patchEntity($action, $this->request->getData());
            if ($this->Actions->save($action)) {
                $this->Flash->success(__('The okres county has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The okres county could not be saved. Please, try again.'));
        }
        $produits = $this->Actions->Produits->find('list', ['limit' => 200]);
        $this->set(compact('action', 'produits'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Okres County id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $action = $this->Actions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $action = $this->Actions->patchEntity($action, $this->request->getData());
            if ($this->Actions->save($action)) {
                $this->Flash->success(__('The okres county has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The okres county could not be saved. Please, try again.'));
        }
        $produits = $this->Actions->Produits->find('list', ['limit' => 200]);
        $this->set(compact('action', 'produits'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Okres County id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $action = $this->Actions->get($id);
        if ($this->Actions->delete($action)) {
            $this->Flash->success(__('The okres county has been deleted.'));
        } else {
            $this->Flash->error(__('The okres county could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
