<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $products = [
        ['id' => 1, 'title' => 'Ноутбук ASUS', 'price' => 45000, 'path' => 'asus.jpg'],
        ['id' => 2, 'title' => 'Мышь Logitech', 'price' => 1500, 'path' => 'logitech.webp'],
        ['id' => 3, 'title' => 'Клавиатура Keychron', 'price' => 8900, 'path' => 'klava.webp'],
        ['id' => 4, 'title' => 'Монитор Dell 27"', 'price' => 22000, 'path' => 'dell.webp'],
        ['id' => 5, 'title' => 'USB-хаб', 'price' => 800, 'path' => 'usb.webp'],
        ['id' => 6, 'title' => 'Веб-камера HD', 'price' => 3200, 'path' => 'webc.webp'],
        ['id' => 7, 'title' => 'Наушники Sony', 'price' => 12000, 'path' => 'sony.webp'],
        ['id' => 8, 'title' => 'Коврик для мыши', 'price' => 500, 'path' => 'kov.webp'],
        ['id' => 9, 'title' => 'SSD Samsung 1TB', 'price' => 7500, 'path' => 'ssd.webp'],
        ['id' => 10, 'title' => 'Оперативная память 16GB', 'price' => 4200, 'path' => 'op.webp'],
    ];

   public function showIndex()
    {
        return view('home');
    }

    
    public function showArray()
    {
        return view('array', ['products' => $this->products]);
    }

   
    public function shuffleProducts()
    {
        $shuffled = $this->products;
        shuffle($shuffled);
        return view('array', ['products' => $shuffled]);
    }

    
    public function sortProducts()
    {
        $sorted = $this->products;
        usort($sorted, function($a, $b) {
            if($a['price'] < $b['price']) {
                return -1;
            } elseif($a['price'] > $b['price']) {
                return 1;
            } else {
                return 0;
            }
            
        }); 
        return view('array', ['products' => $sorted]);
    }

    
    public function filterProducts()
    {
        $filtered = array_filter($this->products, function($item) {
            return $item['price'] > 1000;
           
        });
        return view('array', ['products' => $filtered]);
    }
}
