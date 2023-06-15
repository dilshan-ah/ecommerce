<div class="row">

    <div class="col-lg-8 col-md-6 col-12">
        <div class="daily-order-graph">
            <canvas id="myChart" width="300px" height="250px"></canvas>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-12">
        <div class="dashboard-list-box">
            <h3 class="primary-title">Top sold product</h3>
            <ul>
                <li>
                    <a href="#">
                        <div class="dashboard-lists">
                            <div class="dashboard-list-image" style="background-image: url('{{asset('assets/admin-images/product1.jpg')}}');">
                            </div>

                            <div class="dashboard-list-content">
                                <h4 class="primary-title">Head set</h4>
                                <h6 class="sub-title">12 product sold last week</h6>
                            </div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="dashboard-lists">
                            <div class="dashboard-list-image" style="background-image: url('{{asset('assets/admin-images/product2.jpg')}}');">
                            </div>

                            <div class="dashboard-list-content">
                                <h4 class="primary-title">Boot</h4>
                                <h6 class="sub-title">8 product sold last week</h6>
                            </div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="dashboard-lists">
                            <div class="dashboard-list-image" style="background-image: url('{{asset('assets/admin-images/product3.jpg')}}');">
                            </div>

                            <div class="dashboard-list-content">
                                <h4 class="primary-title">Cap</h4>
                                <h6 class="sub-title">5 product sold last week</h6>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-4 col-sm-6 col-12">
        <div class="analytic-box">
            <div class="analytic-box-content">
                <div class="analytic-box-title">
                    <h4 class="primary-title">Total users</h4>
                    <h6 class="result-title">{{$totalusers}}</h6>
                </div>

                <div class="analytic-box-icon" style="background-color: #00D4FF;">
                    <i class="fi fi-rr-users"></i>
                </div>
            </div>

            <span class="rate"><i class="fi fi-rr-arrow-up"></i>15%</span>

            <span>Since tomorrow</span>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
        <div class="analytic-box">
            <div class="analytic-box-content">
                <div class="analytic-box-title">
                    <h4 class="primary-title">Total orders</h4>
                    <h6 class="result-title">{{$totalorders}}</h6>
                </div>

                <div class="analytic-box-icon" style="background-color: #FF579A;">
                    <i class="fi fi-rr-shopping-cart"></i>
                </div>
            </div>

            <span class="rate"><i class="fi fi-rr-arrow-up"></i>11%</span>

            <span>Since tomorrow</span>
        </div>
    </div>

    <div class="col-md-4 col-12">
        <div class="analytic-box">
            <div class="analytic-box-content">
                <div class="analytic-box-title">
                    <h4 class="primary-title">Total profits</h4>
                    <h6 class="result-title">100K</h6>
                </div>

                <div class="analytic-box-icon" style="background-color: #FF8C00;">
                    <i class="fi fi-rr-chat-arrow-grow"></i>
                </div>
            </div>

            <span class="rate"><i class="fi fi-rr-arrow-down"></i>5%</span>

            <span>Since tomorrow</span>
        </div>
    </div>

</div>



<div class="row">

    <div class="col-md-4 col-sm-6 col-12">
        <div class="analytic-box">
            <div class="analytic-box-content">
                <div class="analytic-box-title">
                    <h4 class="primary-title">Total products</h4>
                    <h6 class="result-title">{{$totalproducts-$productsold}}</h6>
                </div>

                <div class="analytic-box-icon" style="background-color: #5C60F5;">
                    <i class="fi fi-rr-box"></i>
                </div>
            </div>
            <span>{{$totalproducttypes}} types of products</span>

        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
        <div class="analytic-box">
            <div class="analytic-box-content">
                <div class="analytic-box-title">
                    <h4 class="primary-title">Total Category</h4>
                    <h6 class="result-title">{{$totalcategories}}</h6>
                </div>

                <div class="analytic-box-icon" style="background-color: #2FD4A4;">
                    <i class="fi fi-br-layers"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-12">
        <div class="analytic-box">
            <div class="analytic-box-content">
                <div class="analytic-box-title">
                    <h4 class="primary-title">Total sub category</h4>
                    <h6 class="result-title">{{$totalsubcategories}}</h6>
                </div>

                <div class="analytic-box-icon" style="background-color: #FA5C7C;">
                    <i class="fi fi-rs-layers"></i>
                </div>
            </div>

        </div>
    </div>

</div>


<div class="row">
    <div class="col-lg-8 col-md-6 col-12 m-0">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="analytic-box">
                    <div class="analytic-box-content">
                        <div class="analytic-box-title">
                            <h4 class="primary-title">Stock purchase value</h4>
                            <h6 class="result-title">4M</h6>
                        </div>

                        <div class="analytic-box-icon" style="background-color: #2FD4A4;">
                            <i class="fi fi-br-layers"></i>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="analytic-box">
                    <div class="analytic-box-content">
                        <div class="analytic-box-title">
                            <h4 class="primary-title">Stock sell value</h4>
                            <h6 class="result-title">6M</h6>
                        </div>

                        <div class="analytic-box-icon" style="background-color: #FA5C7C;">
                            <i class="fi fi-rs-layers"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 col-12">
                <div class="analytic-box">
                    <div class="analytic-box-content">
                        <div class="analytic-box-title">
                            <h4 class="primary-title">Total sold value</h4>
                            @if($totalsoldvalue < 1000)
                                <h6 class="result-title">{{$totalsoldvalue}} ৳</h6>
                            @elseif($totalsoldvalue >= 1000)
                                <h6 class="result-title">{{$totalsoldvalue/1000}}K ৳</h6>
                            @elseif($totalsoldvalue >= 1000000)
                                <h6 class="result-title">{{$totalsoldvalue/1000000}}M ৳</h6>
                            @endif
                        </div>

                        <div class="analytic-box-icon" style="background-color: #2FD4A4;">
                            <i class="fi fi-br-layers"></i>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="analytic-box">
                    <div class="analytic-box-content">
                        <div class="analytic-box-title">
                            <h4 class="primary-title">Total sold purchase cost</h4>
                            <h6 class="result-title">56</h6>
                        </div>

                        <div class="analytic-box-icon" style="background-color: #FA5C7C;">
                            <i class="fi fi-rs-layers"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-4 col-md-6 col-12"></div>
</div>


<div class="row">

    <div class="col-md-4 col-sm-6 col-12">
        <div class="analytic-box">
            <div class="analytic-box-content">
                <div class="analytic-box-title">
                    <h4 class="primary-title">Total expenses</h4>
                    <h6 class="result-title">144K</h6>
                </div>

                <div class="analytic-box-icon" style="background-color: #5C60F5;">
                    <i class="fi fi-rr-box"></i>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-12">
        <div class="analytic-box">
            <div class="analytic-box-content">
                <div class="analytic-box-title">
                    <h4 class="primary-title">Total Product sold</h4>
                    <h6 class="result-title">{{$productsold}}</h6>
                </div>

                <div class="analytic-box-icon" style="background-color: #2FD4A4;">
                    <i class="fi fi-br-layers"></i>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-4 col-12">
        <div class="analytic-box">
            <div class="analytic-box-content">
                <div class="analytic-box-title">
                    <h4 class="primary-title">Total returned</h4>
                    <h6 class="result-title">6</h6>
                </div>

                <div class="analytic-box-icon" style="background-color: #FA5C7C;">
                    <i class="fi fi-rs-layers"></i>
                </div>
            </div>

        </div>
    </div>

</div>
