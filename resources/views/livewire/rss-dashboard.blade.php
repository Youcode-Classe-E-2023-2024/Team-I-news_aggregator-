
<div id="dashboard-container" class="mt-8 flex items-center justify-center">
    <section class="mt-10 w-full">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="backdrop-blur-sm relative shadow-md sm:rounded-lg overflow-hidden border-green-500 border-solid border-[.5px]" style="background-color: rgba(0, 0, 0, 0.403);">
                <div class="flex items-center justify-between d p-4">
                    <div class="flex">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                     fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                          clip-rule="evenodd" />
                                </svg>
                            </div>

                            <input
                                wire:model.live.debounce.300s = "search"
                                type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                placeholder="Search" required="">
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3 flex gap-2 items-center">
                                Rss link
                            </th>
                            <th scope="col" class="px-4 py-3 flex gap-2 items-center" wire:click="setSortBy('created_at')">
                                <span>Stored at</span>
                                <ion-icon name="chevron-expand-outline" class="text-2xl text-black"></ion-icon>
                            </th>
                            <th scope="col" class="px-4 py-3">
                                action
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($rssLinks as $rssLink)
                            <tr  class="border-b dark:border-gray-700">
                                <td scope="col" class="px-4 py-3 text-white" >{{ $rssLink->name }}</td>
                                <td scope="col" class="px-4 py-3">{{ $rssLink->created_at }}</td>
                                <td scope="col" class="px-4 py-3 flex items-center justify-end">
                                    <button onclick="confirm('Are you sure you want to delete {{ $rssLink->name }} ?') ? '' : event.stopImmediatePropagation()" wire:click="delete({{ $rssLink->id }})" class="px-3 py-1 bg-red-500 text-white rounded">X</button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="py-4 px-3">
                    <div class="flex ">
                        <div class="flex space-x-4 items-center mb-3">
                            <label class="w-32 text-sm text-white font-bold">Per Page</label>
                            <select
                                wire:model.live = 'perPage'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    {{ $rssLinks->links() }}
                </div>
            </div>
        </div>
    </section>
</div>