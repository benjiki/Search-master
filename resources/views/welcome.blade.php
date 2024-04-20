<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ethio torrent Search</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="flex w-full min-h-screen overflow-y-auto overflow-x-hidden">
      <!-- back ground image -->
      <img
        class="w-full h-screen object-fill"
        src="images/background.jpeg"
        alt="ethio torrent"
      />
      <!-- gradinent -->
      <div class="absolute bg-black/60 w-full h-screen top-0 left-0"></div>

      <div class="absolute p-4 w-full">
        <h1 class="text-white font-bold sm:text-3xl md:text-5xl">
          Ethio Torrents
        </h1>
      </div>
      <div class="absolute top-[50%] flex flex-col w-full items-center">
        <form action="" class="flex gap-6">
          <input
            class="sm:py-4 sm:pr-60 md:p-6 rounded-full md:pr-80 border focus:outline-none cursor-text hover:border-green-600 hover:border-[5px]"
            type="text"
            name=""
            id=""
            placeholder="Search..."
          />
          <button
            class="bg-yellow-400 text-white font-bold rounded-full px-10 py-2 hover:bg-green-600"
            type="submit"
          >
            Search
          </button>
        </form>
        <!--  display the result of search here -->
        <h1 class="text-5xl text-white mr-80 mt-2">Result:</h1>
        <div
          class="w-full h-[300px] py-2 text-white flex flex-col items-center"
        >
          <ul class="flex flex-col gap-y-4">
            <li
              class="border border-2 border-green-600 px-[300px] rounded-lg hover:opacity-50 hover:cursor-pointer"
            >
              returned result
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
