<!-- resources/views/search.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Platform Checker</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full min-h-screen bg-gray-400 flex items-center justify-center">
        <div class=" bg-gray-300 shadow-lg rounded-md overflow-hidden flex flex-col items-center px-60 py-32 gap-5">
            <h1 class="text-black text-5xl font-bold">Search Master</h1>

            <form class="mt-[40px] flex flex-col md:flex-row  items-center justify-center gap-6" method="POST" action="{{ route('search') }}">
                @csrf
        
                <label class="text-3xl font-bold mr-1"  for="query">Search Query:</label><br>
                <input class="text-black bg-slate-100 w-[400px]  md:w-[700px] py-5 rounded-full pl-5 md:text-3xl focus:outline-none md:mr-2" placeholder="so search for any movie,series & ..." type="text" id="query" name="query" required><br><br>
        
                <button class="text-white font-semibold  bg-black py-6 px-6 rounded-full hover:text-black hover:bg-white" type="submit">Search Platforms</button>
            </form>
          <div class="bg-gray-600 px-48 py-10 text-white rounded-lg ">
            @if(session('respondingPlatforms'))
            <h2 class="text-3xl font-semibold">Responding Platforms Click To View:</h2>
            <ul class="flex flex-col items-start justify-center py-7 text-2xl gap-3">
                @foreach(session('respondingPlatforms') as $platform)
                    <li class="hover:text-black"><a href="{{ session('platformLinks')[$platform] }}" target="_blank">{{ ucfirst($platform) }}</a></li>
                @endforeach
            </ul>
        @endif
           </div>
        </div>
    </div>
   
</body>
</html>
