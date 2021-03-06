<?php


namespace App\Usescases\Product;


use App\Entities\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Usescases\Product\Contracts\AddProductUsecaseInterface;
use App\Usescases\Product\Contracts\RemoveProductUsecaseInterface;

class RemoveProductUsecase implements RemoveProductUsecaseInterface
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;


    /**
     * AddProductUsecase constructor.
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {

        $this->productRepository = $productRepository;
    }

    /**
     * @param $object
     * @return Product
     */
    public function handle($object)
    {
        return $this->productRepository->removeStock($object->id, $object->stock);
    }
}