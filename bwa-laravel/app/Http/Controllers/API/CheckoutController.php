<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CheckoutRequest;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(CheckoutRequest $request)
    {
        $data = $request->except('transaction_details');
        $data['uuid'] = 'TRX' . mt_rand(1000, 9999) . mt_rand(100, 999);

        $transaction = Transaction::create($data);

        $details = []; // Pastikan $details dideklarasikan sebagai array sebelum digunakan.

        foreach ($request->transaction_details as $productId) {
            // Validasi jika ID produk valid
            $product = Product::find($productId);
            if (!$product) {
                return ResponseFormatter::error(null, "Produk dengan ID $productId tidak ditemukan");
            }

            // Kurangi kuantitas produk
            $product->decrement('quantity');

            // Buat detail transaksi
            $details[] = new TransactionDetail([
                'transactions_id' => $transaction->id,
                'products_id' => $productId
            ]);
        }

        if ($transaction->details()->saveMany($details)) {
            return ResponseFormatter::success($transaction);
        } else {
            return ResponseFormatter::error(null, 'Gagal menyimpan detail transaksi');
        }
    }
}
