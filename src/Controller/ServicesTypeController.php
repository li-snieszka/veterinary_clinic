<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ServicesType Controller
 *
 * @property \App\Model\Table\ServicesTypeTable $ServicesType
 * @method \App\Model\Entity\ServicesType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServicesTypeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $servicesType = $this->paginate($this->ServicesType);

        $this->set(compact('servicesType'));
    }

    /**
     * View method
     *
     * @param string|null $id Services Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servicesType = $this->ServicesType->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('servicesType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servicesType = $this->ServicesType->newEmptyEntity();
        if ($this->request->is('post')) {
            $servicesType = $this->ServicesType->patchEntity($servicesType, $this->request->getData());
            if ($this->ServicesType->save($servicesType)) {
                $this->Flash->success(__('The services type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The services type could not be saved. Please, try again.'));
        }
        $this->set(compact('servicesType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Services Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servicesType = $this->ServicesType->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servicesType = $this->ServicesType->patchEntity($servicesType, $this->request->getData());
            if ($this->ServicesType->save($servicesType)) {
                $this->Flash->success(__('The services type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The services type could not be saved. Please, try again.'));
        }
        $this->set(compact('servicesType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Services Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servicesType = $this->ServicesType->get($id);
        if ($this->ServicesType->delete($servicesType)) {
            $this->Flash->success(__('The services type has been deleted.'));
        } else {
            $this->Flash->error(__('The services type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
