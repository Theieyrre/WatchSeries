<?php

namespace Database\Seeders;

use App\Models\MediaDirectory;
use DirectoryIterator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class MediaDirectorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directory = "public/media/";
        foreach (new DirectoryIterator($directory) as $fileInfo) {
            if ($fileInfo->isDot()) continue;
            MediaDirectory::create([
                'name' => $fileInfo->getFilename(),
                'folder_name' => $fileInfo->getFilename()
            ]);
        }
    }
}
