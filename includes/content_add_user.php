<form class="uk-form tmp-form" method="post" name="user_form_1" >
        <div class="div_1">
                <fieldset>
                    <h1 class="uk-text-center">Users</h1>
                    <div class="uk-form-row">
                        <input type="text" placeholder="First Name" name="first_name" >
                    </div>
                    <div class="uk-form-row">
                        <input type="text" placeholder="Last Name" name="last_name" >
                    </div>
                    <div class="uk-form-row">
                        <input type="text" placeholder="Email" name="email" >
                    </div>
                    <div class="uk-form-row">
                        <select name="title" >
                            <option value="Mr" >Mr</option>
                            <option value="Mrs" >Mrs</option>
                            <option value="Ms" >Ms</option>
                        </select>
                    </div>
                </fieldset>
            </div>
            <!-- <div class="tm-horizontal-border"></div> -->
            <div class="div_2">
                <fieldset>
                    <h1 class="uk-text-center">Structure</h1>
                    <div class="uk-form-row">
                        <select name="cost_center" >
                            <option value="Cost Center 1">Cost Center 1</option>
                            <option value="Cost Center 2" >Cost Center 2</option>
                            <option value="Cost Center 3" >Cost Center 3</option>
                        </select>
                    </div>
                    <div class="uk-form-row">
                        <select name="department" >
                            <option value="Department 1" >Department 1</option>
                            <option value="Department 2" >Department 2</option>
                            <option value="Department 3" >Department 3</option>
                        </select>
                    </div>
                    <div class="uk-form-row">
                        <select name="area" >
                            <option value="area 1" >Area 1</option>
                            <option value="area 2" >Area 2</option>
                            <option value="area 3" >Area 3</option>
                        </select>
                    </div>
                </fieldset>
            </div>
        <div class="div_3">
            <h1 class="uk-text-center">Account Type</h1>
            <div class="uk-form-controls tmp-checkbox">
                <label class="tm-radio-label">
                    <input class="radio" type="radio" name="account_type" value="Manager" >Manager
                    <span class="checkmark"></span>
                </label>
                <label class="tm-radio-label">
                    <input type="radio" name="account_type" value="Director" >Director
                    <span class="checkmark"></span>
                </label>
                <label class="tm-radio-label">
                    <input type="radio" name="account_type" value="Requestor 1" >Requestor 1
                    <span class="checkmark"></span>
                </label>
                <br>
                <label class="tm-radio-label">
                    <input type="radio" name="account_type" value="Requestor 2" >Requestor 2
                    <span class="checkmark"></span>
                </label>
                <label class="tm-radio-label">
                    <input type="radio" name="account_type" value="Admin" >Admin
                    <span class="checkmark"></span>
                </label>
                <label class="tm-radio-label">
                    <input type="radio" name="account_type" value="Inventory_adjuster" >Inventory_adjuster
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>

        <!-- Submit Button Section -->
        <div class="uk-grid uk-grid-collapse tm-submit-button">
            <div class="uk-panel">
                <button class="uk-button uk-button-secondary">Cancel</button>
            </div>
            <div class="uk-panel">
                <button class="uk-button uk-button-primary" type="Submit" name="save_user" >Save as Draft</button>
            </div>
            <div class="uk-panel">
                <button class="uk-button uk-button-secondary">Review</button>
            </div>
        </div>
    </form>
