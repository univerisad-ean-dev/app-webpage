<x-app-layout>


    <div class="mt-4">
        <div class="flex flex-wrap -mx-6">
            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                        </svg>


                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700"> {{ $totalOrder  }}</h4>
                        <div class="text-gray-500">saldo total ordenes</div>
                    </div>

                </div>
            </div>
            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                        </svg>


                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700"> {{ $donations }}</h4>
                        <div class="text-gray-500">Saldo total de donacines</div>
                    </div>
                </div>
            </div>

            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z"
                                fill="currentColor"/>
                            <path
                                d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z"
                                fill="currentColor"/>
                            <path
                                d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z"
                                fill="currentColor"/>
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700"> {{ $ordersCount }}</h4>
                        <div class="text-gray-500">Ordenes completadas</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">

    </div>

    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">

        <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white "> Ordenes de servicios</h1>

    </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                >
                    <th class="px-4 py-3">Numero de orden</th>

                    <th class="px-4 py-3">Tipo de servicio</th>
                    <th class="px-4 py-3">Total</th>
                    <th class="px-4 py-3">Estado</th>

                    <th class="px-4 py-3">Fecha servicio</th>
                </tr>
                </thead>
                <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                @foreach( $orders as $order)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            {{ $order->id }}
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center">
                                <p class="font-semibold">{{ $order->type_order_name }} </p>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{$order->total}}
                        </td>
                        <td class="px-4 py-3 text-xs">
                            @if( $order->status == 1)
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                >
                                  Pago realizado
                                </span>
                            @elseif( $order->status == 2)
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100"
                                >
                                    Pago rechazado

                                </span>
                            @elseif( $order->status == 3)
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"
                                >
                                    Pago pendiente

                                </span>
                            @endif
                        </td>

                        <td class="px-4 py-3 text-sm">
                            {{ date_format($order->date, 'd/m/Y') }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    {{--        <div--}}
    {{--            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"--}}
    {{--        >--}}
    {{--            <span class="flex items-center col-span-3"></span>--}}
    {{--            <span class="col-span-2"></span>--}}
    {{--            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">--}}
    {{--                  <nav aria-label="Table navigation">--}}
    {{--                    <ul class="inline-flex items-center">--}}
    {{--                      <li>--}}
    {{--                        <button--}}
    {{--                            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"--}}
    {{--                            aria-label="Previous"--}}
    {{--                        >--}}
    {{--                          <svg--}}
    {{--                              class="w-4 h-4 fill-current"--}}
    {{--                              aria-hidden="true"--}}
    {{--                              viewBox="0 0 20 20"--}}
    {{--                          >--}}
    {{--                            <path--}}
    {{--                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"--}}
    {{--                                clip-rule="evenodd"--}}
    {{--                                fill-rule="evenodd"--}}
    {{--                            ></path>--}}
    {{--                          </svg>--}}
    {{--                        </button>--}}
    {{--                      </li>--}}
    {{--                      <li>--}}
    {{--                        <button--}}
    {{--                            class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"--}}
    {{--                        >--}}
    {{--                          1--}}
    {{--                        </button>--}}
    {{--                      </li>--}}
    {{--                      <li>--}}
    {{--                        <button--}}
    {{--                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"--}}
    {{--                        >--}}
    {{--                          2--}}
    {{--                        </button>--}}
    {{--                      </li>--}}
    {{--                      <li>--}}
    {{--                        <button--}}
    {{--                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"--}}

    {{--                        >--}}
    {{--                          3--}}
    {{--                        </button>--}}
    {{--                      </li>--}}
    {{--                      <li>--}}
    {{--                        <button--}}
    {{--                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"--}}
    {{--                        >--}}
    {{--                          4--}}
    {{--                        </button>--}}
    {{--                      </li>--}}
    {{--                      <li>--}}
    {{--                        <span class="px-3 py-1">...</span>--}}
    {{--                      </li>--}}
    {{--                      <li>--}}
    {{--                        <button--}}
    {{--                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"--}}
    {{--                        >--}}
    {{--                          8--}}
    {{--                        </button>--}}
    {{--                      </li>--}}
    {{--                      <li>--}}
    {{--                        <button--}}
    {{--                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"--}}
    {{--                        >--}}
    {{--                          9--}}
    {{--                        </button>--}}
    {{--                      </li>--}}
    {{--                      <li>--}}
    {{--                        <button--}}
    {{--                            class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"--}}
    {{--                            aria-label="Next"--}}
    {{--                        >--}}
    {{--                          <svg--}}
    {{--                              class="w-4 h-4 fill-current"--}}
    {{--                              aria-hidden="true"--}}
    {{--                              viewBox="0 0 20 20"--}}
    {{--                          >--}}
    {{--                            <path--}}
    {{--                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"--}}
    {{--                                clip-rule="evenodd"--}}
    {{--                                fill-rule="evenodd"--}}
    {{--                            ></path>--}}
    {{--                          </svg>--}}
    {{--                        </button>--}}
    {{--                      </li>--}}
    {{--                    </ul>--}}
    {{--                  </nav>--}}
    {{--                </span>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="flex flex-col mt-8">--}}
    {{--        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">--}}
    {{--            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">--}}
    {{--                <table class="min-w-full">--}}
    {{--                    <thead>--}}
    {{--                    <tr>--}}
    {{--                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>--}}
    {{--                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</th>--}}
    {{--                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</th>--}}
    {{--                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Role</th>--}}
    {{--                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>--}}
    {{--                    </tr>--}}
    {{--                    </thead>--}}

    {{--                    <tbody class="bg-white">--}}
    {{--                    <tr>--}}
    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="flex items-center">--}}
    {{--                                <div class="flex-shrink-0 h-10 w-10">--}}
    {{--                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />--}}
    {{--                                </div>--}}

    {{--                                <div class="ml-4">--}}
    {{--                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>--}}
    {{--                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>--}}
    {{--                            <div class="text-sm leading-5 text-gray-500">Web dev</div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">--}}
    {{--                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="flex items-center">--}}
    {{--                                <div class="flex-shrink-0 h-10 w-10">--}}
    {{--                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />--}}
    {{--                                </div>--}}

    {{--                                <div class="ml-4">--}}
    {{--                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>--}}
    {{--                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>--}}
    {{--                            <div class="text-sm leading-5 text-gray-500">Web dev</div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">--}}
    {{--                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="flex items-center">--}}
    {{--                                <div class="flex-shrink-0 h-10 w-10">--}}
    {{--                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />--}}
    {{--                                </div>--}}

    {{--                                <div class="ml-4">--}}
    {{--                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>--}}
    {{--                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>--}}
    {{--                            <div class="text-sm leading-5 text-gray-500">Web dev</div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">--}}
    {{--                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="flex items-center">--}}
    {{--                                <div class="flex-shrink-0 h-10 w-10">--}}
    {{--                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />--}}
    {{--                                </div>--}}

    {{--                                <div class="ml-4">--}}
    {{--                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>--}}
    {{--                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>--}}
    {{--                            <div class="text-sm leading-5 text-gray-500">Web dev</div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">--}}
    {{--                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="flex items-center">--}}
    {{--                                <div class="flex-shrink-0 h-10 w-10">--}}
    {{--                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />--}}
    {{--                                </div>--}}

    {{--                                <div class="ml-4">--}}
    {{--                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>--}}
    {{--                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>--}}
    {{--                            <div class="text-sm leading-5 text-gray-500">Web dev</div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">--}}
    {{--                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="flex items-center">--}}
    {{--                                <div class="flex-shrink-0 h-10 w-10">--}}
    {{--                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />--}}
    {{--                                </div>--}}

    {{--                                <div class="ml-4">--}}
    {{--                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>--}}
    {{--                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>--}}
    {{--                            <div class="text-sm leading-5 text-gray-500">Web dev</div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">--}}
    {{--                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="flex items-center">--}}
    {{--                                <div class="flex-shrink-0 h-10 w-10">--}}
    {{--                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />--}}
    {{--                                </div>--}}

    {{--                                <div class="ml-4">--}}
    {{--                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>--}}
    {{--                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>--}}
    {{--                            <div class="text-sm leading-5 text-gray-500">Web dev</div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">--}}
    {{--                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                    <tr>--}}
    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="flex items-center">--}}
    {{--                                <div class="flex-shrink-0 h-10 w-10">--}}
    {{--                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />--}}
    {{--                                </div>--}}

    {{--                                <div class="ml-4">--}}
    {{--                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe</div>--}}
    {{--                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>--}}
    {{--                            <div class="text-sm leading-5 text-gray-500">Web dev</div>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">--}}
    {{--                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>--}}
    {{--                        </td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">Owner</td>--}}

    {{--                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">--}}
    {{--                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
    {{--                        </td>--}}
    {{--                    </tr>--}}
    {{--                    </tbody>--}}
    {{--                </table>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


</x-app-layout>
