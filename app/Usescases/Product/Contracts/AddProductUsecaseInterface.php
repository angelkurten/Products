<?php


namespace App\Usescases\Product\Contracts;


interface AddProductUsecaseInterface
{

    public function handle($id, $stock);

}