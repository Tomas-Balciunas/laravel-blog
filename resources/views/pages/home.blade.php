@extends('main')
@section('content')
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                @forelse($blogs as $blog)

                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                            <a href="#" class="relative rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="#">{{ $blog->headline }}
                                </a>
                            </h3>
                            <p class="mt-3 line-clamp-3 text-sm leading-6 text-gray-600">{{ $blog->content }}</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="https://imebehavioralhealth.com/wp-content/uploads/2021/10/user-icon-placeholder-1.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900">
                                    <a href="#">{{ $blog->user->name }}
                                    </a>
                                </p>
                                <p class="text-gray-600">Role</p>
                            </div>
                        </div>
                    </article>

                    @can('delete', $blog)
                        <form method="post" action="{{ route('blogs.destroy', $blog->id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit">delete</button>
                        </form>
                    @endcan

                @empty

                    <p>no blogs found</p>

                @endforelse

            </div>
        </div>
    </div>
@endsection
