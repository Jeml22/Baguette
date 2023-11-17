<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Produotros Controller
 *
 * @property \App\Model\Table\ProduotrosTable $Produotros
 * @method \App\Model\Entity\Produotro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProduotrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $produotros = $this->paginate($this->Produotros);

        $this->set(compact('produotros'));
    }

    /**
     * View method
     *
     * @param string|null $id Produotro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produotro = $this->Produotros->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('produotro'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produotro = $this->Produotros->newEmptyEntity();
        if ($this->request->is('post')) {
            $produotro = $this->Produotros->patchEntity($produotro, $this->request->getData());
            if ($this->Produotros->save($produotro)) {
                $this->Flash->success(__('El producto se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El producto no pudo guardarse. Inténtalo de nuevo.'));
        }
        $this->set(compact('produotro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produotro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produotro = $this->Produotros->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produotro = $this->Produotros->patchEntity($produotro, $this->request->getData());
            if ($this->Produotros->save($produotro)) {
                $this->Flash->success(__('El producto se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El producto no pudo guardarse. Inténtalo de nuevo.'));
        }
        $this->set(compact('produotro'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produotro id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produotro = $this->Produotros->get($id);
        if ($this->Produotros->delete($produotro)) {
            $this->Flash->success(__('El producto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El producto no se pudo eliminar. Inténtalo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
