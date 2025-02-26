    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        public function up()
        {
            Schema::create('test', function (Blueprint $table) {
                $table->id();
                $table->string('code', 552)->unique();
                
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('test');
        }
    };