

@switch($status)
    @case(\App\Models\Article::status_publish)
        <div class="py-1 font-bold text-center text-white bg-green-500">
            {{ ucfirst($status) }}
        </div>        
        @break
    @case(\App\Models\Article::status_draft)
        <div class="py-1 font-bold text-center text-white bg-yellow-500">
            {{ ucfirst($status) }}
        </div> 
        @break
    @default
@endswitch