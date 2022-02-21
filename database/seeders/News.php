<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class News extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'name' => '6 THỰC PHẨM BỔ NÃO, TĂNG CƯỜNG CHÍ NHỚ BẠN NÊN ĂN',
                'title' => 'Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...',
                'image' => '',
                'new_id' => 1,
                'status' => 1,
                'description' => 'Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...'
            ],
            [
                'name' => '6 THỰC PHẨM BỔ NÃO, TĂNG CƯỜNG CHÍ NHỚ BẠN NÊN ĂN',
                'title' => 'Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...',
                'new_id' => 1,
                'image' => '',
                'status' => 1,
                'description' => 'Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...'
            ],
            [
                'name' => '6 THỰC PHẨM BỔ NÃO, TĂNG CƯỜNG CHÍ NHỚ BẠN NÊN ĂN',
                'title' => 'Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...',
                'new_id' => 1,
                'image' => '',
                'status' => 0,
                'description' => 'Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...'
            ],
            [
                'name' => '6 THỰC PHẨM BỔ NÃO, TĂNG CƯỜNG CHÍ NHỚ BẠN NÊN ĂN',
                'title' => 'Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...',
                'new_id' => 1,
                'image' => '',
                'status' => 0,
                'description' => 'Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...'
            ],
            [
                'name' => '6 THỰC PHẨM BỔ NÃO, TĂNG CƯỜNG CHÍ NHỚ BẠN NÊN ĂN',
                'title' => 'Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...',
                'new_id' => 1,
                'image' => '',
                'status' => 1,
                'description' => 'Chúng ta đều biết rằng uống cà phê thường giúp chúng ta tỉnh táo lâu hơn và linh hoạt hơn. Để tăng sự tập...'
            ],
            
        ]);
    }
}
