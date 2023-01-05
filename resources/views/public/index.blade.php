@extends('master')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-8">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-black text-5xl upercase font-bold text-shadow-md pb-14">
                Our Blog
            </h1>
            <div class="text-center text-gray-700 py-2
            px-4 font-bold text-xl">
            News from WiztecBD and Around The World of Digital <br>
            Services Agency
            </div>
        </div>
    </div>
</div>

<section class="grid  grid-cols-2 gap-4">
    <div class="w-3/4 mx-auto py-15 border-style: dashed
    border-gray-400 rounded-md mt-12 ">
        <div>
            <img src="images/laptop.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto w-3/4">
            <h2 class="text-2xl font-extrabold text-black-600 pt-6">
            Delivering the best digital marketing
            </h2>

            <p class="py-8 text-gray-600 text-s pb-6">
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
            </p>
            <a href="/blog"
            class=" bg-gray-500 text-gray-200 text-l px-2 py-1 rounded-box">
                Read More
            </a>
        </div>
    </div>

    <div class="w-3/4 mx-auto mt-12 ">
        <div class="flex w-96 rounded bg-white border border-gray-800">
            <input type="search"
            name="search"
            placeholder="search"
            class="w-3/4 bg-transparent px-4 py-1 bg-image"
            >
            <button class="bg-image m-2 rounded px-4 py-2 text-white">
                Search
            </button>
        </div>
        <div class="pt-4">
            <h3 class="bg-image w-3/4 border px-2 text-xl text-white">
                Recent Post
            </h3>
            <div class="flex pt-4 gap-2">
                <div>
                <img src="images/laptop.jpg" width="120" alt="">
                </div>
                <div>
                <h1 class="font-bold">Is It Time to Switch to a New <br> SEO Tool?</h1>
                <p class="pt">16 Dec, 2022</p>
                </div>
            </div>
            <div class="flex pt-4 gap-2">
                <div>
                <img src="images/laptop.jpg" width="120" alt="">
                </div>
                <div>
                <h1 class="font-bold">Is It Time to Switch to a New <br> SEO Tool?</h1>
                <p class="pt">16 Dec, 2022</p>
                </div>
            </div>
            <div class="flex pt-4 gap-2">
                <div>
                <img src="images/laptop.jpg" width="120" alt="">
                </div>
                <div>
                <h1 class="font-bold">Is It Time to Switch to a New <br> SEO Tool?</h1>
                <p class="pt">16 Dec, 2022</p>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="grid  grid-cols-2 gap-4">
    <div class="w-3/4 mx-auto py-15 border-style: dashed
    border-gray-400 rounded-md mt-12 ">
        <div>
            <img src="images/laptop.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto w-3/4">
            <h2 class="text-2xl font-extrabold text-black-600 pt-6">
            Delivering the best digital marketing
            </h2>

            <p class="py-8 text-gray-600 text-s pb-6">
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
            </p>
            <a href="/blog"
            class=" bg-gray-500 text-gray-200 text-l px-2 py-1 rounded-box">
                Read More
            </a>
        </div>
    </div>

    <div class="w-3/4 mx-auto py-15 border-style: dashed
    border-gray-400 rounded-md mt-12 ">
    <div>
        <h3 class="bg-image w-3/4 border px-2 text-xl text-white">
        Categories
        </h3>
        <div class="flex grad grad-cal-2 gap-x-60 pt-2">
            <a href="">Carrers</a>
            <p class="rounded-lg border bg-gray-800 px-2 text-white">3</p>
        </div>
        <div class="flex grad grad-cal-2 gap-x-60 pt-2">
            <a href="">Design</a>
            <p class="rounded-lg border bg-gray-800 px-2 text-white">2</p>
        </div>
        <div class="flex grad grad-cal-2 gap-x-60 pt-2">
            <a href="">Design</a>
            <p class="rounded-lg border bg-gray-800 px-2 text-white">2</p>
        </div>


    </div>

    </div>

</section>
<div>
{{ $posts->links() }}
</div>

@endsection
