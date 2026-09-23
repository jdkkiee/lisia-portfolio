<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Lisia Zahwa Alifa',
            'role' => 'Informatics Student',
            'university' => 'Universitas Negeri Padang',
            'location' => 'Padang, Indonesia',
            'bio' => "I'm currently learning how to build useful things with technology, while exploring web development and software engineering.",
            'linkedin' => 'https://www.linkedin.com/in/lisia-zahwa-alifa-9136a0386/',
        ];

        $skills = [
            'HTML',
            'CSS',
            'JavaScript',
            'PHP',
            'Laravel',
            'Python',
            'C',
            'MySQL',
            'Git',
            'GitHub',
        ];

        $experiences = [
            [
                'role' => 'KOL Content Creator',
                'company' => 'Analitica',
                'period' => '2026 — Present',
                'description' => 'Creating educational content around TKA, SNBT, and university entrance preparation.',
            ],
            [
                'role' => 'UGC Creator',
                'company' => 'aimasukptn',
                'period' => '2026 — Present',
                'description' => 'Creating short-form educational content for students preparing for university entrance exams.',
            ],
            [
                'role' => 'Quality Assurance Tester',
                'company' => 'aimasukptn',
                'period' => '2026',
                'description' => 'Testing application features, checking user flows, and reporting issues to improve the user experience.',
            ],
        ];

        $projects = [
            [
                'title' => 'Laravel Web Application',
                'description' => 'A web application developed as part of my university coursework.',
                'stack' => 'Laravel · PHP · MySQL',
            ],
            [
                'title' => 'Database Project',
                'description' => 'A university project focused on database design and CRUD functionality.',
                'stack' => 'MySQL · PHP',
            ],
            [
                'title' => 'Algorithm Practice',
                'description' => 'A collection of programming and algorithm exercises from my coursework.',
                'stack' => 'C · Python',
            ],
        ];

        return view('home', compact(
            'profile',
            'skills',
            'experiences',
            'projects'
        ));
    }
}