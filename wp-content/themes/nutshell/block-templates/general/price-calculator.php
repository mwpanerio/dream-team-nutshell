<section class="section-padding pricing-calculator">
    <div class="container">
        <?php if($title = get_field('title')): ?>
        <h2><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php echo get_field('description'); ?>
        <div class="pricing-calculator__container">
            <div class="pricing-calculator__row">
                <div class="pricing-calculator__row__left">
                    <div class="pricing-calculator__box">
                        <div class="pricing-calculator__switches">
                            <button class="is-active" data-switch="12">Annually</button>
                            <button data-switch="6">Monthly</button>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="pricing-calculator__buttons__row">
                                    <div class="pricing-calculator__buttons">
                                        <div class="pricing-calculator__button is-active">
                                            <img src="/wp-content/uploads/2022/12/nutshell-logo.png" alt="">
                                            <h4 class="pricing-calculator__price">
                                                <span>$</span><strong>16</strong>
                                            </h4>
                                            <p>per user per month</p>
                                        </div>
                                        <div class="pricing-calculator__button">
                                            <img src="/wp-content/uploads/2022/12/nutshell-pro-logo.png" alt="">
                                            <h4 class="pricing-calculator__price">
                                                <span>$</span><strong>42</strong>
                                            </h4>
                                            <p>per user per month</p>
                                        </div>
                                        <div class="pricing-calculator__button">
                                            <img src="/wp-content/uploads/2022/12/nutshell-logo.png" alt="">
                                            <h4 class="pricing-calculator__price">
                                                <span>$</span><strong>19</strong>
                                            </h4>
                                            <p>per user per month</p>
                                        </div>
                                        <div class="pricing-calculator__button">
                                            <img src="/wp-content/uploads/2022/12/nutshell-pro-logo.png" alt="">
                                            <h4 class="pricing-calculator__price">
                                                <span>$</span><strong>49</strong>
                                            </h4>
                                            <p>per user per month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing-calculator__users">
                                    <div class="pricing-calculator__users__input">
                                        <h3>Users</h3>
                                        <input type="number" value="1" id="number-of-users" min="1">
                                    </div>
                                    <div class="pricing-calculator__amount">
                                        <p>$ <span>192</span></p>
                                        <strong>per year</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-calculator__box">
                        <div class="pricing-calculator__box__header">
                            <img src="/wp-content/uploads/2022/12/nutshell-marketing.svg" alt="" class="pricing-calculator__logo">
                            <div class="nutshell-switcher">
                                <div class="switcher-text">
                                    Add
                                </div>
                                <label class="switch">
                                    <input type="checkbox" id="add-marketing">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="pricing-calculator__box__slider">
                            <div id="slider"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <p class="how-many">How many marketing contacts does your company have?</p>
                            </div>
                            <div class="col-md-3 slider-subtotal">
                                <p>$ <span id="slider-marketing-per-month">35</span></p>
                                <p>per month</p>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="pricing-calculator__row__right">
                    <div class="pricing-calculator__box">
                        <h2>Your estimated cost</h2>
                        <div class="sales__item">
                            <p>
                                <strong>Nutshell</strong>
                            </p>
                            <p class="sales-users">
                                <span> <span id="sales-users-total">1</span> User/s </span>
                                <span id="sales-users-charge"> $ <span>192</span></span>
                            </p>
                        </div>
                        <div class="sales__item sales__item__marketing" style="display: none;">
                            <p>
                                <strong>Nutshell Marketing</strong>
                            </p>
                            <p class="sales-users">
                                <span> Up to <span id="sales-marketing-contact">2,500</span> contacts </span>
                                <span id="sales-marketing-contact-charge"> $ <span>35</span></span>
                            </p>
                        </div>
                        <div class="sales__item">
                            <p class="sales-charge">
                                <strong> <span id="sales-plan-type">Annual</span> Charge</strong>
                                <strong> $ <span id="sales-total-charge">192</span></strong>
                            </p>
                        </div>
                    </div>
                    <div class="pricing-calculator__submit">
                        <button class="btn btn--bg-orange">
                            <strong>START A FREE TRIAL</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>