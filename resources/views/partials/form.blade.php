<form action="{{ url('/') }}" method="post" class="flex mb-6">
    {{ csrf_field() }}

    <input name="query" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="1600 Pennsylvania Ave NW, Washington, DC 20500" />

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold ml-2 py-0 px-4 rounded">
    Search
    </button>
</form>
