<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Produpanes Controller
 *
 * @property \App\Model\Table\ProdupanesTable $Produpanes
 * @method \App\Model\Entity\Produpane[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProdupanesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $produpanes = $this->paginate($this->Produpanes);

        $this->set(compact('produpanes'));
    }

    /**
     * View method
     *
     * @param string|null $id Produpane id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produpane = $this->Produpanes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('produpane'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produpane = $this->Produpanes->newEmptyEntity();
        if ($this->request->is('post')) {
            $produpane = $this->Produpanes->patchEntity($produpane, $this->request->getData());
            if ($this->Produpanes->save($produpane)) {
                $this->Flash->success(__('El producto se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El producto no pudo guardarse. Inténtalo de nuevo.'));
        }
        $this->set(compact('produpane'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produpane id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produpane = $this->Produpanes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produpane = $this->Produpanes->patchEntity($produpane, $this->request->getData());
            if ($this->Produpanes->save($produpane)) {
                $this->Flash->success(__('El producto se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El producto no pudo guardarse. Inténtalo de nuevo.'));
        }
        $this->set(compact('produpane'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produpane id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produpane = $this->Produpanes->get($id);
        if ($this->Produpanes->delete($produpane)) {
            $this->Flash->success(__('El producto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El producto no se pudo eliminar. Inténtalo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
