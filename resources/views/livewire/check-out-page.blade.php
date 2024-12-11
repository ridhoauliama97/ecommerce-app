<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
        Checkout
    </h1>
    <form wire:submit.prevent='placeOrder'>
        <div class="grid grid-cols-12 gap-4">
            <div class="md:col-span-12 lg:col-span-8 col-span-12">
                <!-- Card -->
                <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <!-- Shipping Address -->
                    <div class="mb-6">
                        <h2 class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                            Shipping Address
                        </h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="first_name">
                                    First Name
                                </label>
                                <input
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('first_name') border-red-500 @enderror"
                                    id="first_name" type="text" wire:model='first_name'>
                                </input>
                                @error('first_name')
                                    <p class="text-xs text-red-600 mt-2" id="first_name"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="last_name">
                                    Last Name
                                </label>
                                <input
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('last_name') border-red-500 @enderror"
                                    id="last_name" type="text" wire:model='last_name'>
                                </input>
                                @error('last_name')
                                    <p class="text-xs text-red-600 mt-2" id="last_name"> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700 dark:text-white mb-1" for="phone">
                                Phone
                            </label>
                            <input
                                class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('phone') border-red-500 @enderror"
                                id="phone" type="text" wire:model='phone'>
                            </input>
                            @error('phone')
                                <p class="text-xs text-red-600 mt-2" id="phone"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700 dark:text-white mb-1" for="address">
                                Street Address
                            </label>
                            <textarea id="address" type="text" wire:model='street_address'
                                class="w-full rounded-lg border py-2 px-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:text-white dark:border-none @error('street_address') border-red-500 @enderror"
                                rows="3"></textarea>
                            {{-- <input
                                class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('street_address') border-red-500 @enderror">
                            </input> --}}
                            @error('street_address')
                                <p class="text-xs text-red-600 mt-2" id="street_address"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700 dark:text-white mb-1" for="city">
                                City
                            </label>
                            <input
                                class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('city') border-red-500 @enderror"
                                id="city" type="text" wire:model='city'>
                            </input>
                            @error('city')
                                <p class="text-xs text-red-600 mt-2" id="city"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="state">
                                    State
                                </label>
                                <input
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('state') border-red-500 @enderror"
                                    id="state" type="text" wire:model='state'>
                                </input>
                                @error('state')
                                    <p class="text-xs text-red-600 mt-2" id="state"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-gray-700 dark:text-white mb-1" for="zip">
                                    ZIP Code
                                </label>
                                <input
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none @error('zip_code') border-red-500 @enderror"
                                    id="zip" type="text" wire:model='zip_code'>
                                </input>
                                @error('zip_code')
                                    <p class="text-xs text-red-600 mt-2" id="zip_code"> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-lg font-semibold mb-4">
                        Select Payment Method
                    </div>

                    <ul class="grid w-full gap-6 md:grid-cols-3">
                        <li>
                            <input wire:model='payment_method' class="hidden peer" id="cod" required=""
                                type="radio" value="COD" />
                            <label
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                for="cod">
                                <div class="block">
                                    <div class="w-full text-lg font-medium">
                                        Cash on Delivery
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                    viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                        </li>
                        <li>
                            <input wire:model='payment_method' class="hidden peer" id="bankTransfer" required=""
                                type="radio" value="BankTransfer" />
                            <label
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                for="bankTransfer">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">
                                        Bank Transfer
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                    viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                        </li>
                        <li>
                            <input wire:model='payment_method' class="hidden peer" id="stripe" type="radio"
                                value="Stripe">
                            <label
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                for="stripe">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">
                                        Stripe
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                    viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                            </input>
                        </li>
                    </ul>
                    @error('payment_method')
                        <p class="text-xs text-red-600 mt-2" id="payment_method"> {{ $message }} </p>
                    @enderror
                </div>
                <!-- End Card -->
            </div>
            <div class="md:col-span-12 lg:col-span-4 col-span-12">
                <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                        ORDER SUMMARY
                    </div>
                    <div class="flex justify-between mb-2 font-bold">
                        <span>
                            Subtotal
                        </span>
                        <span>
                            {{ Number::currency($grand_total, 'IDR') }}
                        </span>
                    </div>
                    <div class="flex justify-between mb-2 font-bold">
                        <span>
                            Taxes
                        </span>
                        <span>
                            {{ Number::currency($tax_amount, 'IDR') }}
                        </span>
                    </div>
                    <div class="flex justify-between mb-2 font-bold">
                        <span>
                            Shipping Cost
                        </span>
                        <span>
                            {{ Number::currency(0, 'IDR') }}
                        </span>
                    </div>
                    <hr class="bg-slate-400 my-4 h-1 rounded">
                    <div class="flex justify-between mb-2 font-bold">
                        <span>
                            Grand Total
                        </span>
                        <span>
                            {{ Number::currency($grand_total + $tax_amount, 'IDR') }}
                        </span>
                    </div>
                    </hr>
                </div>
                <button type="submit"
                    class="bg-green-500 mt-4 w-full p-3 rounded-lg text-lg text-white hover:bg-green-600">
                    Place Order
                </button>
                <div class="bg-white mt-4 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
                        BASKET SUMMARY
                    </div>
                    <ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
                        @foreach ($cart_items as $ci)
                            <li class="py-3 sm:py-4" wire:key='{{ $ci['product_id'] }}'>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img alt="{{ $ci['name'] }}" class="w-12 h-12 rounded-full"
                                            src="{{ url('storage', $ci['image']) }}">
                                        </img>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                            {{ $ci['name'] }}
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            Qty: {{ $ci['quantity'] }}
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{ Number::currency($ci['total_amount'], 'IDR') }}
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
