namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder {
    public function run(): void {
        $books = [
            ['title' => 'الخيميائي', 'author' => 'باولو كويلو', 'description' => 'رواية عن البحث عن الكنز...', 'genres' => json_encode(['رواية', 'فلسفة'])],
            ['title' => '1984', 'author' => 'جورج أورويل', 'description' => 'ديستوبيا كلاسيكية...', 'genres' => json_encode(['رواية', 'سياسة'])],
            ['title' => 'قوة العادات', 'author' => 'تشارلز دوهيغ', 'description' => 'كتاب تطوير ذاتي...', 'genres' => json_encode(['تطوير ذاتي'])],
            // أضف 20-30 كتاباً هنا
        ];
        foreach ($books as $book) Book::create($book);
    }
}
