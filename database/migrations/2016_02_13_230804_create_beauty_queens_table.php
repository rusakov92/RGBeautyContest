<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateBeautyQueensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beauty_queens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->unsignedInteger('rg_number');
            $table->timestamps();
        });

        $date = date('Y-m-d H:i:s');

        $data = [
            ['name' => 'Temenuzhka Lukaycheva', 'rg_number' => 17, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Valentina Stankova', 'rg_number' => 18, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Vanya Gelencheva', 'rg_number' => 20, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Diyana Baltova', 'rg_number' => 21, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Maria Mihailova', 'rg_number' => 22, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Niya Koeva', 'rg_number' => 24, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Dimitrina Kirova', 'rg_number' => 26, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hyulya Gyuler', 'rg_number' => 28, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Gergana Karshanova', 'rg_number' => 29, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Veselina Ilieva', 'rg_number' => 31, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Yana Manova', 'rg_number' => 34, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Anelia Kidikova', 'rg_number' => 35, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Kate Dishlieva', 'rg_number' => 36, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Tanya Dishlyanova', 'rg_number' => 37, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Gabriela Dulgerova', 'rg_number' => 44, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Gergana Popova', 'rg_number' => 45, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Gergana Petkova', 'rg_number' => 46, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Nikolina Balabanova', 'rg_number' => 49, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Tsvetelina Vlaseva', 'rg_number' => 51, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Kristina Mincheva', 'rg_number' => 53, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Daniela Trifonova', 'rg_number' => 54, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Elisaveta Markova', 'rg_number' => 58, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Milena Shishmanova', 'rg_number' => 62, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Lora Lupova', 'rg_number' => 65, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Ivana Yalamova', 'rg_number' => 67, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Cvetelina Gerginska', 'rg_number' => 69, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Ivelina Puhteva', 'rg_number' => 70, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Daniela Kochova', 'rg_number' => 74, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Elena Vasileva', 'rg_number' => 75, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Lora Arshinkova', 'rg_number' => 82, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Ivelina Ilieva', 'rg_number' => 87, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Tsvetomira Uzunova', 'rg_number' => 89, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Elitsa Georgieva', 'rg_number' => 96, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Toni Nekezova', 'rg_number' => 98, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Angela Ghanem', 'rg_number' => 102, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Sofiya Urumova', 'rg_number' => 104, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hristiana Petkova', 'rg_number' => 105, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Violeta Chausheva', 'rg_number' => 106, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Mariana Trendafilova', 'rg_number' => 111, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Dariya Dishkova', 'rg_number' => 118, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Kalina Krumova', 'rg_number' => 123, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Plamena Radneva', 'rg_number' => 124, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Gergana Peycheva', 'rg_number' => 126, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hristina Karaivanova', 'rg_number' => 127, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Ana Dimitrova', 'rg_number' => 130, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Marieta Ilieva', 'rg_number' => 132, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Gergana Prodanova', 'rg_number' => 134, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Beloslava Bankova', 'rg_number' => 137, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Ekaterina Petkova', 'rg_number' => 138, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Antoaneta Azmanova', 'rg_number' => 139, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Penka Vasileva', 'rg_number' => 141, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Aneliya Popova', 'rg_number' => 142, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Anna Stavreva', 'rg_number' => 143, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Dimitria Gadzheva', 'rg_number' => 146, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Genka Pacheva', 'rg_number' => 147, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Valeria Hassan', 'rg_number' => 154, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Militsa Kalinova', 'rg_number' => 156, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Melaniya Kabadzhova', 'rg_number' => 157, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Eli Markova', 'rg_number' => 159, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Silvana Bayreva', 'rg_number' => 160, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Galina Grozeva', 'rg_number' => 162, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Neli Mateva', 'rg_number' => 165, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Vaska Kabasanova', 'rg_number' => 166, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Yordanka Dimitrova', 'rg_number' => 167, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Evelin Rangelova', 'rg_number' => 169, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Fidana Burova', 'rg_number' => 171, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Eleonora Manolova', 'rg_number' => 172, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Kalina Georgieva', 'rg_number' => 174, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Miroslava Kushleva', 'rg_number' => 176, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Velichka Trendafilova', 'rg_number' => 177, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Maria Rashkova', 'rg_number' => 180, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Tanya Rangelova', 'rg_number' => 184, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Irina Veleva', 'rg_number' => 185, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Galina Angelova', 'rg_number' => 188, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Elena Nesheva', 'rg_number' => 190, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Nina Grigorova', 'rg_number' => 191, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Milena Pungerova', 'rg_number' => 192, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Daniela Petkova', 'rg_number' => 196, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Luiza Badzhakyan', 'rg_number' => 197, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Tanya Pushkova', 'rg_number' => 199, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Antonia Pavlova', 'rg_number' => 201, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Daniela Ilieva', 'rg_number' => 204, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Elitsa Kapitanova', 'rg_number' => 208, 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Aleksandra Spirova', 'rg_number' => 211, 'created_at' => $date, 'updated_at' => $date],
        ];

        DB::table('beauty_queens')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('beauty_queens');
    }
}
