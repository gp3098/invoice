<?php

use App\Invoice;
// use Faker\Factory;
use App\InvoiceItem;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $faker = Factory::create();

        Invoice::truncate(); //清空表并充值自增 ID为零
        InvoiceItem::truncate();

        foreach (range(1, 25) as $i) {
            $discount = $faker->numberBetween(0, 100);
            $subTotal = $faker->numberBetween(500, 1000);
            $invoice = Invoice::create([
                'customer_id' => $i,
                'title' => $faker->sentence,
                'date' => '2019-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'due_date' => '2019-' . mt_rand(1, 12) . '-' . mt_rand(1, 28),
                'discount' => $discount,
                'sub_total' => $subTotal,
                'total' => $subTotal - $discount,
            ]);
            foreach (range(1, mt_rand(2, 6)) as $j) {
                InvoiceItem::create([
                    'invoice_id' => $invoice->id,
                    'description' => $faker->sentence,
                    'qty' => $faker->numberBetween(1, 7),
                    'unit_price' => $faker->numberBetween(100, 400),
                ]);
            }
        }
    }
}
