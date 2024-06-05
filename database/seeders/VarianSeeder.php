<?php
namespace Database\Seeders;

use App\Models\Varian;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VarianSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $brands = [
      'Nike',
      'Adidas',
      'Converse',
      'Vans',
      'New Balance',
      'Balenciaga',
      'Louis Vuitton',
      'Puma',
      'Fila',
      'Skechers',
      'Reebok',
      'Gucci',
      'Prada',
      'Asics',
      'Timberland'
    ];

    foreach ($brands as $brand) {
      Varian::create(['brand' => $brand]);
    }
  }
}
