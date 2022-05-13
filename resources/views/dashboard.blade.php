@extends('layouts.master')

@section('body-content')
    <div class="grid grid-cols-8 gap-8">
        <div class="col-span-2 grid gap-8 mb-auto">
            <x-dashboard-tile>
                <x-slot:title>Schedule This Week</x-slot:title>
                <div>Some content - Updated</div>
            </x-dashboard-tile>
            <x-dashboard-tile>
                <x-slot:title>Training Diary - Coming Soon</x-slot:title>
            </x-dashboard-tile>
        </div>


        <div class="col-span-6 grid gap-8 mb-auto">
            <x-dashboard-tile>
                <x-slot:title>Latest Posts</x-slot:title>
                <div>
                    @foreach ($posts as $post)
                        <x-post-card :post="$post"/>
                    @endforeach
                </div>
            </x-dashboard-tile>
            <x-dashboard-tile>
                <x-slot:title>Image Gallery</x-slot:title>
            </x-dashboard-tile>
        </div>
    </div>
@endsection