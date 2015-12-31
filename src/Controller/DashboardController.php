<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Dashboard Controller
 *
 * @property \App\Model\Table\TransactionsTable $Transactions
 */
class DashboardController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
	$tranny = TableRegistry::get('Transactions');
        $this->set('transactions_need_approval', $tranny->find());
        $this->set('_serialize', ['transactions_need_approval']);
    }

    /**
     * View method
     *
     * @param string|null $id Transaction id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transaction = $this->Transactions->get($id, [
            'contain' => []
        ]);
        $this->set('transaction', $transaction);
        $this->set('_serialize', ['transaction']);
    }

}
