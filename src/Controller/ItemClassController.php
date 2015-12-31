<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItemClass Controller
 *
 * @property \App\Model\Table\ItemClassTable $ItemClass
 */
class ItemClassController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('itemClass', $this->paginate($this->ItemClass));
        $this->set('_serialize', ['itemClass']);
    }

    /**
     * View method
     *
     * @param string|null $id Item Clas id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemClas = $this->ItemClass->get($id, [
            'contain' => []
        ]);
        $this->set('itemClas', $itemClas);
        $this->set('_serialize', ['itemClas']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemClas = $this->ItemClass->newEntity();
        if ($this->request->is('post')) {
            $itemClas = $this->ItemClass->patchEntity($itemClas, $this->request->data);
            if ($this->ItemClass->save($itemClas)) {
                $this->Flash->success(__('The item clas has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The item clas could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('itemClas'));
        $this->set('_serialize', ['itemClas']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Item Clas id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemClas = $this->ItemClass->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemClas = $this->ItemClass->patchEntity($itemClas, $this->request->data);
            if ($this->ItemClass->save($itemClas)) {
                $this->Flash->success(__('The item clas has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The item clas could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('itemClas'));
        $this->set('_serialize', ['itemClas']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item Clas id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemClas = $this->ItemClass->get($id);
        if ($this->ItemClass->delete($itemClas)) {
            $this->Flash->success(__('The item clas has been deleted.'));
        } else {
            $this->Flash->error(__('The item clas could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
