<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {
      // Karena rupiah tidak menggunakan cent, maka parameter kedua diberi 0
      return 'Rp'.number_format($this->price,0,',','.');
      // Saran, sebaiknya buat fungsi global di AppServiceProvider atau di app\helpers.php
      // Ada kemungkinan bukan hanya dari tabel product yang menggunakan format uang
      // Referensi : https://irfanmg.com/format-mata-uang-rupiah-menggunakan-laravel-blade/
    }

    public function scopeMightAlsoLike($query)
    {
      return $query->inRandomOrder()->take(4);
    }
}
