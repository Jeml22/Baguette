<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Produpasteles Controller
 *
 * @property \App\Model\Table\ProdupastelesTable $Produpasteles
 * @method \App\Model\Entity\Produpastele[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProdupastelesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $produpasteles = $this->paginate($this->Produpasteles);

        $this->set(compact('produpasteles'));
    }

    /**
     * View method
     *
     * @param string|null $id Produpastele id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produpastele = $this->Produpasteles->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('produpastele'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produpastele = $this->Produpasteles->newEmptyEntity();
        if ($this->request->is('post')) {
            $produpastele = $this->Produpasteles->patchEntity($produpastele, $this->request->getData());
            if ($this->Produpasteles->save($produpastele)) {
                $this->Flash->success(__('El producto se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El producto no pudo guardarse. Inténtalo de nuevo.'));
        }
        $this->set(compact('produpastele'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produpastele id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produpastele = $this->Produpasteles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produpastele = $this->Produpasteles->patchEntity($produpastele, $this->request->getData());
            if ($this->Produpasteles->save($produpastele)) {
                $this->Flash->success(__('El producto se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El producto no pudo guardarse. Inténtalo de nuevo.'));
        }
        $this->set(compact('produpastele'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produpastele id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produpastele = $this->Produpasteles->get($id);
        if ($this->Produpasteles->delete($produpastele)) {
            $this->Flash->success(__('El producto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El producto no se pudo eliminar. Inténtalo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
