namespace App\Infrastructure\Repositories;

use App\Domain\Entities\Product;
use App\Domain\Repositories\ProductRepositoryInterface;

class EloquentProductRepository implements ProductRepositoryInterface
{
public function all()
{
return Product::all();
}

// implementar métodos
}