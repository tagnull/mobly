<div class="row">
    <div class="col-12 col-sm-12 col-md-12">
        <div class="product-info mt-half">
             <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="nav_desctiption" data-toggle="pill" href="#tab_description" role="tab" aria-controls="tab_description" aria-selected="true">
                        {{ __('tag.description') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav_product_details" data-toggle="pill" href="#tab_features" role="tab" aria-controls="tab_product_details" aria-selected="false">
                        {{ __('tag.features') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav_review" data-toggle="pill" href="#tab_review" role="tab" aria-controls="tab_review" aria-selected="false">
                        {{ __('tag.reviews') }}
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab_description" role="tabpanel" aria-labelledby="nav_desctiption">
                    <p>{{ $product->description }}</p>
                </div>
                <div class="tab-pane fade" id="tab_features" role="tabpanel" aria-labelledby="tab_features">
                	<div class="product-tab-details d-flex justify-content-center align-content-center">
                		<div class="product-meta">
                            <ul class="list-unstyled">
                                @foreach($product->features as $feature)
                                <li>{{ __('tag.'.$feature->name) }}: <span>{{ __('tag.'.$feature->name.':description', [$feature->name => $feature->description]) }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_review" role="tabpanel" aria-labelledby="nav_review">
                    <div class="product-review">
                        <div class="customer-review">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td><strong>Pebona Themes</strong></td>
                                        <td>09/04/2018</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                                            <div class="product-ratings d-flex justify-content-center">
                                                <ul class="rating d-flex mt-2">
                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td><strong>John Doe</strong></td>
                                        <td>23/05/2018</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iusto reiciendis, vitae porro, unde hic debitis, velit facere culpa et nisi adipisci quis in aliquam dolore iure. Iure, dolore praesentium!</p>
                                            <div class="product-ratings d-flex justify-content-center">
                                                <ul class="rating d-flex mt-2">
                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                    <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <form action="#" class="review-form">
                            <h2>Write a review</h2>
                            <div class="form-group row">
                                <div class="col">
                                    <label class="col-form-label"><span class="text-danger">*</span> Your Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                    <textarea class="form-control" required></textarea>
                                    <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label class="col-form-label"><span class="text-danger">*</span> Rating</label>
                                    &nbsp;&nbsp;&nbsp; Worst&nbsp;
                                    <input type="radio" value="1" name="rating">
                                    &nbsp;
                                    <input type="radio" value="2" name="rating">
                                    &nbsp;
                                    <input type="radio" value="3" name="rating">
                                    &nbsp;
                                    <input type="radio" value="4" name="rating">
                                    &nbsp;
                                    <input type="radio" value="5" name="rating" checked>
                                    &nbsp;Best
                                </div>
                            </div>
                            <div class="buttons d-flex justify-content-end">
                                <button class="default-btn" type="submit">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>