
<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserColorsTable extends Migration
{
    public function up()
    {
        Schema::create('user_colors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('color', 7); // Store color as a HEX value (e.g., '#RRGGBB')
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_colors');
    }
}
