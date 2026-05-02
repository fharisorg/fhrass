namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    protected $fillable = ['title', 'author', 'description', 'genres', 'cover_image'];
    protected $casts = ['genres' => 'array'];
}
