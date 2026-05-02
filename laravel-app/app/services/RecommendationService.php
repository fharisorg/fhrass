namespace App\Services;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class RecommendationService {
    public function getRecommendations(int $userId, int $limit = 10) {
        return Cache::remember("recs_{$userId}", 3600, function () use ($userId, $limit) {
            $response = Http::post('http://127.0.0.1:8001/recommend', [
                'user_id' => $userId,
                'top_n'   => $limit
            ]);
            return $response->successful() ? $response->json()['recommendations'] : [];
        });
    }
}
