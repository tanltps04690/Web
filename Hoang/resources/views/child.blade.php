@extends('layouts.master')

@section('content')

	<section class="header_text sub">
		<img class="pageBanner" src="{{ asset('themes/images/pageBanner.png')}}" alt="New products" >
	
	</section>	
	<section class="main-content">
		<div class="row">
			<div class="span12">													
				<div class="row">
					<div class="span12">
						<h4 class="title">
							
							<span class="pull-left"><span class="text"><span class="line">
							<?php 
								$path=($_SERVER['REQUEST_URI']);
								// var_dump($path);die();
								$character='/child/';
								$uri = ltrim($path, $character);
								$Uri=(int)$uri;
								foreach($cate as $value)
								{
									if($value->id_category===$Uri)
									{
										echo $value->name;
									}
								}
							?>
							
							<strong>&nbsp;&nbsp;Products</strong></span></span></span>
							<span class="pull-right">
								<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
							</span>
						</h4>
						<div id="myCarousel" class="myCarousel carousel slide">
							<div class="carousel-inner">
								<div class="active item">
									<ul class="thumbnails">						
									@foreach($pro as $item)

									
										<li class="span3">
											<form action="/ProductDetail" method="post">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">	
													<div class="product-box">
														<button type="submit" value="{{$item->id_product}}" name="xuan">
														<span class="sale_tag"></span>
														<p><a href="ProductDetail"><img style="height: 225px" src="{{ asset('/')}}/upload/{{$item->image}}" alt="" /></a></p>
														<a href="ProductDetail" class="title">{{$item->productName}}</a><br/>
														<a href="products.html" class="category">{{$item->description}}</a>
														<p class="price">{{$item->price}}</p>
													</div>
												</button>
											</form>
										</li>
									@endforeach	
									</ul>
								</div>
							</div>							
						</div>
						
					</div>						
				</div>
				
			</div>				
		</div>

	</section>
	<section class="our_client">
		<h4 class="title"><span class="text">Manufactures</span></h4>
		<div class="row">					
			<div class="span2">
				<a href="#"><img alt="" src="{{ asset('themes/images/clients/14.png')}}"></a>
			</div>
			<div class="span2">
				<a href="#"><img alt="" src="{{ asset('themes/images/clients/35.png')}}"></a>
			</div>
			<div class="span2">
				<a href="#"><img alt="" src="{{ asset('themes/images/clients/1.png')}}"></a>
			</div>
			<div class="span2">
				<a href="#"><img alt="" src="{{ asset('themes/images/clients/2.png')}}"></a>
			</div>
			<div class="span2">
				<a href="#"><img alt="" src="{{ asset('themes/images/clients/3.png')}}"></a>
			</div>
			<div class="span2">
				<a href="#"><img alt="" src="{{ asset('themes/images/clients/4.png')}}"></a>
			</div>
		</div>
	</section>
					
			
@endsection