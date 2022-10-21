<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- component -->
                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">
                        <div>
                            <h2 class="text-2xl font-semibold leading-tight text-center">List of Jobs</h2>
                        </div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                <!-- component -->
                                <!-- This is an example component -->

                                <div class="min-h-screen flex items-center px-4">
                                    <div class='overflow-x-auto w-full'>
                                        <!-- input -->
                                        <!-- component -->
                                        <div class="relative mr-6 my-2">
                                            <div class="bg-white px-4 py-3 border-gray-200 sm:px-6 flex items-center">
                                                <input type="search"
                                                    class="bg-purple-white shadow rounded border-0 p-2 w-1/4 mx-6"
                                                    placeholder="Search by position..." wire:model="search">
                                                <div class="absolute ">

                                                    <svg version="1.1" class="h-4 text-dark"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 52.966 52.966"
                                                        style="enable-background:new 0 0 52.966 52.966;"
                                                        xml:space="preserve">
                                                        <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
          c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
          C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
          S32.459,40,21.983,40z" />

                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <select name="" id="" disabled="disabled">
                                            <option value=>BDC</option>
                                        </select>
                                    </div>

                                        <!-- Table -->
                                        @if ($jobs->count())

                                            <table
                                                class='mx-auto max-w-8xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                                                <thead class="bg-gray-50">
                                                    <tr class="text-gray-600 text-left">
                                                        <th class="font-semibold text-sm uppercase px-6 py-4">
                                                            Offers
                                                        </th>
                                                        <th class="font-semibold text-sm uppercase px-6 py-4">
                                                            Title
                                                        </th>
                                                        <th
                                                            class="font-semibold text-sm uppercase px-6 py-4 text-center">
                                                            status
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200">
                                                    @foreach ($jobs as $job)
                                                        <tr>
                                                            <td class="px-6 py-4">
                                                                <div class="flex items-center space-x-3">
                                                                    <div class="inline-flex w-10 h-10">
                                                                        <img class='w-10 h-10 object-cover rounded-full'
                                                                            alt='User avatar'
                                                                            src={{ asset('assets/jobs/paper-look.svg') }}>
                                                                    </div>
                                                                    <div>
                                                                        <p class="">
                                                                            {{ $job->position }}
                                                                        </p>
                                                                        <p
                                                                            class="text-gray-500 text-sm font-semibold tracking-wide">
                                                                            {{ number_format($job->min_salary, 0) }} $
                                                                            {{ number_format($job->max_salary, 0) }} $
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <p class="">
                                                                    {{ $job->state }}
                                                                </p>
                                                                <p
                                                                    class="text-gray-500 text-sm font-semibold tracking-wide">
                                                                    {{ $job->city }}
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-5 w-5" viewBox="0 0 20 20"
                                                                        fill="currentColor">
                                                                        <path fill-rule="evenodd"
                                                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                </p>
                                                            </td>
                                                            <td class="px-6 py-4 text-center">
                                                                <span
                                                                    class="text-green-800 bg-green-200 font-semibold px-2 rounded-full">
                                                                    {{ $job->schedule }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="bg-white px-4 py-3 border-gray-200 sm:px-6 ">
                                                {{ $jobs->links() }}
                                            </div>
                                        @else
                                            <div class="bg-white px-4 py-3 border-gray-200 sm:px-6 ">
                                                no search results {{ $search }}
                                            </div>
                                        @endif
                                    </div>
                                </div>









                                <!-- support me by buying a coffee -->
                                <a href="https://www.buymeacoffee.com/danimai" target="_blank"
                                    class="bg-purple-600 p-2 rounded-lg text-white fixed right-0 bottom-0">
                                    Support me
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
