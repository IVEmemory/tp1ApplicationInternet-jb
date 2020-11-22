<?php

namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * Produits Controller
 *
 * @property \App\Model\Table\KrajRegionsTable $Produits
 *
 * @method \App\Model\Entity\KrajRegion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KrajRegionsController extends AppController {

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $produits = $this->Produits->find('all');
        $this->set([
            'produits' => $produits,
            '_serialize' => ['produits']
        ]);
    }

    public function view($id)
    {
        $produit = $this->Produits->get($id);
        $this->set([
            'produit' => $produit,
            '_serialize' => ['produit']
        ]);
    }

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $produit = $this->Produits->newEntity($this->request->getData());
        if ($this->Produits->save($produit)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'produit' => $produit,
            '_serialize' => ['message', 'produit']
        ]);
    }

    public function edit($id)
    {
        $this->request->allowMethod(['patch', 'post', 'put']);
        $produit = $this->Produits->get($id);
        $produit = $this->Produits->patchEntity($produit, $this->request->getData());
        if ($this->Produits->save($produit)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['delete']);
        $produit = $this->Produits->get($id);
        $message = 'Deleted';
        if (!$this->Produits->delete($produit)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }


}
