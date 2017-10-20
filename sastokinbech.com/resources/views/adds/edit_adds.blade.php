@extends('user_layouts.master')

@section('script')
	@section('scripts')
	<script type="text/javascript">
			function populate(s1,s2){
				var s1 = document.getElementById(s1);
				var s2 = document.getElementById(s2);

				s2.innerHTML = "";
				if (s1.value == "Apparels & Accessories") {
					var optionArray = [
						"|",
						"Baby & Children Accessories|Baby & Children Accessories",
						"Baby & Children Clothing|Baby & Children Clothing",
						"Baby & Children Luggage|Baby & Children Luggage",
						"Jewellery|Jewellery",
						"Men's Accessories|Men's Accessories",
						"Men's Clothing|Men's Clothing",
						"Men's Shoes|Men's Shoes",
						"Sunglasses|Sunglasses",
						"Watches|Watches",
						"Women's Accessories|Women's Accessories",
						"Women's Clothing|Women's Clothing",
						"Women's Shoes|Women's Shoes",
						"Others|Others"
					];
				}else if (s1.value == "Automobiles") {
					var optionArray = [
						"|",
						"Bycycle|Bycycle",
						"Cars|Cars",
						"Motorcycle|Motorcycle",
						"Parts & Accessories|Parts & Accessories",
						"Showroom Motorcycle|Showroom Motorcycle",
						"Showroom Cars|Showroom Cars",
						"Others|Others"
					];
				}else if (s1.value == "Beauty & Health") {
					var optionArray = [
						"|",
						"Bath Toiletries|Bath Toiletries",
						"Body Care|Body Care",
						"Cosmetics & Skin Care|Cosmetics & Skin Care",
						"Eye Care|Eye Care",
						"Face Care|Face Care",
						"Medical & Health Device|Medical & Health Device",
						"Men's Groming Tools|Men's Groming Tools",
						"Perfumes & Fragrances|Perfumes & Fragrances",
						"Women's Groming Tools|Women's Groming Tools",
						"Others|Others"
					];
				}else if (s1.value == "Books & Learning") {
					var optionArray = [
						"|",
						"Book-Children|Book-Children",
						"Book-Educational Textbook|Book-Educational Textbook",
						"Book-Fiction|Book-Fiction",
						"Book-Nonfiction & Biography|Book-Nonfiction & Biography",
						"Book-Other|Book-Other",
						"Book-Technology|Book-Technology",
						"Interactive & Video Learning|Interactive & Video Learning",
						"Magazine & Comics|Magazine & Comics",
						"Stationary Items|Stationary Items",
						"Others|Others"
					];
				}else if (s1.value == "Bussiness & Industries") {
					var optionArray = [
						"|",
						"Bussiness For Sale|Bussiness For Sale",
						"Bussiness Offers|Bussiness Offers",
						"Bussiness Services|Bussiness Services",
						"Dealership-franchise|Dealership-franchise",
						"Equipments for Bussiness|Equipments for Bussiness",
						"Generator & Power Equipments|Generator & Power Equipments",
						"Machinery|Machinery",
						"Office Electronics|Office Electronics",
						"Office Furnitures & Fixtures|Office Furnitures & Fixtures",
						"Office Supplies|Office Supplies",
						"Raw Materials|Raw Materials",
						"Security & CCTV",
						"Tools & Samll Machines|Tools & Samll Machines",
						"Wholesale|Wholesale",
						"Others|Others"
					];
				}else if (s1.value == "Computer & Peripherals") {
					var optionArray = [
						"|",
						"Desktop Accessories & Components|Desktop Accessories & Components",
						"Desktop PC|Desktop PC",
						"Games|Games",
						"Graphic & Video Cards|Graphic & Video Cards",
						"Laptop & Accessories|Laptop & Accessories",
						"Monitors|Monitors",
						"Network Equipments|Network Equipments",
						"Printer & Scanner|Printer & Scanner",
						"Software|Software",
						"Storage & Optical Drives|Storage & Optical Drives",
						"Tablet Accessories|Tablet Accessories",
						"Tablet & iPad|Tablet & iPad",
						"TV card|TV card",
						"Others|Others"
					];
				}else if (s1.value == "Consumer Electonics") {
					var optionArray = [
						"|",
						"Audio & Video Dics|Audio & Video Dics",
						"Camera lens & Accessories|Camera lens & Accessories",
						"Digital Camcorder|Digital Camcorder",
						"Film Camera & Tape Camcorder|Film Camera & Tape Camcorder",
						"Headphones & Speakers|Headphones & Speakers",
						"Home Audio-video System",
						"Others|Others"
					];
				}else if (s1.value == "Events Happening") {
					var optionArray = [
						"|",
						"Dance-Music Concerts|Dance-Music Concerts",
						"Exhibition-Trade Fairs|Exhibition-Trade Fairs",
						"Festivals|Festivals",
						"Theater-Plays-Movies|Theater-Plays-Movies",
						"Workshop-Seminars|Workshop-Seminars",
						"Others|Others"
					];
				}else if (s1.value == "Home, Furnishing & Appliances") {
					var optionArray = [
						"|",
						"Antique & Collectables|Antique & Collectables",
						"Art & Handicrafts|Art & Handicrafts",
						"Bath & Plumbing|Bath & Plumbing",
						"Construction Materials|Construction Materials",
						"Food's & Drinks|Food's & Drinks",
						"Garden & Outdoor|Garden & Outdoor",
						"Home Appliances|Home Appliances",
						"Home Decor & Interior|Home Decor & Interior",
						"Home Furniture|Home Furniture",
						"Kitchen Appliances|Kitchen Appliances",
						"Kitchenware & Utilities|Kitchenware & Utilities",
						"Lighting,Color & Electricals|Lighting,Color & Electricals",
						"Lines Mattress|Lines Mattress",
						"Tools For Home Improvement|Tools For Home Improvement",
						"Others|Others"
					];
				}else if (s1.value == "Mobile & Accessories") {
					var optionArray = [
						"|",
						"|--Select Your Mobile Phone--",
						"Apple iPhone|Apple iPhone",
						"Blackberry|Blackberry",
						"Colors|Colors",
						"Gionee|Gionee",
						"HTC|HTC",
						"Huawei|Huawei",
						"Lava|Lava",
						"Lenovo|Lenovo",
						"LG|LG",
						"Micromax|Micromax",
						"Motorola|Motorola",
						"Nokia|Nokia",
						"Oppo|Oppo",
						"Samsung|Samsung",
						"Sony|Sony",
						"Other- Indian Brand|Other- Indian Brand",
						"Other- Chinese Brand|Other- Chinese Brand",
						"Other Brand|Other Brand",
						"|--Select Your Accessories",
						"Battery|Battery",
						"Charger|Charger",
						"Cover & Cases|Cover & Cases",
						"Data Cables",
						"Headsets & Earphones|Headsets & Earphones",
						"Memory Cards|Memory Cards",
						"Mobile Apps & Games|Mobile Apps & Games",
						"Mobile Unlock & Upgrade|Mobile Unlock & Upgrade",
						"Powerbank|Powerbank",
						"Screen protector|Screen protector",
						"Selfie Stick|Selfie Stick",
						"Smart Watches & Bands|Samrt Watches & Bands",
						"VR Glass",
					];
				}else if (s1.value == "Music Instrument") {
					var optionArray = [
						"|",
						"Amp & Speakers|Amp & Speakers",
						"DJ Gear & Lighting|DJ Gear & Lighting",
						"Instrument-Drum|Instrument-Drum",
						"Instrument-Guitars|Instrument-Guitars",
						"Instrument-Keyboard & Piano|Instrument-Keyboard & Piano",
						"Instrument-Nepali Traditional|Instrument-Nepali Traditional",
						"Instrument-Others|Instrument-Others",
						"Microphones|Microphones",
						"Mixture & Stdio Equipments|Mixture & Stdio Equipments",
						"Pedal & Processors For Guitar|Pedal & Processors For Guitar"
					];
				}else if (s1.value == "Pets & Pet Care") {
					var optionArray = [
						"|",
						"Acquarim & Fish Accessories|Acquarim & Fish Accessories",
						"Kennel & Dog Accessories|Kennel & Dog Accessories",
						"Pet-Cats|Pet-Cats",
						"Pet-Fish|Pet-Fish",
						"Pet-Other pets|Pet-Other pets",
						"Pet Services|Pet Services",
						"Other Pet Accessories"
						
					];
				}else if (s1.value == "Real State") {
					var optionArray = [
						"|",
						"Flatmates & Paying Guests|Flatmates & Paying Guests",
						"For Rent -Flat & Appartment|For Rent -Flat & Appartment",
						"For Rent -House|For Rent -House",
						"For Rent -Land|For Rent -Land",
						"For Rent -Office Space|For Rent -Office Space",
						"For Rent -Shutter & Shopping Space|For Rent -Shutter & Shopping Space",
						"For Sale -Commercial Property|For Sale -Commercial Property",
						"For Sale- Flat & Appartment|For Sale- Flat & Appartment",
						"For Sale -House|For Sale -House",
						"For Sale -Land|For Sale -Land"
					];
				}else if (s1.value == "Sports & Fitness") {
					var optionArray = [
						"|",
						"Fitness & Gym Equipments|Fitness & Gym Equipments",
						"Fitness Supplements|Fitness Supplements",
						"Fotball/Cricket/Other Sporting Goods|Fotball/Cricket/Other Sporting Goods",
						"Hiking & Outdoor|Hiking & Outdoor",
						"Others|Others"
					];
				}else if (s1.value == "Services") {
					var optionArray = [
						"|",
						"Advertiding-Printing-Publication|Advertiding-Printing-Publication",
						"Classes-Learning-Hobby-Music|Classes-Learning-Hobby-Music",
						"Coaching & Tutors|Coaching & Tutors",
						"Computer -Sales & Repair|Computer -Sales & Repair",
						"Computer -Web & Design|Computer -Web & Design",
						"Courses -Educational & Training|Courses -Educational & Training",
						"Electronics Repair|Electronics Repair",
						"Event Planner & Caterers|Event Planner & Caterers",
						"Financial & Legal|Financial & Legal",
						"Foreign Education|Foreign Education",
						"Health, Fitness & Beauty|Health, Fitness & Beauty",
						"Home Construct & Design|Home Construct & Design",
						"Home Repair & Hepler|Home Repair & Hepler",
						"Movers Courier & Transport|Movers Courier & Transport",
						"Music-Video-Photography|Music-Video-Photography",
						"Visa & Migration|Visa & Migration",
						"Writing-Designing-Translating|Writing-Designing-Translating",
						"Others|Others"
					];
				}else if (s1.value == "Toys & Video Games") {
					var optionArray = [
						"|",
						"Gaming Accessories|Gaming Accessories",
						"Gaming Console|Gaming Console",
						"Gaming Dics & Cartidges|Gaming Dics & Cartidges",
						"Toys -Educational|Toys -Educational",
						"Toys -General|Toys -General",
						"Toys -Outdoor|Toys -Outdoor",
						"Toys -Remote Controlled|Toys -Remote Controlled",
						"Toys -Stuffed, Dolls & Figures|Toys -Stuffed, Dolls & Figures",
						"Others|Others"
					];
				}else if (s1.value == "Travel, Tour & Packages") {
					var optionArray = [
						"|",
						"Air Tickets|Air Tickets",
						"Bus Tickets|Bus Tickets",
						"Car Rentals|Car Rentals",
						"Motorcycle Rentals|Motorcycle Rentals",
						"Hotel & Homestay|Hotel & Homestay",
						"Tour Packages -Domestic|Tour Packages -Domestic",
						"Tour Packages -International|Tour Packages -International",
						"Trekking Package|Trekking Package",
						"Others|Others"
					];
				}





				for (var option in optionArray) {
					var pair = optionArray[option].split("|");
					var newOption = document.createElement("option");
					newOption.value = pair[0];
					newOption.innerHTML = pair[1];
					s2.options.add(newOption);
				}
			}
		</script>

@endsection




@section('contents')
	<div class="widget-title" style="margin-top: 20px; "> <span class="icon"><i class="icon-th"></i></span>
            <a href="{{route('adds.createadds')}}" class="pull-right btn btn-primary"><i style="padding-right: 20px; min-height: 10px; width: 10px;" class="icon icon-plus-sign"></i>View Adds</a>
    </div>
	<h2>Edit Adds</h2>
	@if(count($errors)>0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{  $error }}</p>
				@endforeach
			</div>
		@endif
	 <?php foreach ($add_data as $key): ?>
		
    <form action="{{ URL::to('Adds/update/' .$key->id ) }}" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="email">Title</label>
				<input class="form-control" type="text" id="title" name="title" value="{{$key['title']}}" placeholder="{{$key['title']}}">
			</div>

			<div class="form-group">
				<label for="password">Category</label>
				<select class="form-control" name="category" value="{{$key['category']}}" id="category" onclick="populate(this.id,'subcategory')">
					<option>--select category--</option>
					<option>Apparels & Accessories</option>
				  	<option>Automobiles</option>
				  	<option>Beauty & Health</option>
				  	<option>Books & Learning</option>
				  	<option>Bussiness & Industries</option>
				  	<option>Computer & Peripherals</option>
				  	<option>Consumer Electonics</option>
				  	<option>Events Happening</option>
				  	<option>Home, Furnishing & Appliances</option>
				  	<option>Mobile & Accessories</option>
				  	<option>Music Instrument</option>
				  	<option>Pets & Pet Care</option>
				  	<option>Real State</option>
				  	<option>Services</option>
				  	<option>Sports & Fitness</option>
				  	<option>Toys & Video Games</option>
				  	<option>Travel, Tour & Packages</option>
				  	
				
				</select>
				
			</div>
			<div class="form-group">
				<label for="subcategory">SubCategory</label>
				<select id="subcategory" class="form-control" name="subcategory" value="{{$key['subcategory']}}">
					<option>--select Subcategory--</option>
				</select>
				
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea class="ckeditor" type="text" id="description" name="description">{{$key['description']}}</textarea>
			</div>
			<div class="form-group">
				<label for="email">Image</label>
				<input class="form-control" type="file" id="title" value="{{$key['image']}}" name="image">
			</div>
			<div class="form-group">
				<label for="email">Image 2</label>
				<input class="form-control" type="file" id="title" value="{{$key['image2']}}" name="image2">
			</div>
			<div class="form-group">
				<label for="email">Image 3</label>
				<input class="form-control" type="file" id="title" value="{{$key['image3']}} name="image3">
			</div>
			<div class="form-group">
			    <p class="pull-left" style="margin-right: 5px;" name="feature_item">Feature Item: </p>
			    <label class="checkbox-inline">
			      <input type="checkbox" name="feature_item" value="yes">Yes
			    </label>
			    <label class="checkbox-inline">
			      <input type="checkbox" name="feature_item" value="no">No
			    </label>
			    
			</div>
			<div class="form-group">
				<p class="pull-left" style="margin-right: 5px;" name="status">Status: </p>
			    <label class="radio-inline">
			      <input type="radio" name="status" value="Brand new">Brand New
			    </label>
			    <label class="checkbox-inline">
			      <input type="radio" name="status" value="Used">Used
			    </label>
				
			</div>

			<div class="form-group">
				<label for="email">Price<small style="font-style: italic;">(in Ruppes)</small></label>
				<input class="form-control" type="number" id="title" name="price"  value="{{$key['price']}}" placeholder="{{$key['price']}}">
			</div>
			
			<button type="submit" class="btn btn-primary">Update Add</button>
			{{ csrf_field() }}
	</form>
	
	<?php endforeach ?>  

@endsection