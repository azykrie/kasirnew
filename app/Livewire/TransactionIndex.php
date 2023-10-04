<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\Transaction;
use Livewire\Component;

class TransactionIndex extends Component
{
    public $item_id;
    public $pay;
    
    protected $rules = [
        'item_id' => 'required|unique:transaction',
        
    ];
    public function submit(){
        $this->validate();
        $transaction = Transaction::create([
            'item_id' => $this->item_id,
            'quantity' => 1,
            'total' => 1,
            
        ]);
        $transaction->total = $transaction->item->price;
        $transaction->save();

        session()->flash('message', 'Product berhasil di tambahkan');
    }
    
    public function render()
    {
        return view('livewire.transaction-index' , [
            'items' => Item::orderBy('item_name' , 'asc')->get(),
            'transactions' => Transaction::get()
        ]);
    }

        public function increment($id)
    {
        $transaction = Transaction::find($id);
        $transaction->update([
            'quantity' => $transaction->quantity + 1,
            'total' => $transaction->item->price*($transaction->quantity + 1)
        ]);

        session()->flash('message', 'quantity product berhasil di tambah');

    }
    
    public function decrement($id)
    {
        $transaction = Transaction::find($id);
        $transaction->update([
            'quantity' => $transaction->quantity - 1,
            'total' => $transaction->item->price*($transaction->quantity - 1)
        ]);

        session()->flash('message', ' quantity product berhasil di kurang');

    }

        public function deleteTransaction($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
        session()->flash('message', 'Transaction berhasil di hapus');
    }

}