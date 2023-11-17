<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Inventarios Controller
 *
 * @property \App\Model\Table\InventariosTable $Inventarios
 * @method \App\Model\Entity\Inventario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InventariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $inventarios = $this->paginate($this->Inventarios);

        $this->set(compact('inventarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Inventario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inventario = $this->Inventarios->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('inventario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inventario = $this->Inventarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $inventario = $this->Inventarios->patchEntity($inventario, $this->request->getData());
            if ($this->Inventarios->save($inventario)) {
                $this->Flash->success(__('Se ha añadido el inventario.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido añadir el inventario, inténtelo de nuevo.'));
        }
        $this->set(compact('inventario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inventario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inventario = $this->Inventarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inventario = $this->Inventarios->patchEntity($inventario, $this->request->getData());
            if ($this->Inventarios->save($inventario)) {
                $this->Flash->success(__('Se ha editado el inventario.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido editar el inventario, inténtelo de nuevo.'));
        }
        $this->set(compact('inventario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inventario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inventario = $this->Inventarios->get($id);
        if ($this->Inventarios->delete($inventario)) {
            $this->Flash->success(__('Se ha eliminado el inventario'));
        } else {
            $this->Flash->error(__('No se ha podido eliminar el inventario, inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
