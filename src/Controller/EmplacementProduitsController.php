<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmplacementProduits Controller
 *
 * @property \App\Model\Table\ObecCitiesTable $EmplacementProduits
 *
 * @method \App\Model\Entity\ObecCity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmplacementProduitsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Produits', 'Actions'],
        ];
        $emplacementProduits = $this->paginate($this->EmplacementProduits);

        $this->set(compact('emplacementProduits'));
    }

    /**
     * View method
     *
     * @param string|null $id Obec City id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emplacementProduit = $this->EmplacementProduits->get($id, [
            'contain' => ['Produits', 'Actions', 'Tasks'],
        ]);

        $this->set('emplacementProduit', $emplacementProduit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emplacementProduit = $this->EmplacementProduits->newEntity();
        if ($this->request->is('post')) {
            $emplacementProduit = $this->EmplacementProduits->patchEntity($emplacementProduit, $this->request->getData());
            if ($this->EmplacementProduits->save($emplacementProduit)) {
                $this->Flash->success(__('The obec city has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The obec city could not be saved. Please, try again.'));
        }
        $produits = $this->EmplacementProduits->Produits->find('list', ['limit' => 200]);
        $actions = $this->EmplacementProduits->Actions->find('list', ['limit' => 200]);
        $this->set(compact('emplacementProduit', 'produits', 'actions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Obec City id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emplacementProduit = $this->EmplacementProduits->get($id, [
            'contain' => ['Produits', 'Actions'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emplacementProduit = $this->EmplacementProduits->patchEntity($emplacementProduit, $this->request->getData());
            if ($this->EmplacementProduits->save($emplacementProduit)) {
                $this->Flash->success(__('The obec city has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The obec city could not be saved. Please, try again.'));
        }
        $produits = $this->EmplacementProduits->Produits->find('list', ['limit' => 200]);
        $actions = $this->EmplacementProduits->Actions->find('list', ['limit' => 200]);
        $this->set(compact('emplacementProduit', 'produits', 'actions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Obec City id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emplacementProduit = $this->EmplacementProduits->get($id);
        if ($this->EmplacementProduits->delete($emplacementProduit)) {
            $this->Flash->success(__('The obec city has been deleted.'));
        } else {
            $this->Flash->error(__('The obec city could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
