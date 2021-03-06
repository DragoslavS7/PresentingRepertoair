<div class="sc-box">
    <div class="row text-center">
        <div class="col-12 small">
            <img src="asset/img/iconsSVG.png" width="10%">
            <h2 class="text-center">Reserved</h2>
        </div>
    </div>
</div>

<div class="sc-box">
    <div class="row" >
        <div class="col-md-12 order-md-1">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="Title">Title</label>
                        <input type="text" class="form-control" id="Title" name="Title" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid title is required.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your username is required.
                        </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 </label>
                    <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" name="country" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" name="state" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="tik_s">Tikets</label>
                        <select class="custom-select d-block w-100" id="tik_s" name="tik_s" required>
                            <option value="">Choose...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid tikets.
                        </div>
                    </div>
                </div>
                <h4 class="mb-3 text-center">Payment</h4>
                <hr class="mb-4">
                <div class="d-block my-3 text-center">

                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="business" value="seller@designerfotos.com">
                        <input type="hidden" name="item_name" value="Memorex 256MB Memory Stick">
                        <input type="hidden" name="item_number" value="MEM32507725">
                        <input type="hidden" name="amount" value="3">
                        <input type="hidden" name="tax" value="1">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="currency_code" value="USD">

                        <!-- Enable override of buyers's address stored with PayPal . -->
                        <input type="hidden" name="address_override" value="1">
                        <!-- Set variables that override the address stored with PayPal. -->
                        <input type="hidden" name="first_name" value="John">
                        <input type="hidden" name="last_name" value="Doe">
                        <input type="hidden" name="address1" value="345 Lark Ave">
                        <input type="hidden" name="city" value="San Jose">
                        <input type="hidden" name="state" value="CA">
                        <input type="hidden" name="zip" value="95121">
                        <input type="hidden" name="country" value="US">
                        <input type="image" name="submit"
                               src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                               alt="PayPal - The safer, easier way to pay online">
                    </form>

                </div>

                <hr class="mb-4">
                <button class="btn btn_col btn-lg btn-block" id="reservedBtn" name="reservedBtn" type="submit">Continue to checkout</button>

        </div>
    </div>

</div>