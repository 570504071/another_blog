<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class AddSomeUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 以下数据仅为测试用，手动插入数据，能查询到就说明连接到数据库了
        /*
        User::create([
            'email' => 'your@email.com',
            // Hash是基于Bcrypt的一个类
            'password' => Hash::make('password'),
            'name' => 'John Doe'
                ]);
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
