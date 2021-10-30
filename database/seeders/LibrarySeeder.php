<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('libraries')->truncate();
        \Illuminate\Support\Facades\DB::table('libraries')->insert([
            [
                'bookid' => 1,
                'authorid' => 6,
                'title' => 'Đắc Nhân Tâm – Dale Carnegie',
                'ISBN' => 'Nhà xuất bản Dân Trí',
                'pub_year' => 2012,
                'available' => 5
            ],
            [
                'bookid' => 2,
                'authorid' => 5,
                'title' => 'Nhà giả kim – Paulo Coelho',
                'ISBN' => 'Nhà xuất bản Văn học',
                'pub_year' => 2013,
                'available' => 5
            ],
            [
                'bookid' => 3,
                'authorid' => 4,
                'title' => 'Tội Ác Và Hình Phạt – Fyodor Dostoevsky',
                'ISBN' => 'Nhà xuất bản Văn học',
                'pub_year' => 2015,
                'available' => 5
            ],

            [
                'bookid' => 4,
                'authorid' => 3,
                'title' => 'Tuổi Trẻ Đáng Giá Bao Nhiêu? Rosie Nguyễn',
                'ISBN' => 'Nhà xuất bản Dân Trí',
                'pub_year' => 2020,
                'available' => 5
            ],
            [
                'bookid' => 5,
                'authorid' => 2,
                'title' => 'Mỗi lần vấp ngã là một lần Trưởng Thành',
                'ISBN' => 'Nhà xuất bản Thanh Niên',
                'pub_year' => 2019,
                'available' => 5
            ],
            [
                'bookid' => 6,
                'authorid' => 1,
                'title' => 'Đời thay đổi khi chúng ta thay đổi – Andrew Matthews',
                'ISBN' => 'Nhà xuất bản Dân Trí',
                'pub_year' => 2008,
                'available' => 5
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
