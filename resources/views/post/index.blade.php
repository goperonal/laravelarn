<x-app-layout :meta-title="$category->title" meta-description="Arnaffiliate Category description">
    <img src="/storage/{{ \App\Models\TextWidget::getImage('home-hero') }}" alt="Hero Banner" class="w-full"/>
    <section class="w-full w-full max-w-7xl mx-auto">
        @foreach($posts as $post)
            <x-post-item :post="$post"></x-post-item>
        @endforeach
        <!-- Pagination -->
        {{ $posts->links() }}
    </section> 
</x-app-layout>