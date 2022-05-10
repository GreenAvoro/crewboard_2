<div name="post-card" class="flex border-b border-b-gray-100 pt-6 pb-4 px-4 hover:bg-gray-100">
    <img src="https://i.pravatar.cc/50" alt="" class="rounded mb-auto">
    <div class="pl-4">
        <h3 class="font-semibold mb-2">
            {{$post->title}}
        </h3>
        <p>{{$post->content}}</p>
        <div class="inline-block border-t border-t-gray-100 pt-2 mt-4 inline-flex items-center">
            <p class="text-xs text-teal-500">Hayden Shaw</p>
            <p class="mx-2 text-gray-400"> - </p>
            <p class="text-xs">{{date('d/m/Y', strtotime($post->created_at))}}</p>
        </div>
    </div>
</div>