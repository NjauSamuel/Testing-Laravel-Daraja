<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-200 from-10% via-sky-200 via-30% to-emerald-200 to-90% text-slate-700">

    <div class="rounded-md border border-slate-300 bg-white p-4 shadow-sm">
      <h2 class="text-xl font-semibold text-gray-800 mb-4">Obtain Access Token</h2>

      <form action="{{ route('home') }}" method="post">
        @csrf
        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md" type="submit">Request Access Token!</button>
      </form>

      @if(isset($accessToken))
          <h4>Access Token: {{ $accessToken }}</h4>
      @else
          <h4>No Access Token Available</h4>
      @endif

    </div>

    <div class="rounded-md border border-slate-300 bg-white p-4 shadow-sm mt-5">
      <h2 class="text-xl font-semibold text-gray-800 mb-4">Register URL!</h2>
      <form action="{{ route('mpesa-register-urls') }}" method="post">
        @csrf
        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Register URL's</button>
      </form>
    </div>

    <div class="rounded-md border border-slate-300 bg-white p-4 shadow-sm mt-5">
      <h2 class="text-xl font-semibold text-gray-800 mb-4">Simulate Transactions</h2>

      <form action="" class="space-y-4">
        @csrf
        <div class="flex flex-col">
          <label for="amount" class="mb-1 text-sm font-medium text-gray-700">Amount:</label>
          <input type="number" name="amount" id="amount" class="w-full px-3 py-1 border border-gray-300 rounded-md">
        </div>

        <div class="flex flex-col">
          <label for="account" class="mb-1 text-sm font-medium text-gray-700">Account:</label>
          <input type="text" name="account" id="account" class="w-full px-3 py-1 border border-gray-300 rounded-md">
        </div>

        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Simulate Transactions</button>
      </form>

    </div>

    <div class="rounded-md border border-slate-300 bg-white p-4 shadow-sm mt-5">
      <h2 class="text-xl font-semibold text-gray-800 mb-4">Register URL!</h2>

      <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">Register URL's</button>
    </div>
</body>
</html>