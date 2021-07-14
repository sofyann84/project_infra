<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Site;
use App\Models\Task;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // data 1
        $site = Site::create([
            'sitename' => 'site name 1',
            'area' => 'area 1'
        ]);

        Task::create([
            'taskname' => 'proj 1',
            'vendor' => 'BA',
            'siteid' => $site->id
        ]);

        // data 2
        $site = Site::create([
            'sitename' => 'site name 2',
            'area' => 'area 1'
        ]);

        Task::create([
            'taskname' => 'proj 2',
            'vendor' => 'BA',
            'siteid' => $site->id
        ]);

        // data 3
        $site = Site::create([
            'sitename' => 'site name 3',
            'area' => 'area 1'
        ]);

        Task::create([
            'taskname' => 'proj 3',
            'vendor' => 'BA',
            'siteid' => $site->id
        ]);

        // data 4
        $site = Site::create([
            'sitename' => 'site name 4',
            'area' => 'area 1'
        ]);

        Task::create([
            'taskname' => 'proj 4',
            'vendor' => 'BO',
            'siteid' => $site->id
        ]);

        // data 5
        $site = Site::create([
            'sitename' => 'site name 5',
            'area' => 'area 1'
        ]);

        Task::create([
            'taskname' => 'proj 5',
            'vendor' => 'BO',
            'siteid' => $site->id
        ]);

        // data 6
        $site = Site::create([
            'sitename' => 'site name 6',
            'area' => 'area 1'
        ]);

        Task::create([
            'taskname' => 'proj 6',
            'vendor' => 'BO',
            'siteid' => $site->id
        ]);

        // data 7
        $site = Site::create([
            'sitename' => 'site name 7',
            'area' => 'area 1'
        ]);

        Task::create([
            'taskname' => 'proj 7',
            'vendor' => 'BO',
            'siteid' => $site->id
        ]);

        // data 8
        $site = Site::create([
            'sitename' => 'site name 8',
            'area' => 'area 1'
        ]);

        Task::create([
            'taskname' => 'proj 8',
            'vendor' => 'NE',
            'siteid' => $site->id
        ]);

        // data 9
        $site = Site::create([
            'sitename' => 'site name 9',
            'area' => 'area 2'
        ]);

        Task::create([
            'taskname' => 'proj 9',
            'vendor' => 'NE',
            'siteid' => $site->id
        ]);

        // data 10
        $site = Site::create([
            'sitename' => 'site name 10',
            'area' => 'area 2'
        ]);

        Task::create([
            'taskname' => 'proj 10',
            'vendor' => 'NE',
            'siteid' => $site->id
        ]);

        // data 11
        $site = Site::create([
            'sitename' => 'site name 11',
            'area' => 'area 2'
        ]);

        Task::create([
            'taskname' => 'proj 11',
            'vendor' => 'NE',
            'siteid' => $site->id
        ]);

        // data 12
        $site = Site::create([
            'sitename' => 'site name 12',
            'area' => 'area 3'
        ]);

        Task::create([
            'taskname' => 'proj 12',
            'vendor' => 'AI',
            'siteid' => $site->id
        ]);

        // data 13
        $site = Site::create([
            'sitename' => 'site name 13',
            'area' => 'area 3'
        ]);

        Task::create([
            'taskname' => 'proj 13',
            'vendor' => 'AI',
            'siteid' => $site->id
        ]);

        // data 14
        $site = Site::create([
            'sitename' => 'site name 14',
            'area' => 'area 3'
        ]);

        Task::create([
            'taskname' => 'proj 14',
            'vendor' => 'AI',
            'siteid' => $site->id
        ]);

        // data 15
        $site = Site::create([
            'sitename' => 'site name 15',
            'area' => 'area 3'
        ]);

        Task::create([
            'taskname' => 'proj 15',
            'vendor' => 'AI',
            'siteid' => $site->id
        ]);

        // data 16
        $site = Site::create([
            'sitename' => 'site name 16',
            'area' => 'area 3'
        ]);

        Task::create([
            'taskname' => 'proj 16',
            'vendor' => 'AI',
            'siteid' => $site->id
        ]);

        // data 17
        $site = Site::create([
            'sitename' => 'site name 17',
            'area' => 'area 3'
        ]);

        Task::create([
            'taskname' => 'proj 17',
            'vendor' => 'AI',
            'siteid' => $site->id
        ]);

        // data 18
        $site = Site::create([
            'sitename' => 'site name 18',
            'area' => 'area 3'
        ]);

        Task::create([
            'taskname' => 'proj 18',
            'vendor' => 'O2',
            'siteid' => $site->id
        ]);

        // data 19
        $site = Site::create([
            'sitename' => 'site name 19',
            'area' => 'area 4'
        ]);

        Task::create([
            'taskname' => 'proj 19',
            'vendor' => 'O2',
            'siteid' => $site->id
        ]);

        // data 20
        $site = Site::create([
            'sitename' => 'site name 20',
            'area' => 'area 4'
        ]);

        Task::create([
            'taskname' => 'proj 20',
            'vendor' => 'O2',
            'siteid' => $site->id
        ]);
    }
}
