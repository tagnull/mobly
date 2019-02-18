<div class="social-sharing d-flex align-items-center">
    <span>{{ __('tag.share') }}</span>
    <ul class="list-inline">
        <li class="list-inline-item">
            <a class="bg-facebook" target="_blank" href="//www.facebook.com/sharer.php?u={{ route('products.show', $product->slug) }}" title="Share on Facebook" tabindex="0">
                <i class="fa fa-facebook"></i><span>Facebook</span>
            </a>
        </li>
        <li class="list-inline-item"> 
            <a class="bg-twitter" target="_blank" href="//twitter.com/share?text={{ $product->name }}&amp;url={{ route('products.show', $product->slug) }}" title="Share on Twitter" tabindex="0">
                <i class="fa fa-twitter"></i><span>Twitter</span>
            </a>
        </li>
        <li class="list-inline-item"> 
            <a class="bg-gplus" target="_blank" href="//plus.google.com/share?url={{ route('products.show', $product->slug) }}" title="Share on Google+" tabindex="0">
                <i class="fa fa-google-plus"></i><span>Google+</span>
            </a>
        </li>
        <li class="list-inline-item"> 
            <a class="bg-pinterest" target="_blank" href="//pinterest.com/pin/create/button/?url={{ route('products.show', $product->slug) }}&amp;media={{ asset($product->images[0]->url ?: 'assets/images/misc/product_placeholder.png') }}&amp;description={{ $product->name }}" title="Share on Pinterest" tabindex="0">
                <i class="fa fa-pinterest"></i><span>Pinterest</span>
            </a>
        </li>
    </ul>
</div>