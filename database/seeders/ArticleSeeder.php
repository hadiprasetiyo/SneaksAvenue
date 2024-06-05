<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Varian;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $shoes = [
      ['brand' => 'Nike', 'image' => 'assets/Nike Air Force 1 07 Fresh.png', 'title' =>'Nike Air Force 1 07 Fresh', 'price' => 2099000],
      ['brand' => 'Adidas', 'image' => 'assets/SAMBA XLG SHOES.avif', 'title' =>'SAMBA XLG SHOES', 'price' => 2400000],
      ['brand' => 'Converse', 'image' => 'assets/Converse X Dungeons And Dragons Chuck 70.jpg', 'title' =>'Converse X Dungeons And Dragons Chuck 70', 'price' => 1999000],
      ['brand' => 'Vans', 'image' => 'assets/Old Skool Shoe.webp', 'title' =>'Old Skool Shoe', 'price' => 1137570],
      ['brand' => 'Puma', 'image' => 'assets/PUMA Exotek NITRO™.avif', 'title' =>'PUMA Exotek NITRO™', 'price' => 2199000],
    ];

    foreach ($shoes as $shoe) {
      $varian = Varian::firstOrCreate(['brand' => $shoe['brand']]);

      Article::create([
        'image' => $shoe['image'],
        'title' => $shoe['title'],
        'price' => $shoe['price'],
        'varian_id' => $varian->id
      ]);
    }
  }
}
