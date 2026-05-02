namespace App\Http\Controllers;
use App\Services\RecommendationService;
use Illuminate\Http\Request;

class RecommendationController extends Controller {
    public function index(Request $request) {
        $recs = (new RecommendationService())->getRecommendations($request->user()->id);
        return response()->json(['success' => true, 'data' => $recs]);
    }
}
