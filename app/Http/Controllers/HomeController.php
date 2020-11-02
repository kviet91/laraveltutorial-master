<?php

namespace App\Http\Controllers;

use App\Repositories\StudentRepositoryInterface;
use Illuminate\Http\Request;
use App\Student;
use App\Group;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    protected $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {

        $this->studentRepository = $studentRepository;
    }

    //
    public function index(Request $request)
    {
        $students = $this->studentRepository->all();
        $groups = Group::all();
        return view('home', compact('students', 'groups'));
    }

    public function menu()
    {
        $data_menu = [
            0 => [
                ['id' => 1, 'name' => 'menu 1', 'link' => '#']
                , ['id' => 2, 'name' => 'menu 2', 'link' => '#']
                , ['id' => 3, 'name' => 'menu 3', 'link' => '#']
                , ['id' => 4, 'name' => 'menu 4', 'link' => '#']
                , ['id' => 5, 'name' => 'menu 5', 'link' => '#']
            ],
            1 => [
                ['id' => 6, 'name' => 'menu 6', 'link' => '#']
                , ['id' => 7, 'name' => 'menu 7', 'link' => '#']
                , ['id' => 8, 'name' => 'menu 8', 'link' => '#']
                , ['id' => 9, 'name' => 'menu 9', 'link' => '#']
                , ['id' => 10, 'name' => 'menu 10', 'link' => '#']
            ],
            2 => [
                ['id' => 14, 'name' => 'menu 14', 'link' => '#']
                , ['id' => 15, 'name' => 'menu 15', 'link' => '#']
                , ['id' => 16, 'name' => 'menu 16', 'link' => '#']
                , ['id' => 17, 'name' => 'menu 17', 'link' => '#']
                , ['id' => 18, 'name' => 'menu 18', 'link' => '#']
            ],
            8 => [
                ['id' => 11, 'name' => 'menu 11', 'link' => '#']
                , ['id' => 12, 'name' => 'menu 12', 'link' => '#']
                , ['id' => 13, 'name' => 'menu 13', 'link' => '#']
            ],

        ];

        return view('menu', compact('data_menu'));
    }

    public function changeLanguage($language)
    {
        Session::put('website_language', $language);
        return redirect()->back();
    }

}
