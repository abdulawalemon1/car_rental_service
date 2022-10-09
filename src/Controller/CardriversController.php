<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cardrivers Controller
 *
 * @property \App\Model\Table\CardriversTable $Cardrivers
 * @method \App\Model\Entity\Cardriver[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CardriversController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cars', 'Drivers'],
        ];
        $cardrivers = $this->paginate($this->Cardrivers);

        $this->set(compact('cardrivers'));
    }

    /**
     * View method
     *
     * @param string|null $id Cardriver id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cardriver = $this->Cardrivers->get($id, [
            'contain' => ['Cars', 'Drivers'],
        ]);

        $this->set(compact('cardriver'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cardriver = $this->Cardrivers->newEmptyEntity();
        if ($this->request->is('post')) {
            $cardriver = $this->Cardrivers->patchEntity($cardriver, $this->request->getData());
            if ($this->Cardrivers->save($cardriver)) {
                $this->Flash->success(__('The cardriver has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cardriver could not be saved. Please, try again.'));
        }
        $cars = $this->Cardrivers->Cars->find('list', ['keyField' => 'id', 'valueField' => 'car_model']);
        $drivers = $this->Cardrivers->Drivers->find('list', ['keyField' => 'id', 'valueField' => 'driver_name']);
        $this->set(compact('cardriver', 'cars', 'drivers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cardriver id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cardriver = $this->Cardrivers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cardriver = $this->Cardrivers->patchEntity($cardriver, $this->request->getData());
            if ($this->Cardrivers->save($cardriver)) {
                $this->Flash->success(__('The cardriver has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cardriver could not be saved. Please, try again.'));
        }
        $cars = $this->Cardrivers->Cars->find('list', ['keyField' => 'id', 'valueField' => 'car_num_plate']);
        $drivers = $this->Cardrivers->Drivers->find('list', ['keyField' => 'id', 'valueField' => 'driver_name']);
        $this->set(compact('cardriver', 'cars', 'drivers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cardriver id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cardriver = $this->Cardrivers->get($id);
        if ($this->Cardrivers->delete($cardriver)) {
            $this->Flash->success(__('The cardriver has been deleted.'));
        } else {
            $this->Flash->error(__('The cardriver could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
