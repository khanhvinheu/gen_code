<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modules;
use DB;

class Module extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listTypeTask=[
            [
                "code"=>'MD0001',
                "name"=>'Quản lý hệ thống',
                "id_parent"=>null,
                "index"=>'1',
                "alias"=>'/*',
                "class"=>'#',
                "icon"=>'el-icon-platform-eleme',
                "path"=>'/',
                "type"=>null,
                "status"=>'1',
            ],
            [
                "code"=>'MD0002',
                "name"=>'Quyền',
                "id_parent"=>1,
                "index"=>null,
                "alias"=>'/list-role/*',
                "class"=>'#',
                "icon"=>null,
                "path"=>'/list-role',
                "type"=>null,
                "status"=>'1',
            ],
            [
                "code"=>'MD0003',
                "name"=>'Module',
                "id_parent"=>1,
                "index"=>null,
                "alias"=>'/list-module/*',
                "class"=>'#',
                "icon"=>null,
                "path"=>'/list-module',
                "type"=>null,
                "status"=>'1',
            ],
            [
                "code"=>'MD0004',
                "name"=>'Tài khoản',
                "id_parent"=>1,
                "index"=>null,
                "alias"=>'/list-user/*',
                "class"=>'#',
                "icon"=>null,
                "path"=>'/list-user',
                "type"=>null,
                "status"=>'1',
            ],  
            [
                "code"=>'MD0005',
                "name"=>'Quản lý danh sách',
                "id_parent"=>null,
                "index"=>'1',
                "alias"=>'/*',
                "class"=>'#',
                "icon"=>'el-icon-platform-eleme',
                "path"=>'/',
                "type"=>null,
                "status"=>'1',
            ],
            [
                "code"=>'MD0006',
                "name"=>'Thông tin đơn vị',
                "id_parent"=>5,
                "index"=>null,
                "alias"=>'/thongtindonvi/*',
                "class"=>'#',
                "icon"=>null,
                "path"=>'/thongtindonvi',
                "type"=>null,
                "status"=>'1',
            ],      
            [
                "code"=>'MD0007',
                "name"=>'Danh sách kỳ thi',
                "id_parent"=>5,
                "index"=>null,
                "alias"=>'/danhsachkythi/*',
                "class"=>'#',
                "icon"=>null,
                "path"=>'/danhsachkythi',
                "type"=>null,
                "status"=>'1',
            ],      
            [
                "code"=>'MD0008',
                "name"=>'Danh sách khối thi',
                "id_parent"=>5,
                "index"=>null,
                "alias"=>'/danhsachkhoithi/*',
                "class"=>'#',
                "icon"=>null,
                "path"=>'/danhsachkhoithi',
                "type"=>null,
                "status"=>'1',
            ],          
            [
                "code"=>'MD0009',
                "name"=>'Danh sách môn thi',
                "id_parent"=>5,
                "index"=>null,
                "alias"=>'/danhsachmonthi/*',
                "class"=>'#',
                "icon"=>null,
                "path"=>'/danhsachmonthi',
                "type"=>null,
                "status"=>'1',
            ],          
            [
                "code"=>'MD0010',
                "name"=>'Danh sách phòng thi',
                "id_parent"=>5,
                "index"=>null,
                "alias"=>'/danhsachphongthi/*',
                "class"=>'#',
                "icon"=>null,
                "path"=>'/danhsachphongthi',
                "type"=>null,
                "status"=>'1',
            ],          
            [
                "code"=>'MD0011',
                "name"=>'Danh sách năm học',
                "id_parent"=>5,
                "index"=>null,
                "alias"=>'/danhsachnamhoc/*',
                "class"=>'#',
                "icon"=>null,
                "path"=>'/danhsachnamhoc',
                "type"=>null,
                "status"=>'1',
            ],          
            [
                "code"=>'MD0012',
                "name"=>'Danh sách thí sinh',
                "id_parent"=>null,
                "index"=>null,
                "alias"=>'/danhsachthisinh/*',
                "class"=>'#',
                "icon"=>null,
                "path"=>'/danhsachthisinh',
                "type"=>null,
                "status"=>'1',
            ],    
            [
                "code"=>'MD0013',
                "name"=>'Kết quả sắp phòng thi',
                "id_parent"=>null,
                "index"=>null,
                "alias"=>'/ketquasapphongthi/*',
                "class"=>'#',
                "icon"=>null,
                "path"=>'/ketquasapphongthi',
                "type"=>null,
                "status"=>'1',
            ],           
            // [
            //     "code"=>'MD0008',
            //     "name"=>'Cài đặt chung',
            //     "id_parent"=>null,
            //     "index"=>null,
            //     "alias"=>'/settings/*',
            //     "class"=>'#',
            //     "icon"=>null,
            //     "path"=>'/settings',
            //     "type"=>null,
            //     "status"=>'1',
            // ],

        ];
         // Disable foreign key checks to prevent issues during truncation
         DB::statement('SET FOREIGN_KEY_CHECKS=0;');

         // Truncate the table
         DB::table('modules')->truncate();

         // Enable foreign key checks again
         DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        foreach ($listTypeTask as $index =>$value){
            $data =$value;
            Modules::insert($data);
        }
        dump('Add list module success');
    }
}
