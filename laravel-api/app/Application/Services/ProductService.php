namespace App\Application\Services;

use App\Domain\Repositories\ProductRepositoryInterface;

class ProductService
{
protected $productRepository;

public function __construct(ProductRepositoryInterface $productRepository)
{
$this->productRepository = $productRepository;
}

public function getAllProducts()
{
return $this->productRepository->all();
}

// para adicionar aqui os outros métodos como get, create, update, delete
}