<?php

use Illuminate\Database\Seeder;
use App\Models\Rap;

class RapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rap::create([
            'id'                => 1,
            'name'              => 'BHD Star Cineplex - 3/2',
            'diachi'            => 'L5-Vincom 3/2, 3C Đường 3/2, Q.10',
            'groupId'           => 1,
        ]);
        Rap::create([
            'id'                => 2,
            'name'              => 'BHD Star Cineplex - Bitexco',
            'diachi'            => 'L3-Bitexco Icon 68, 2 Hải Triều, Q.1',
            'groupId'           => 1,
        ]);
        Rap::create([
            'id'                => 3,
            'name'              => 'BHD Star Cineplex - Phạm Hùng',
            'diachi'            => 'L4-Satra Phạm Hùng, C6/27 Phạm Hùng, Bình Chánh',
            'groupId'           => 1,
        ]);
        Rap::create([
            'id'                => 4,
            'name'              => 'BHD Star Cineplex - Bitexco',
            'diachi'            => 'L4-Vincom Plaza, 50 Lê Văn Việt, Q.9',
            'groupId'           => 1,
        ]);
        Rap::create([
            'id'                => 5,
            'name'              => 'BHD Star Cineplex - Vincom Quang Trung',
            'diachi'            => 'B1-Vincom QT, 190 Quang Trung, Gò Vấp',
            'groupId'           => 1,
        ]);
        Rap::create([
            'id'                => 6,
            'name'              => 'BHD Star Cineplex - Vincom Thảo Điền',
            'diachi'            => 'L5-Megamall, 159 XL Hà Nội, Q.2',
            'groupId'           => 1,
        ]);
        Rap::create([
            'id'                => 7,
            'name'              => 'Dongda - Trần Hưng Đạo',
            'diachi'            => '840 Trần Hưng Đạo, Q.5',
            'groupId'           => 2,
        ]);
        Rap::create([
            'id'                => 8,
            'name'              => 'CNS - Hai Bà Trưng',
            'diachi'            => '135 Hai Bà Trưng, Bến Nghé, Q.1',
            'groupId'           => 3,
        ]);
        Rap::create([
            'id'                => 9,
            'name'              => 'CNS - Quốc Thanh',
            'diachi'            => '271 Nguyễn Trãi, Q.1',
            'groupId'           => 3,
        ]);
        Rap::create([
            'id'                => 10,
            'name'              => 'GLX - Huỳnh Tấn Phát',
            'diachi'            => '1362 Huỳnh Tấn Phát, KP1, Phú Mỹ, Q.7',
            'groupId'           => 4,
        ]);
        Rap::create([
            'id'                => 11,
            'name'              => 'GLX - Kinh Dương Vương',
            'diachi'            => '718bis Kinh Dương Vương, Q.6',
            'groupId'           => 4,
        ]);
        Rap::create([
            'id'                => 12,
            'name'              => 'GLX - Nguyễn Du',
            'diachi'            => '116 Nguyễn Du, Q.1',
            'groupId'           => 4,
        ]);
        Rap::create([
            'id'                => 13,
            'name'              => 'GLX - Nguyễn Văn Quá',
            'diachi'            => '119B Nguyễn Văn Quá, Đông Hưng Thuận, Q.12, TPHCM',
            'groupId'           => 4,
        ]);
        Rap::create([
            'id'                => 14,
            'name'              => 'GLX - Phạm Văn Chí',
            'diachi'            => 'Lầu 5, TTTM Platinum Plaza, 634 Phạm Văn Chí, Q.6',
            'groupId'           => 4,
        ]);
        Rap::create([
            'id'                => 15,
            'name'              => 'GLX - Quang Trung',
            'diachi'            => 'L3-Co.opmart Foodcosa, 304A Quang Trung, Gò Vấp',
            'groupId'           => 4,
        ]);
        Rap::create([
            'id'                => 16,
            'name'              => 'GLX - Tân Bình',
            'diachi'            => '246 Nguyễn Hồng Đào, Tân Bình',
            'groupId'           => 4,
        ]);
        Rap::create([
            'id'                => 17,
            'name'              => 'GLX - Trung Chánh',
            'diachi'            => 'TTVH Q12 – 09, Q L 22, Trung Mỹ Tây , Q.12',
            'groupId'           => 4,
        ]);
        Rap::create([
            'id'                => 18,
            'name'              => 'Lotte - Cantavil',
            'diachi'            => 'L7-Cantavil Premier, Xa Lộ Hà Nội, Q.2',
            'groupId'           => 5,
        ]);
        Rap::create([
            'id'                => 19,
            'name'              => 'Lotte - Cộng Hòa',
            'diachi'            => 'L4-Pico Plaza, 20 Cộng Hòa, Tân Bình',
            'groupId'           => 5,
        ]);
        Rap::create([
            'id'                => 20,
            'name'              => 'Lotte - Diamond',
            'diachi'            => 'L13-Diamond Plaza, 34 Lê Duẩn, Q.1',
            'groupId'           => 5,
        ]);
        Rap::create([
            'id'                => 21,
            'name'              => 'Lotte - Gò Vấp',
            'diachi'            => 'L3-Lotte Mart, 242 Nguyễn Văn Lượng, Gò Vấp',
            'groupId'           => 5,
        ]);
        Rap::create([
            'id'                => 22,
            'name'              => 'Lotte - Nam Sài Gòn',
            'diachi'            => 'L3-Lotte Mart NSG, 469 Nguyễn Hữu Thọ, Q.7',
            'groupId'           => 5,
        ]);
        Rap::create([
            'id'                => 23,
            'name'              => 'Lotte - Nowzone',
            'diachi'            => 'L5-Nowzone, 235 Nguyễn Văn Cừ, Q.1',
            'groupId'           => 5,
        ]);
        Rap::create([
            'id'                => 24,
            'name'              => 'Lotte - Phú Thọ',
            'diachi'            => 'L4-Lotte Mart Phú Thọ, Q.11',
            'groupId'           => 5,
        ]);
        Rap::create([
            'id'                => 25,
            'name'              => 'Lotte - Thủ Đức',
            'diachi'            => 'L2-Joy Citipoint, KCX Linh Trung, Thủ Đức',
            'groupId'           => 5,
        ]);
        Rap::create([
            'id'                => 26,
            'name'              => 'MegaGS - Cao Thắng',
            'diachi'            => '19 Cao Thắng, Q.3',
            'groupId'           => 6,
        ]);
    }
}
