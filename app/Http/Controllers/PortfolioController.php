<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'Leosam Financial Consultants',
                'description' => 'A comprehensive online e-learning platform delivering industry-certified accounting training through Moodle. Provides self-paced CPA preparation, software proficiency courses, and corporate training programs with 24/7 accessibility.',
                'image' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=800&h=600&fit=crop',
                'tech_stack' => ['Moodle', 'PHP', 'MySQL', 'Bootstrap', 'jQuery'],
                'demo_url' => 'https://leosamfinco.com/',
                'github_url' => 'https://github.com/otienopetert',
                'gradient' => 'from-purple-500 to-pink-500',
            ],
            [
                'id' => 2,
                'title' => 'Task Management App',
                'description' => 'Collaborative task manager with real-time updates, team workspaces, and productivity analytics.',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&h=600&fit=crop',
                'tech_stack' => ['React', 'Node.js', 'MongoDB', 'Socket.io'],
                'demo_url' => '#',
                'github_url' => '#',
                'gradient' => 'from-blue-500 to-cyan-500',
            ],
            [
                'id' => 3,
                'title' => 'Weather Dashboard',
                'description' => 'Interactive weather forecast application with location search, hourly/weekly forecasts, and weather maps.',
                'image' => 'https://images.unsplash.com/photo-1592210454359-9043f067919b?w=800&h=600&fit=crop',
                'tech_stack' => ['JavaScript', 'API Integration', 'Chart.js', 'Tailwind CSS'],
                'demo_url' => '#',
                'github_url' => '#',
                'gradient' => 'from-amber-500 to-orange-500',
            ],
            [
                'id' => 4,
                'title' => 'Social Media Dashboard',
                'description' => 'Analytics dashboard aggregating metrics from multiple social platforms with beautiful visualizations.',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop',
                'tech_stack' => ['Python', 'Django', 'PostgreSQL', 'D3.js'],
                'demo_url' => '#',
                'github_url' => '#',
                'gradient' => 'from-emerald-500 to-teal-500',
            ],
            [
                'id' => 5,
                'title' => 'Blog Platform',
                'description' => 'Modern blogging platform with markdown support, SEO optimization, and content management system.',
                'image' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=800&h=600&fit=crop',
                'tech_stack' => ['Next.js', 'TypeScript', 'Prisma', 'Tailwind CSS'],
                'demo_url' => '#',
                'github_url' => '#',
                'gradient' => 'from-rose-500 to-pink-500',
            ],
            [
                'id' => 6,
                'title' => 'Fitness Tracker',
                'description' => 'Mobile-first fitness tracking app with workout logging, progress charts, and goal setting.',
                'image' => 'https://images.unsplash.com/photo-1476480862126-209bfaa8edc8?w=800&h=600&fit=crop',
                'tech_stack' => ['React Native', 'Firebase', 'Redux', 'Chart.js'],
                'demo_url' => '#',
                'github_url' => '#',
                'gradient' => 'from-indigo-500 to-purple-500',
            ],
        ];

        $skills = [
            'Frontend' => [
                ['name' => 'HTML/CSS', 'color' => 'bg-orange-500'],
                ['name' => 'JavaScript', 'color' => 'bg-yellow-500'],
                ['name' => 'React', 'color' => 'bg-cyan-500'],
                ['name' => 'Vue.js', 'color' => 'bg-emerald-500'],
                ['name' => 'Tailwind CSS', 'color' => 'bg-sky-500'],
                ['name' => 'Next.js', 'color' => 'bg-gray-800'],
            ],
            'Backend' => [
                ['name' => 'PHP/Laravel', 'color' => 'bg-red-500'],
                ['name' => 'Node.js', 'color' => 'bg-green-500'],
                ['name' => 'Python', 'color' => 'bg-blue-500'],
                ['name' => 'MySQL', 'color' => 'bg-indigo-500'],
                ['name' => 'PostgreSQL', 'color' => 'bg-blue-600'],
                ['name' => 'MongoDB', 'color' => 'bg-green-600'],
            ],
            'Tools' => [
                ['name' => 'Git/GitHub', 'color' => 'bg-gray-800'],
                ['name' => 'Docker', 'color' => 'bg-blue-600'],
                ['name' => 'AWS', 'color' => 'bg-orange-600'],
                ['name' => 'VS Code', 'color' => 'bg-blue-700'],
                ['name' => 'Figma', 'color' => 'bg-purple-500'],
                ['name' => 'Postman', 'color' => 'bg-orange-500'],
            ],
        ];

        return view('portfolio', compact('projects', 'skills'));
    }
}
