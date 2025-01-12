<x-layout>

    <main class="flex-1 overflow-y-auto p-8">
        <div class="grid grid-cols-1 gap-8">
            <div class="grid grid-cols-1 gap-8">
                <section class="bg-white rounded-lg shadow">
                    <!-- Header with Search Bar -->
                    <div class="flex items-center justify-between p-6 border-b">
                        <h3 class="text-lg font-medium text-gray-900">Content Library</h3>
                        <input type="text" id="searchInput" class="border rounded-lg px-4 py-2 text-sm"
                            placeholder="Search..." oninput="filterTable()" />
                    </div>

                    <!-- Table -->
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table id="contentTable" class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Content Title
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Type
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Send Date
                                        </th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Opens
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($contents as $content)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $content->title }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if ($content instanceof \App\Models\Gallery)
                                                    {{ ucfirst($content->type) }}
                                                @elseif ($content instanceof \App\Models\Newsletter)
                                                    {{ 'Newsletter' }}
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $content->send_date ? $content->send_date->format('M d, Y') : '-' }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $content->opens ?? '-' }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-sm text-gray-700">Showing 1 to 3 of 15 results</div>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border rounded-lg disabled:opacity-50">Previous</button>
                                <button class="px-3 py-1 border rounded-lg bg-custom text-white">1</button>
                                <button class="px-3 py-1 border rounded-lg">2</button>
                                <button class="px-3 py-1 border rounded-lg">3</button>
                                <button class="px-3 py-1 border rounded-lg">Next</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <script>
        function filterTable() {
            const searchInput = document.getElementById("searchInput").value.toLowerCase();
            const table = document.getElementById("contentTable");
            const rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName("td");
                let rowContainsSearchText = false;

                for (let j = 0; j < cells.length; j++) {
                    const cellText = cells[j].textContent || cells[j].innerText;
                    if (cellText.toLowerCase().includes(searchInput)) {
                        rowContainsSearchText = true;
                        break;
                    }
                }

                rows[i].style.display = rowContainsSearchText ? "" : "none";
            }
        }
    </script>



</x-layout>
