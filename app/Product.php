<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {
      // Karena rupiah tidak menggunakan cent, maka parameter kedua diberi 0
      $rupiah = number_format($this->price,0,',','.');
      return 'Rp '.$rupiah;
      // Saran, sebaiknya buat fungsi global di AppServiceProvider
      // Ada kemungkinan bukan hanya dari tabel product yang menggunakan format uang
      // Referensi : https://irfanmg.com/format-mata-uang-rupiah-menggunakan-laravel-blade/
    }
}
