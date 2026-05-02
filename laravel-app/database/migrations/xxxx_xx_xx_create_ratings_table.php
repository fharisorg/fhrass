public function up(): void
{
    Schema::create('ratings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        $table->foreignId('book_id')->constrained()->cascadeOnDelete();
        $table->tinyInteger('rating')->unsigned();
        $table->timestamps();
        $table->unique(['user_id', 'book_id']);
    });
}
