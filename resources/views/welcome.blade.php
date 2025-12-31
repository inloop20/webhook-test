<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GitHub Webhook Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
<div class="max-w-6xl mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">GitHub Webhook Dashboard</h1>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-3 text-left">Event</th>
                    <th class="p-3 text-left">Repository</th>
                    <th class="p-3 text-left">Author</th>
                    <th class="p-3 text-left">Message</th>
                    <th class="p-3 text-left">Time</th>
                </tr>
            </thead>
            <tbody>
                @forelse($events as $event)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="p-3 font-semibold">{{ $event->event_type }}</td>
                        <td class="p-3">{{ $event->repository }}</td>
                        <td class="p-3">{{ $event->author }}</td>
                        <td class="p-3">{{ $event->message }}</td>
                        <td class="p-3 text-gray-500">{{ $event->created_at->diffForHumans() }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-6 text-center text-gray-500">
                            No webhook events yet 🚫
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
