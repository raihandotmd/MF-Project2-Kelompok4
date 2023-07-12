<x-frontend.layout>
    @include('frontend.partials._nav')
    <!-- Open Content -->
    <section class="bg-light cinemas">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5 w-100">
                    <div class="card mb-3">
                        <div class="container">
                            <div class="heading_container align-items-center">
                                <h3 class="gt-teks pb-2">
                                    Cinema Seats
                                </h3>
                                <h4>
                                    pick one seat.
                                </h4>
                                <hr>
                            </div>
                            <form class="mx-auto" action="/checkout" method="POST">
                                @csrf
                                <h6 class="mb-3 text-center rounded mx-auto py-3 fw-bold">
                                    Screen
                                </h6>
                                <div class="cinema-seats">
                                    @php
                                        $prevFirstChar = null;
                                    @endphp
                                    @foreach ($seats->sortBy('seat_code') as $seat)
                                        @php
                                            $firstChar = substr($seat->seat_code, 0, 1);
                                        @endphp
                                        @if ($firstChar !== $prevFirstChar)
                                            @if (!is_null($prevFirstChar))
                                </div>
                                @endif
                                <div class="row justify-content-center">
                                    @endif
                                    <div class="seat {{ $seat->seat_status === 'unavailable' ? 'disabled' : '' }} rounded m-1"
                                        data-id="{{ $seat->id }}" data-status="{{ $seat->seat_status }}">
                                        {{ $seat->seat_code }}
                                    </div>
                                    @php
                                        $prevFirstChar = $firstChar;
                                    @endphp
                                    @endforeach
                                </div>
                                <input type="hidden" name="selected_seat" id="selected-seat-input">
                                <div class="text-center my-4">
                                    <button type="button" class="btn btn-danger" onclick="#">Cancel</button>
                                    <button type="submit" class="btn-box rounded p-2" id="checkout-btn"
                                        disabled>Checkout</button>
                                </div>
                            </form>

                            <script>
                                const seats = document.querySelectorAll('.seat');
                                let selectedSeat = null;

                                seats.forEach(seat => {
                                    seat.addEventListener('click', () => {
                                        if (selectedSeat) {
                                            selectedSeat.classList.remove('selected');
                                        }
                                        seat.classList.add('selected');
                                        selectedSeat = seat;
                                        document.getElementById('checkout-btn').disabled = false;
                                        document.getElementById('selected-seat-input').value = seat.textContent.trim();
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
</x-frontend.layout>
