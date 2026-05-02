public function up(): void
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('author');
        $table->text('description');
        $table->json('genres');
        $table->string('cover_image')->nullable();
        $table->timestamps();
    });
}
