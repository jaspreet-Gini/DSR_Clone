<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;
use Cake\ORM\TableLocator;
use Mpdf\Mpdf;
use Cake\Mailer\Mailer;
use Cake\Mailer\Email;
use Cake\View\ViewBuilder;
use Cake\Event\EventInterface; 
use Cake\Controller\Event\Event;

/**
 * Dsr Controller
 *
 * @property \App\Model\Table\DsrTable $Dsr
 */
class DsrController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // $this->Authorization->authorize($dsr);
        $this->Authorization->skipAuthorization();
        $query = $this->Dsr->find();

        $test = $query->where(['user_id' => $this->Authentication->getIdentity()->get('id')]);
        // dd($test);

        $dsr = $this->paginate($test);

        $this->set(compact('dsr'));
    }
    /**
     * View method
     *
     * @param string|null $id Dsr id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        // $this->Authorization->skipAuthorization();
        $this->Authorization->authorize($dsr);
        $dsr = $this->Dsr->get($id, contain: []);
        $this->set(compact('dsr'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dsr = $this->Dsr->newEmptyEntity();
        $this->Authorization->authorize($dsr);
        if ($this->request->is('post')) {
            $dsr = $this->Dsr->patchEntity($dsr, $this->request->getData());
            $dsr->user_id = $this->request->getAttribute('identity')->getIdentifier();

            if ($this->Dsr->save($dsr)) {
                $this->Flash->success(__('The dsr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dsr could not be saved. Please, try again.'));
        }
        $this->set(compact('dsr'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dsr id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $dsr = $this->Dsr->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dsr = $this->Dsr->patchEntity($dsr, $this->request->getData());
            
            if ($this->Dsr->save($dsr)) {
                $this->Flash->success(__('The dsr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dsr could not be saved. Please, try again.'));
        }
        $this->set(compact('dsr'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dsr id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['post', 'delete']);
        $dsr = $this->Dsr->get($id);
        // $this->Authorization->authorize($dsr);
        if ($this->Dsr->delete($dsr)) {
            $this->Flash->success(__('The dsr has been deleted.'));
        } else {
            $this->Flash->error(__('The dsr could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function sendEmails()
    {
        $this->Authorization->skipAuthorization();
        $mailer = new Mailer('test');
        $data = $this->DSR->find('all');
        // dd($data);
        $mailer->setTransport('gmail'); 
        $mailer->setFrom(['testing12.ginilytics@gmail.com' => 'Sender Side'])
            ->setTo(['jaspreet@ginilytics.com' => 'Receiver Side'])
            ->setSubject('Daily Status Report')
            ->viewBuilder()  
                ->setTemplate('sendemails');  
        $mailer->setViewVars(['value' => $data]);
        $mailer->setEmailFormat('html');

        $mailer->deliver(); 
        return $this->redirect($this->referer());
    }

    public function logout()
    {
        $this->Authorization->skipAuthorization();
        $result = $this->Authentication->getResult();
        if ($result && $result->isValid()) {
            $this->Authentication->logout();

            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }
}
