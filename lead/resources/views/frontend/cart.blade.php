@extends('layouts.frontend_layout')

@section('content')

	<!--Start sidebar -->
	<div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
	  <div class="offcanvas-body">
		<div class="cbtn animation">
		  <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
		</div>
		<div class="form-block sidebarform">
		  <h4>Request A Quote</h4>
		  <form id="contactForm" data-bs-toggle="validator" class="shake mt20">
			<div class="row">
			  <div class="form-group col-sm-12">
				<input type="text"  id="name" placeholder="Enter name" required data-error="Please fill Out">
				<div class="help-block with-errors"></div>
			  </div>
			  <div class="form-group col-sm-12">
				<input type="email"  id="email" placeholder="Enter email" required>
				<div class="help-block with-errors"></div>
			  </div>
			</div>
			<div class="row">
			  <div class="form-group col-sm-12">
				<input type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
				<div class="help-block with-errors"></div>
			  </div>
			  <div class="form-group col-sm-12">
				<select name="Dtype" id="Dtype" required>
				  <option value="">Select Requirement</option>
				  <option value="web">web</option>
				  <option value="graphic">graphic</option>
				  <option value="video">video</option>
				</select>
				<div class="help-block with-errors"></div>
			  </div>
			</div>
			<div class="form-group">
			  <textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
			  <div class="help-block with-errors"></div>
			</div>
			<button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
			<div id="msgSubmit" class="h3 text-center hidden"></div>
			<div class="clearfix"></div>
		  </form>
		</div>
		<div class="getintouchblock mt30">
		  <h4>Get In Touch</h4>
		  <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
		  <div class="media mt15">
			<div class="icondive"><img src="{{ asset('frontend_assets') }}/images/icons/call.svg" alt="icon"></div>
			<div class="media-body getintouchinfo">
			  <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
			</div>
		  </div>
		  <div class="media mt15">
			<div class="icondive"><img src="{{ asset('frontend_assets') }}/images/icons/whatsapp.svg" alt="icon"></div>
			<div class="media-body getintouchinfo">
			  <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
			</div>
		  </div>
		  <div class="media mt15">
			<div class="icondive"><img src="{{ asset('frontend_assets') }}/images/icons/mail.svg" alt="icon"></div>
			<div class="media-body getintouchinfo">
			  <a href="mailto:info@website.com">info@website.com <span>Online Support</span></a>
			</div>
		  </div>
		  <div class="media mt15">
			<div class="icondive"><img src="{{ asset('frontend_assets') }}/images/icons/map.svg" alt="icon"></div>
			<div class="media-body getintouchinfo">
			  <a href="mailto:info@website.com">Jaipur, Rajasthan, India<span>Visit Our Office</span></a>
			</div>
		  </div>
		</div>
		<div class="contact-data mt30">
		  <h4>Follow Us On:</h4>
		  <div class="social-media-linkz mt10">
			<a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
			<a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
			<a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
			<a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
			<a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
			<a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
		  </div>
		</div>
	  </div>
	</div>
	<!--end sidebar -->
		<!--Breadcrumb Area-->
		<section class="breadcrumb-area banner-2" data-background="{{ asset('frontend_assets') }}/images/banner/4.jpg">
			<div class="text-block">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10 v-center">
							<div class="bread-inner">
								<div class="bread-menu">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="#">Cart</a></li>
									</ul>
								</div>
								<div class="bread-title">
									<h2>Cart</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--end Breadcrumb Area-->
		<!--shop products-->
		<section class="shop-products-bhv  pt60 pb60">
			<div class="container shop-container">
				<div class="row">
					<div class="col-lg-12">
						<div class="rpb-cart-table">
							<table class="cart_table div-for-data">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Item Name</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr class="rpb-cart-item-td">
										<td class="product-remove">
											<a href="#" class="remove">×</a>
										</td>
										<td class="product-thumbnail">
											<a href="#"><img src="{{ asset('frontend_assets') }}/images/shop/item-perview.jpg" alt="#"></a>
										</td>
										<td class="product-name rpbrs-titl" data-title="Item Name">
											<a href="#">Niwax</a>
										</td>
										<td class="product-price rpbrs-titl" data-title="Price">
											<span>$17</span>
										</td>
										<td class="product-quantity rpbrs-titl" data-title="Quantity">
											<span>1</span>
										</td>
										<td class="product-subtotal rpbrs-titl" data-title="Total">
											<span>$17</span>
										</td>
									</tr>
									<tr>
										<td colspan="3">
											<div class="cart-pg-coupon">
												<input type="text" name="#" class="input-text" placeholder="Coupon code">
												<button type="submit" class="bg-btn smllbtnn lnk">Apply coupon <span class="circle"></span></button>
											</div>
										</td>
										<td colspan="3" class="update-cart">
											<button type="submit" class="bg-btn3 smllbtnn lnk" name="#" value="Update cart">Update cart <span class="circle"></span></button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="cart-extra-sevc div-for-data mt60">
							<h4 class="mb30">Additional Services</h4>

							<div class="media">
								<div class="post-image bdr-radius">
									<a href="#"><img src="{{ asset('frontend_assets') }}/images/blog/blog-small.jpg" alt="girl" class="img-fluid"></a>
								</div>
								<div class="media-body post-info">
									<h5><a href="#">Template Installation – Custom Dev</a></h5>
									<div class="rpb-itm-pric mt5"><span class="offer-prz">$17 </span> <span class="regular-prz">$25</span></div>
									<a href="#" class="mt10 btn-main btn-small bg-btn3 lnk">Add to Cart<span class="circle"></span></a>
								</div>
							</div>
							<div class="media">
								<div class="post-image bdr-radius">
									<a href="#"><img src="{{ asset('frontend_assets') }}/images/blog/blog-small.jpg" alt="girl" class="img-fluid"></a>
								</div>
								<div class="media-body post-info">
									<h5><a href="#">Hosting Server Installation</a></h5>
									<div class="rpb-itm-pric mt5"><span class="offer-prz">$17 </span> <span class="regular-prz">$25</span></div>
									<a href="#" class="mt10 btn-main btn-small bg-btn3 lnk">Add to Cart<span class="circle"></span></a>
								</div>
							</div>
							<div class="media">
								<div class="post-image bdr-radius">
									<a href="#"><img src="{{ asset('frontend_assets') }}/images/blog/blog-small.jpg" alt="girl" class="img-fluid"></a>
								</div>
								<div class="media-body post-info">
									<h5><a href="#">WordPress CMS Installation</a></h5>
									<div class="rpb-itm-pric mt5"><span class="offer-prz">$17 </span> <span class="regular-prz">$25</span></div>
									<a href="#" class="mt10 btn-main btn-small bg-btn3 lnk">Add to Cart<span class="circle"></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="cart-extra-sevc div-for-data mt60">
							<h4 class="mb30">Cart Totals</h4>

							<table class="table border">
								<tbody>
									<tr>
										<th>Subtotal</th>
										<td>$17</td>
									</tr>
									<tr>
										<th>Discount</th>
										<td>$0.00</td>
									</tr>
									<tr>
										<th>Tax</th>
										<td>$0.00</td>
									</tr>
									<tr>
										<th>Total</th>
										<td>$17</td>
									</tr>
								</tbody>
							</table>
							<a href="#" class="btn-main bg-btn3 lnk w-100">
								Proceed to checkout <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>

							</div>
						</div>
					</div>
				</div>
			</section>

@endsection
