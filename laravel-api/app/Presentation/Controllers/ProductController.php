namespace App\Presentation\Controllers;

use App\Application\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
protected $productService;

public function __construct(ProductService $productService)
{
$this->productService = $productService;
}

public function index()
{
return $this->productService->getAllProducts();
}

// adicionar otros métodos como show, store, update, destroy
}