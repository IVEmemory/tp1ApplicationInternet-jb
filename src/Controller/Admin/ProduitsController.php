<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Produits Controller
 *
 * @property \App\Model\Table\ProduitsTable $Produits
 *
 * @method \App\Model\Entity\Produit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProduitsController extends AppController {

    public function initialize() {
        parent::initialize();
//        $this->viewBuilder()->setLayout('cakephp_default');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $produits = $this->paginate($this->Produits);

        $this->set(compact('produits'));
    }

    /**
     * View method
     *
     * @param string|null $id Kraj Region id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $produit = $this->Produits->get($id, [
            'contain' => ['EmplacementProduits', 'Actions'],
        ]);

        $this->set('produit', $produit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $produit = $this->Produits->newEntity();
        if ($this->request->is('post')) {
            $produit = $this->Produits->patchEntity($produit, $this->request->getData());
            if ($this->Produits->save($produit)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('produit'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kraj Region id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $produit = $this->Produits->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produit = $this->Produits->patchEntity($produit, $this->request->getData());
            if ($this->Produits->save($produit)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('produit'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kraj Region id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $produit = $this->Produits->get($id);
        if ($this->Produits->delete($produit)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
