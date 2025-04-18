@extends('layouts.backend')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h2 class="text-xl font-semibold mb-4">Dashboard</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-blue-50 dark:bg-blue-900/30 rounded-lg p-6">
            <h3 class="font-medium text-blue-800 dark:text-blue-200">Total Users</h3>
            <p class="text-2xl font-bold mt-2">1,234</p>
        </div>
        
        <!-- Card 2 -->
        <div class="bg-green-50 dark:bg-green-900/30 rounded-lg p-6">
            <h3 class="font-medium text-green-800 dark:text-green-200">Total Posts</h3>
            <p class="text-2xl font-bold mt-2">567</p>
        </div>
        
        <!-- Card 3 -->
        <div class="bg-purple-50 dark:bg-purple-900/30 rounded-lg p-6">
            <h3 class="font-medium text-purple-800 dark:text-purple-200">Total Tags</h3>
            <p class="text-2xl font-bold mt-2">89</p>
        </div>
    </div>
</div>
@endsection