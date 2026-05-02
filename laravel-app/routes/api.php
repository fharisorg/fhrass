Route::middleware('auth:sanctum')->get('/recommendations', [RecommendationController::class, 'index']);
